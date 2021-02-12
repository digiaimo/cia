<?php

namespace App\Http\Controllers;

use App\Models\contratosSociais;
use App\Models\informacoesBasicas;
use App\Models\selfs;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadPage()
    {
        return view('register.register_partI');
        //return redirect(RouteServiceProvider::HOME);
    }

    public function upload(Request $request)
    {
        $informacoesBasicas = new informacoesBasicas();
        $informacoesBasicas->user_id = auth()->user()->id;

        $informacoesBasicas->website = $request->website;

        $informacoesBasicas->faturamento_ultimo_mes = $request->faturamentoMes;

        $informacoesBasicas->save();


        for ($i = 0; $i < count($request->allFiles()['contratoSocial']); $i++){
            $file = $request->allFiles()['contratoSocial'][$i];

            $contratoSocial = new contratosSociais();
            $contratoSocial->informacoes_basicas_id = $informacoesBasicas->id;
            $contratoSocial->caminho_arquivo = $file->store('contratoSocial/' . auth()->user()->id);
            $contratoSocial->save();
            //dd($file);
        }
        $self = new selfs();
        $self->caminho_arquivo = $request->file('self')->store('self/' . auth()->user()->id);
        $self->informacoes_basicas_id = $informacoesBasicas->id;
        $self->save();

       return redirect()->route('dashboard');

    }

    //public function store(Request $request)
    //{
    //
    //}
}
