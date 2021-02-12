<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Usuários') }}
        </h2>
    </x-slot>

    <div class="flex justify-center ">

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-center">Usuários</h2>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOME</th>
                                <th scope="col">CNPJ</th>
                                <th scope="col">RAZÃO SOCIAL</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">VER USUÁRIO</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->cnpj }}</td>
                                    <td>{{ $user->razao_social }}</td>
                                    <td>{{ $user->statusCliente->status }}</td>
                                    <td><a href="{{ route('admin.user_show', ['user' => $user->id]) }}">
                                            <button class="bg-white border-b border-gray-200 text-dark
                                            w-100">Ver</button>
                                        </a>
                                    </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
