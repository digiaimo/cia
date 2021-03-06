<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="toastr.css" rel="stylesheet"/>



        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="jquery.min.js"></script>
        <script src="toastr.js"></script>
        @toastr_css

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            @if(Request::is('admin/*'))
                @include('layouts.navigation_admin')
            @endif

            @if(!(Request::is('admin/*')))
                @include('layouts.navigation')
            @endif

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
        <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>

        @stack('js')

    </body>
    @jquery
    @toastr_js
    @toastr_render
</html>
