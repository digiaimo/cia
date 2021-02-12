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

        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">CADASTRO DA EMPRESA</h3>
                    {{--                    <p class="mt-1 text-sm text-gray-600">--}}
                    {{--                        This information will be displayed publicly so be careful what you share.--}}
                    {{--                    </p>--}}
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="company_website"
                                           class="block text-sm font-medium text-gray-700">
                                        Website
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                    http://
                                                </span>
                                        <input type="text" name="company_website" id="company_website"
                                               class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                               placeholder="www.example.com">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="about" class="block text-sm font-medium text-gray-700">
                                    Origem Empresa
                                </label>
                                <div class="mt-1">
                                    <textarea id="about" name="about" rows="3"
                                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                              placeholder="you@example.com"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    Brief description for your profile. URLs are hyperlinked

                                </p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Foto
                                </label>
                                <div class="mt-2 flex items-center">
                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                  <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                  </svg>
                </span>
                                    <button type="button"
                                            class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Change
                                    </button>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Cover photo
                                </label>
                                <div
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                             viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload"
                                                   class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            PNG, JPG, GIF up to 10MB
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
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
{{--                    <h3 class="text-lg font-medium leading-6 text-gray-900">Estados dos Sócios</h3>--}}
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
{{--                                    <label for="first_name" class="block text-sm font-medium text-gray-700">CPF</label>--}}
{{--                                    <input type="text" name="cpf" id="cpf"--}}
{{--                                           autocomplete="given-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md "--}}
{{--                                           onkeypress="$(this).mask('000.000.000-00');">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Nome</label>--}}
{{--                                    <input type="text" name="name" id="last_name" autocomplete="family-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Endividamento--}}
{{--                                        Total</label>--}}
{{--                                    <input type="text" name="PaymentAmount" id="last_name" autocomplete="family-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md"--}}
{{--                                           onkeypress="$(this).mask('R$ 999.990,00')">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Origem--}}
{{--                                        da Empresa</label>--}}
{{--                                    <input type="text" name="PaymentAmount" id="last_name" autocomplete="family-name"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-4">--}}
{{--                                    <label for="email_address" class="block text-sm font-medium text-gray-700">Produtos--}}
{{--                                        da Empresa</label>--}}
{{--                                    <input type="text" name="email_address" id="email_address" autocomplete="email"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-4">--}}
{{--                                    <label for="email_address" class="block text-sm font-medium text-gray-700">Processo--}}
{{--                                        Operacional</label>--}}
{{--                                    <input type="text" name="email_address" id="email_address" autocomplete="email"--}}
{{--                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full--}}
{{--                                           shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6 sm:col-span-3">--}}
{{--                                    <label for="country" class="block text-sm font-medium text-gray-700">Tipo--}}
{{--                                        Sócio</label>--}}
{{--                                    <select id="Partner" name="Partner"--}}
{{--                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--                                        <option value="Partner">Sócio</option>--}}
{{--                                        <option value="Owner">Dono</option>--}}
{{--                                        <option value="Partner-Owner">Sócio-Dono</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">--}}
{{--                                <button type="submit"--}}
{{--                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                                    Save--}}
{{--                                </button>--}}
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
