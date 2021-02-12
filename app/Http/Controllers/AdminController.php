<?php

namespace App\Http\Controllers;

use App\Models\contratosSociais;
use App\Models\informacoesBasicas;
use App\Models\selfs;
use App\Models\StatusCliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller {

    public function index()
    {
        return view('admin.dashboard_admin');
    }

    public function usersList()
    {
        $users = User::all();

        return view('admin.users_list', compact('users'));
    }

    public function userShow($userId)
    {
        $user = User::where('id', $userId)->with([
            'statusCliente',
            'informacoesBasicas',
            'informacoesBasicas.selfs',
            'informacoesBasicas.contatosSociais',
        ])->first();

        $allStatus = StatusCliente::all();

        return view('admin.user_show', compact('user', 'allStatus'));
    }

    public function downloadContrato($rota)
    {
        $path = contratosSociais::where('id', $rota)->first();

        return response()->download(public_path(env('APP_URL') . '/storage/' . $path->caminho_arquivo));
    }

    public function downloadSelf($rota)
    {
        $path = selfs::where('id', $rota)->first();

        return response()->download(public_path(env('APP_URL') . '/storage/' . $path->caminho_arquivo));
    }

    public function updateStatus($userid, Request $request)
    {
        try
        {
            $user = User::find($userid);
            $user->status_cliente_id = $request->cliente_status;
            $user->save();

            toastr('Status alterado com sucesso');

            return redirect()->back();
        } catch (\Exception $error)
        {
            toastr($error);
        }
    }

    public function destroySelf(Request $request)
    {
        try
        {
            $deletSelf = $request->self;
            $selfDeleted = Storage::delete($deletSelf);

            if ($selfDeleted)
            {
                selfs::destroy($request->self_id);
            }
            if ( ! $selfDeleted)
            {
                toastr()->error('Erro ao excluir foto de self');

                return redirect()->back();
            }

            toastr('Contrato excluido com sucesso');

            return redirect()->back();

        } catch (\Exception $exception)
        {
            toastr()->error($exception->getMessage());

            report($exception);

            return redirect()->back();
        }
    }

    public function destroyContrato(Request $request)
    {
        try
        {
            $deletcontrato = $request->contrato;
            $contratoDeleted = Storage::delete($deletcontrato);

            if ($contratoDeleted)
            {
                contratosSociais::destroy($request->contrato_id);
            }
            if ( ! $contratoDeleted)
            {
                toastr()->error('Erro ao excluir Contrato Social');

                return redirect()->back();
            }

            toastr('Contrato excluido com sucesso');

            return redirect()->back();

        } catch (\Exception $exception)
        {
            toastr()->error($exception->getMessage());

            report($exception);

            return redirect()->back();
        }
    }

    public function destroyUser($userId)
    {
        try
        {
            $user = User::where('id', $userId)->with([
                'informacoesBasicas',
                'informacoesBasicas.selfs',
                'informacoesBasicas.contatosSociais',
            ])->first();

            $informacoes = $user->informacoesBasicas;
            $selfs = $user->informacoesBasicas->selfs;
            $contratosSocial = $user->informacoesBasicas->contatosSociais;

            $selfs->each(function ($self)
            {
                selfs::destroy($self->id);
            });

            $contratosSocial->each(function ($contratoSocial)
            {
                contratosSociais::destroy($contratoSocial->id);
            });
            informacoesBasicas::destroy($informacoes->id);
            User::destroy($user->id);

            return redirect()->route('admin.users_list');

        } catch (\Exception $exception)
        {
            toastr()->error('Erro ao Deletar Usuário ' . $exception->getMessage());

            report($exception);

            return redirect()->back();
        }
    }
}
