@extends('layouts.template')
<body style="background-image: url({{ asset('images/bg_fundo.webp') }}); background-size: cover">

@section('content')
    <div class="bg-gray-100 rounded-lg formRegister">
        <h2 class="text-center pt-4 pb-3">Cadastro</h2>
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
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <label for="inputName">Nome</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                          <span class="text-gray-500 sm:text-sm">
                              <i class="far fa-user"></i>
                          </span>
                        </div>
                        <input type="text" class="h-12 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9
                    pr-12 sm:text-sm border-gray-300 rounded-md text-dark" id="inputName" placeholder="Nome"
                               name="name" required value="{{ old('name') }}">
                    </div>
                </div>

                <div>
                    <label for="inputEmail">Email</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                          <span class="text-gray-500 sm:text-sm">
                              <i class="fas fa-envelope-open-text"></i>
                          </span>
                        </div>
                        <input type="text" class="h-12 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9
                    pr-12 sm:text-sm border-gray-300 rounded-md text-dark" id="inputEmail" placeholder="Email"
                               name="email" required value="{{ old('email') }}">
                    </div>
                </div>

                <div>
                    <label for="inputEmail">Telefone para Contato</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                          <span class="text-gray-500 sm:text-sm">
                              <i class="fas fa-envelope-open-text"></i>
                          </span>
                        </div>
                        <input type="text" class="h-12 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9
                    pr-12 sm:text-sm border-gray-300 rounded-md text-dark" id="inputEmail" placeholder="(00)00000-0000"
                               name="celphone" required onkeypress="$(this).mask('(00) 0000-00009')" value="{{ old('celphone') }}">
                    </div>
                </div>

                <div>
                    <label for="inputCnpj">CNPJ</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                          <span class="text-gray-500 sm:text-sm">
                              <i class="far fa-user"></i>
                          </span>
                        </div>
                        <input type="text" class="h-12 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9
                    pr-12 sm:text-sm border-gray-300 rounded-md text-dark" id="inputCnpj"
                               placeholder="00.000.000/0001-00"
                               name="cnpj" maxlength="18" required onkeypress="$(this).mask('00.000.000/0000-00')"
                               value="{{ old('cnpj') }}">
                    </div>
                </div>

                <div>
                    <label for="inputCelphone">Razão Social</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                          <span class="text-gray-500 sm:text-sm">
                              <i class="fas fa-phone-square-alt"></i>
                          </span>
                        </div>
                        <input type="text" class="h-12 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9
                    pr-12 sm:text-sm border-gray-300 rounded-md text-dark phone-ddd-mask" id="inputCelphone"
                               name="razao_social"  required value="{{ old('razao_social') }}">
                    </div>
                </div>

                <div class="mt-3.5">
                    <button type="submit" class="btn btn-cia text-white w-full">Próximo</button>
                </div>

            </form>



        </div>
        <div class="text-center pb-3 link">
            <a href="{{ route('login') }}" class="link">Já tenho Conta</a>
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
