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

        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
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
                                        <label for="last_name" class="block text-sm font-medium
                                        text-gray-700">Self (Tirar uma Foto do Rosto)</label>
                                        <input type="file" accept="image/*" capture name="self" required
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                                           shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        <span>Tirar a foto em um ambiente claro, com boa iluminação</span>
                                    </div>

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
