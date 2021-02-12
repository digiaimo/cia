@extends('layouts.template')
<body style="background-image: url({{ asset('images/3441468.jpg') }}); background-size: cover">

@section('content')
    <div class=" formRegister container bg-gray-100 rounded-lg ">
        <h2 class="text-center pt-4 pb-3">Cadastro</h2>
        <div class="">
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
                    <label>Faturamento</label>
                    <div class="mt-1 mb-2 relative rounded-md shadow-sm">
                        <input type="file" class="" name="name" required>
                    </div>
                </div>

                <div>
                    <label>Endividamento com Bancos e Fidcs</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input type="file" class="" name="name" required>
                    </div>
                </div>

                <div>
                    <label>Relação de Sacados ou Curva ABC</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input type="file" class="" name="name" required>
                    </div>
                </div>

                <div>
                    <label for="inputCelphone">Prospecção</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                          <span class="text-gray-500 sm:text-sm">
                              <i class="fas fa-phone-square-alt"></i>
                          </span>
                        </div>
                        <input type="text" class="h-12 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9
                    pr-12 sm:text-sm border-gray-300 rounded-md text-dark phone-ddd-mask" id="inputCelphone"
                               placeholder="(00)00000-0000"
                               name="celphone" maxlength=14 required onkeypress="$(this).mask('(00) 0000-00009')">
                    </div>
                </div>

                <div class="inputs">
                    <button type="submit" class="btn bg-purple-700 text-white w-full mb-3">Próximo</button>
                </div>
            </form>


        </div>
        <div class="text-center pb-3 link">
            <a href="" class="link">Já tenho Conta</a>
        </div>
    </div>
@endsection

</body>
@section('script')
@endsection
