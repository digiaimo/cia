@extends('layouts.template')
<body style="background-image: url({{ asset('images/bg_fundo.webp') }}); background-size: cover">

@section('content')
    <div class="bg-gray-100 rounded-lg formRegister">
        <h2 class="text-center pt-4 pb-3">Cadastrar Senha</h2>
        <div class="m-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('password.register', ['user' => session()->get('user')->id]) }}">
                @csrf
{{--                <div>--}}
{{--                    <label for="inputName">Senha</label>--}}
{{--                    <div class="mt-1 relative rounded-md shadow-sm">--}}
{{--                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">--}}
{{--                          <span class="text-gray-500 sm:text-sm">--}}
{{--                              <i class="far fa-user"></i>--}}
{{--                          </span>--}}
{{--                        </div>--}}
{{--                        <input type="text" class="h-12 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9--}}
{{--                    pr-12 sm:text-sm border-gray-300 rounded-md text-dark" id="inputName" placeholder="Nome"--}}
{{--                               name="password" required>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <label for="inputEmail">Confirmar Senha</label>--}}
{{--                    <div class="mt-1 relative rounded-md shadow-sm">--}}
{{--                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">--}}
{{--                          <span class="text-gray-500 sm:text-sm">--}}
{{--                              <i class="fas fa-envelope-open-text"></i>--}}
{{--                          </span>--}}
{{--                        </div>--}}
{{--                        <input type="text" class="h-12 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9--}}
{{--                    pr-12 sm:text-sm border-gray-300 rounded-md text-dark" id="inputEmail" placeholder="Email"--}}
{{--                               name="confimar_senha" required>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="mt-4">
                    <x-label for="password" :value="__('Senha')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirmar Senha')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full"
                             type="password"
                             name="password_confirmation" required />
                </div>


                <div class="mt-3.5">
                    <button type="submit" class="btn btn-cia text-white w-full">finalizar</button>
                </div>

            </form>

        </div>
    </div>
@endsection

</body>
@section('script')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
@endsection


