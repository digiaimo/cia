@extends('layouts.template')

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

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Estados dos Sócios</h3>
                                            <p class="mt-1 text-sm text-gray-600">
                                                <i class="far fa-building"> Informações Básicas da Empresa</i>
                                            </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">CPF</label>
                                    <input type="text" name="cpf" id="cpf"
                                           autocomplete="given-name"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                                           shadow-sm sm:text-sm border-gray-300 rounded-md "
                                           onkeypress="$(this).mask('000.000.000-00');" required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Nome</label>
                                    <input type="text" name="name" id="last_name" autocomplete="family-name"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                                           shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">Tipo
                                        Sócio</label>
                                    <select id="Partner" name="Partner" required
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="Partner">Sócio</option>
                                        <option value="Owner">Dono</option>
                                        <option value="Partner-Owner">Sócio-Dono</option>
                                    </select>
                                </div>

                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    {{--                        <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>--}}
                    <p class="mt-1 text-sm text-gray-600">
                        Continue Preenchendo o fomulário para terminar seu cadastro.
                    </p>
                </div>
            </div>
{{--    <div class="hidden sm:block" aria-hidden="true">--}}
{{--        <div class="py-5">--}}
{{--            <div class="border-t border-gray-200"></div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="mt-10 sm:mt-0">--}}
{{--        <div class="md:grid md:grid-cols-3 md:gap-6">--}}
{{--            <div class="md:col-span-1">--}}
{{--                <div class="px-4 sm:px-0">--}}
{{--                    <h3 class="text-lg font-medium leading-6 text-gray-900">Pessoas Fisicas e Juridicas Vinculadas</h3>--}}
{{--                    --}}{{--                        <p class="mt-1 text-sm text-gray-600">--}}
{{--                    --}}{{--                            <i class="far fa-building"> Informações Básicas da Empresa</i>--}}
{{--                    --}}{{--                        </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="mt-5 md:mt-0 md:col-span-2">--}}
{{--                <form action="#" method="POST">--}}
{{--                    <div class="shadow overflow-hidden sm:rounded-md">--}}
{{--                        <div class="px-4 py-5 bg-white sm:p-6">--}}
{{--                            <div class="grid grid-cols-6 gap-6">--}}
{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="first_name" class="block text-sm font-medium--}}
{{--                                    text-gray-700">CPF/CNPJ</label>--}}
{{--                                    <input type="text" name="cpf" id="cpf"--}}
{{--                                           autocomplete="given-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md "--}}
{{--                                           onkeypress="$(this).mask('000.000.000-00');" placeholder="000.000.000-00">--}}
{{--                                    <input type="text" name="cnpj" id="cnpj"--}}
{{--                                           autocomplete="given-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md "--}}
{{--                                           onkeypress="$(this).mask('00.000.000/0000-00')"--}}
{{--                                           placeholder="00.000.000/0000-00">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Nome</label>--}}
{{--                                    <input type="text" name="name" id="last_name" autocomplete="family-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Tipo de--}}
{{--                                        Vinculo</label>--}}
{{--                                    <input type="text" name="PaymentAmount" id="last_name" autocomplete="family-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md"--}}
{{--                                           onkeypress="$(this).mask('R$ 999.990,00')">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="last_name"--}}
{{--                                           class="block text-sm font-medium text-gray-700">Observação</label>--}}
{{--                                    <input type="text" name="PaymentAmount" id="last_name" autocomplete="family-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--                                </div>--}}

{{--                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">--}}
{{--                                    <button type="submit"--}}
{{--                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                                        Save--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="hidden sm:block" aria-hidden="true">--}}
{{--        <div class="py-5">--}}
{{--            <div class="border-t border-gray-200"></div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="mt-10 sm:mt-0">--}}
{{--        <div class="md:grid md:grid-cols-3 md:gap-6">--}}
{{--            <div class="md:col-span-1">--}}
{{--                <div class="px-4 sm:px-0">--}}
{{--                    <h3 class="text-lg font-medium leading-6 text-gray-900">Pessoas Fisicas e Juridicas Vinculadas</h3>--}}
{{--                    --}}{{--                        <p class="mt-1 text-sm text-gray-600">--}}
{{--                    --}}{{--                            <i class="far fa-building"> Informações Básicas da Empresa</i>--}}
{{--                    --}}{{--                        </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="mt-5 md:mt-0 md:col-span-2">--}}
{{--                <form action="#" method="POST">--}}
{{--                    <div class="shadow overflow-hidden sm:rounded-md">--}}
{{--                        <div class="px-4 py-5 bg-white sm:p-6">--}}
{{--                            <div class="grid grid-cols-6 gap-6">--}}
{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="first_name" class="block text-sm font-medium--}}
{{--                                    text-gray-700">CPF/CNPJ</label>--}}
{{--                                    <input type="text" name="cpf" id="cpf"--}}
{{--                                           autocomplete="given-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md "--}}
{{--                                           onkeypress="$(this).mask('000.000.000-00');" placeholder="000.000.000-00">--}}
{{--                                    <input type="text" name="cnpj" id="cnpj"--}}
{{--                                           autocomplete="given-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md "--}}
{{--                                           onkeypress="$(this).mask('00.000.000/0000-00')"--}}
{{--                                           placeholder="00.000.000/0000-00">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Nome</label>--}}
{{--                                    <input type="text" name="name" id="last_name" autocomplete="family-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Tipo de--}}
{{--                                        Vinculo</label>--}}
{{--                                    <input type="text" name="PaymentAmount" id="last_name" autocomplete="family-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md"--}}
{{--                                           onkeypress="$(this).mask('R$ 999.990,00')">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="last_name"--}}
{{--                                           class="block text-sm font-medium text-gray-700">Observação</label>--}}
{{--                                    <input type="text" name="PaymentAmount" id="last_name" autocomplete="family-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--                                </div>--}}

{{--                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">--}}
{{--                                    <button type="submit"--}}
{{--                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                                        Save--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
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
