@extends('layouts.template')
<body style="background-image: url({{ asset('images/bg_fundo.webp') }}); background-size: cover">

@section('content')
    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
    <div>
        <form action="{{ route('documents.store', ['user' => session()->get('user')->id]) }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0 border border-light bg-white shadow rounded-md">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Informaçoes da Empresa</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                <i class="far fa-building"> Informações Básicas da Empresa</i>
                            </p>
                        </div>
                    </div>

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-6 sm:col-span-3">

                                    <label for="company_website"
                                               class="block text-sm font-medium text-gray-700">
                                            Website
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                    http://
                                                </span>
                                            <input type="text" name="website" id="company_website"
                                                   class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                   placeholder="www.example.com" required>
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium
                                        text-gray-700">Faturamento do Último Mês</label>
                                        <input type="text" name="faturamentoMes"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                                           shadow-sm sm:text-sm border-gray-300 rounded-md" required onkeypress="$(this).mask('R$ 999.990,00')">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last_name" class="block text-sm font-medium
                                        text-gray-700">Contrato Social</label>
                                        <input type="file" name="contratoSocial[]" multiple
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                                           shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                    </div>

{{--                                    <div class="col-span-6 sm:col-span-3">--}}
{{--                                        <label for="last_name" class="block text-sm font-medium--}}
{{--                                        text-gray-700">Self (Tirar uma Foto do Rosto)</label>--}}
{{--                                        <input type="file" accept="image/*" capture name="self" required--}}
{{--                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--                                        <span>Tirar a foto em um ambiente claro, com boa iluminação</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-span-6 sm:col-span-3">--}}
{{--                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Origem--}}
{{--                                            da Empresa</label>--}}
{{--                                        <input type="text" name="CompanyOrigin"--}}
{{--                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md" required>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-span-6 sm:col-span-4">--}}
{{--                                        <label for="email_address" class="block text-sm font-medium text-gray-700">Produtos--}}
{{--                                            da Empresa</label>--}}
{{--                                        <input type="text" name="CompanyProducts" autocomplete="email"--}}
{{--                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md" required>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-span-6 sm:col-span-4">--}}
{{--                                        <label class="block text-sm font-medium text-gray-700">Processo--}}
{{--                                            Operacional</label>--}}
{{--                                        <input type="text" name="OperationalProcess"--}}
{{--                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md" required>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-span-6 sm:col-span-3">--}}
{{--                                        <label for="country" class="block text-sm font-medium text-gray-700">A EMPRESA--}}
{{--                                            JÁ PASSOU POR MOMENTO NEGATIVO?</label>--}}
{{--                                        <select name="debts"--}}
{{--                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--                                            <option>Não</option>--}}
{{--                                            <option>Sim</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-span-6">--}}
{{--                                        <label for="street_address" class="block text-sm font-medium text-gray-700">RELACIONAMENTO--}}
{{--                                            COM A EMPRESA:--}}
{{--                                            COMO CONHECEU A EMPRESA? POSSUI ALGUMA REFERENCIA? JÁ FOI SEU--}}
{{--                                            CLIENTE?</label>--}}
{{--                                        <input type="text" name="street_address" id="street_address"--}}
{{--                                               autocomplete="street-address"--}}
{{--                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--                                    </div>--}}

                                </div>
                            </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Próximo
                            </button>
                        </div>
                        </div>
                    </div>
                </div>


            </div>
        </form>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    {{--                        <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>--}}
                    <p class="mt-1 text-sm text-gray-600">
                        Continue Preenchendo o fomulário para terminar seu cadastro.
                    </p>
                </div>
            </div>
    </div>

@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
@endsection
