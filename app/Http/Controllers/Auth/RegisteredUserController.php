<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\contratosSociais;
use App\Models\informacoesBasicas;
use App\Models\selfs;
use App\Models\StatusCliente;
use App\Models\User;
use App\Notifications\EmailRegister;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisteredUserController extends Controller
{
   public $user;

   public $userSession;

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('register.personal_data');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cnpj' => 'required',
            'razao_social' => 'required|string|max:255',
            'celphone' => 'required|min:3|max:15'
            //'password' => 'required|string|confirmed|min:8',
        ]);

        $status = StatusCliente::where('status', 'PENDENTE')->first();

        $this->user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cnpj' => $request->cnpj,
            'razao_social' => $request->razao_social,
            'celphone' => $request->celphone,
            'status_cliente_id' => $status->id,
        ]);

        session()->flush();
        $this->userSession = session('user');
        session(['user' => $this->user]);

        //event(new Registered($user));

        return redirect()->route('documents', ['user' => $this->user->id]);

        //return redirect(RouteServiceProvider::HOME);
    }

    public function registerDocuments()
    {
        return view('register.register_partI');
    }

    public function storeDocuments(Request $request)
    {
        $informacoes = informacoesBasicas::create([
            'user_id' => session()->get('user')->id,
            'website' => $request['website'],
            'faturamento_ultimo_mes' => $request['faturamentoMes'],
        ]);

        for ($i = 0; $i < count($request->allFiles()['contratoSocial']); $i++)
        {
            $file = $request->allFiles()['contratoSocial'][$i];

            $contratoSocial = new contratosSociais();
            $contratoSocial->caminho_arquivo = $file->store('contrato_social/' . $informacoes->user_id);
            $contratoSocial->informacoes_basicas_id = $informacoes->id;
            $contratoSocial->save();
            unset($contratoSocial);
        }

        return redirect()->route('self.page', ['user' => session()->get('user')->id]);

    }

    public function contratoPage()
    {
        return view('register.contrato');
    }

    public function contrato(Request $request)
    {

        $user = User::where('id', session()->get('user'))->with('informacoesBasicas')->first();

        for ($i = 0; $i < count($request->allFiles()['contratoSocial']); $i++)
        {
            $file = $request->allFiles()['contratoSocial'][$i];

            $contratoSocial = new contratosSociais();
            $contratoSocial->caminho_arquivo = $file->store('contrato_social/' . $user->id);
            $contratoSocial->informacoes_basicas_id = $user->informacoesBasicas->id;
            $contratoSocial->save();
            unset($contratoSocial);
        }

        return redirect(RouteServiceProvider::HOME);
    }

    public function selfPage()
    {
        return view('register.infos_self');
    }

    public function self(Request $request)
    {
        $file = $request['self'];

        $user = User::where('id', session()->get('user')->id)->with('informacoesBasicas')->first();

        $selfFile = new selfs();

        $selfFile->caminho_arquivo = $file->store('self/' . session()->get('user')->id);
        $selfFile->informacoes_basicas_id = $user->informacoesBasicas->id;
        $selfFile->save();
        if (is_null(auth()->user()))
        {
            return redirect()->route('password.page', ['user' => session()->get('user')->id]);
        }

        if (! is_null(auth()->user()))
        {
            return redirect(RouteServiceProvider::HOME);
        }

    }

    public function passwordPage()
    {
        return view('register.password');
    }


    public function password(Request $request)
    {
        try
        {
            $request->validate([
                'password' => 'required|string|confirmed|min:8',
            ]);

            $status = StatusCliente::where('status', 'ANALISE')->first();

            $userPassword = new User();
            $userPassword = User::where('id', session()->get('user')->id)->with(['informacoesBasicas', 'informacoesBasicas.selfs'])->first();
            $userPassword->password = Hash::make($request->password);
            $self = $userPassword->informacoesBasicas->selfs;
            if (!is_null($self))
            {
                $userPassword->status_cliente_id = $status->id;
            }
            $userPassword->save();

            event(new Registered($userPassword));

            Auth::login($userPassword);

            $userPassword->notify(new EmailRegister($userPassword));

            return redirect(RouteServiceProvider::HOME);
        }catch (\Exception $exception)
        {
            dd($exception);
            report($exception);

        }

    }
}
