<?php

namespace App\Http\Controllers;

use App\Models\StatusCliente;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)
        ->with([
            'informacoesBasicas',
            'informacoesBasicas.selfs',
            'informacoesBasicas.contatosSociais',
            'statusCliente'

        ])->first();

        $self = $user->informacoesBasicas->selfs->first();

        $status = $user->statusCliente->status;

        //if (is_null($self))
        //{
        //    return redirect()->route('self.page', ['user' => session()->get('user')->id]);
        //}

        return view('dashboard', compact('self', 'status', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.infos_self');
    }

    public function createSelf()
    {
        return view('register.infos_self');
    }

    public function selfUpdate(Request $request)
    {
        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function resetPassword()
    {

    }
}
