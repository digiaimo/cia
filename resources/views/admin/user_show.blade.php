<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuário ') . $user->name }}
        </h2>
    </x-slot>

    <div class="flex justify-center ">

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-center">Usuário</h2>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">CNPJ</th>
                                <th scope="col">RAZÃO SOCIAL</th>
                                <th scope="col">TELEFONE</th>
                                <th scope="col">STATUS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->cnpj }}</td>
                                <td>{{ $user->razao_social }}</td>
                                <td>{{ $user->celphone }}</td>
                                <td>{{ $user->statusCliente->status }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">WEBSITE</th>
                                <th scope="col">FATURAMENTO DO ULTIMO MÊS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->informacoesBasicas->website }}</td>
                                <td>{{ $user->informacoesBasicas->faturamento_ultimo_mes }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr class="text-center">
                                <th scope="col">ID</th>
                                <th scope="col">CONTRATO SOCIAL</th>
                                <th scope="col">BAIXAR</th>
                                <th scope="col">DELETAR</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            @if($user->informacoesBasicas->contatosSociais->count() != 0)
                            @foreach($user->informacoesBasicas->contatosSociais as $contrato)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td><a href="{{ env('APP_URL') }}/storage/{{ $contrato->caminho_arquivo }}"
                                           target="_blank">
                                            <button class="bg-white border-b border-gray-200 text-dark
                                            w-100">Ver
                                            </button>
                                        </a></td>
                                    <td><a href="{{ route('download.contrato', ['contrato' => $contrato->id]) }}">
                                            <button class="bg-white border-b border-gray-200 text-dark
                                            w-100">Baixar
                                            </button>
                                        </a>
                                    </td>

                                    <td>
                                        <form action="{{ route('admin.contrato_delet', ['user' => $user->id]) }}"
                                              method="post">
                                            @csrf
                                            <input type="number" hidden name="contrato_id" value="{{ $contrato->id }}">
                                            <button type="submit" name="contrato"
                                                    value="{{  $contrato->caminho_arquivo }}"
                                                    class="bg-white border-b border-gray-200 text-dark
                                            w-100">Deletar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @endif

                            </tbody>
                        </table>
                        @if($user->informacoesBasicas->contatosSociais->count() == 0 )
                            <h3 class="text-center text-red-900">SEM CONTRATO SOCIAL</h3>
                            <hr class="bg-dark">
                        @endif

                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr class="text-center">
                                <th scope="col">ID</th>
                                <th scope="col">SELF</th>
                                <th scope="col">BAIXAR</th>
                                <th scope="col">DELETAR</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            @if($user->informacoesBasicas->selfs->count() != 0 )
                                @foreach($user->informacoesBasicas->selfs as $self)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td><a href="{{ env('APP_URL') }}/storage/{{ $self->caminho_arquivo }}"
                                               target="_blank">
                                                <button class="bg-white border-b border-gray-200 text-dark
                                            w-100">Ver
                                                </button>
                                            </a></td>
                                        <td><a href="{{ route('download.self', ['self' => $self->id]) }}">
                                                <button
                                                    class="bg-white border-b border-gray-200 text-dark
                                            w-100">Baixar
                                                </button>
                                            </a></td>
                                        <td>
                                            <form action="{{ route('admin.sef_delet', ['user' => $user->id]) }}"
                                                  method="post">
                                                @csrf
                                                <input type="number" hidden name="self_id" value="{{ $self->id }}">
                                                <button type="submit" name="self"
                                                        value="{{  $self->caminho_arquivo }}"
                                                        class="bg-white border-b border-gray-200 text-dark
                                            w-100">Deletar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                        @if($user->informacoesBasicas->selfs->count() == 0 )
                            <h3 class="text-center text-red-900">SEM SELF</h3>
                            <hr class="bg-dark">
                        @endif

                        <div class="">
                            <form action="{{ route('admin.update_status', ['user' => $user->id]) }}" method="post"
                                  class="text-center">
                                @csrf
                                <div>
                                    <label for="cliente_status">Atualizar Status</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <select name="cliente_status" id="cliente_status">
                                            @foreach($allStatus as $status)
                                                <option value="{{ $status->id }}"> {{ $status->status }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-3.5 text-center">
                                    <button type="submit" class="btn btn-cia text-white w-50">Alterar
                                        Status
                                    </button>
                                </div>


                            </form>
                        </div>

                    </div>
                    <div class="text-center">
                        <a href="{{ route('admin.destroy_user', ['user' => $user->id]) }}">
                            <button class="btn-cia-oragen m-3 p-2 text-white btn w-50 ">Deletar Usuário</button>
                        </a>

                        <a href="{{ route('admin.users_list') }}">
                            <button class="btn-cia m-3 p-2 text-white btn w-50 ">Voltar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
