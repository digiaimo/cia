<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    STATUS DO PERFIL: {{ $status }}
                </div>
            </div>
        </div>
    </div>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuário ') . auth()->user()->name }}
        </h2>
    </x-slot>

    @if(! is_null($self) && auth()->user()->role_id != 1)

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
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach($user->informacoesBasicas->contatosSociais as $contrato)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td><a href="{{ env('APP_URL') }}/storage/{{ $contrato->caminho_arquivo }}"
                                               target="_blank">
                                                <button class="bg-dark border-b border-dark text-white w-100">Ver
                                                </button>
                                            </a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                <tr class="text-center">
                                    <th scope="col">ID</th>
                                    <th scope="col">SELF</th>
                                    <th scope="col">BAIXAR</th>
                                    <th scope="col">Deletar</th>
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

                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="flex justify-center">

                @if(is_null($self) && auth()->user()->role_id != 1)
                    @include('components.self_null')
                @endif

                @if($user->informacoesBasicas->contatosSociais->count() === 0 && auth()->user()->role_id != 1)
                    @include('components.contrato_null')
                @endif

            </div>

</x-app-layout>
