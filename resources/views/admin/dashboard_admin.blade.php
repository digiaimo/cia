<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="flex justify-center ">

        <div id="chart" style="height: 300px; width: 450px">
            <h2 class="text-center m-2">Total de Usuários</h2>
            @push('js')
                <script>
                    const chart = new Chartisan({
                        el: "#chart",
                        url: "@chart('sample_chart')",
                    })
                </script>
            @endpush
        </div>

        <div id="status" style="height: 300px; width: 450px">
            <h2 class="text-center m-2">Status dos Clientes</h2>
            @push('js')
                <script>
                    const status = new Chartisan({
                        el: "#status",
                        url: "@chart('status_chart')",
                    })
                </script>
            @endpush
        </div>

    </div>

    {{--    <div class="py-12">--}}
    {{--            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
    {{--                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
    {{--                    <div class="p-6 bg-white border-b border-gray-200">--}}
    {{--                        <div id="chart" style="height: 300px; width: 450px"></div>--}}
    {{--                        @push('js')--}}
    {{--                            <script>--}}
    {{--                                const chart = new Chartisan({--}}
    {{--                                    el: '#chart',--}}
    {{--                                    url: "@chart('sample_chart')",--}}
    {{--                                });--}}
    {{--                            </script>--}}
    {{--                        @endpush--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--        <div class="py-12">--}}
    {{--            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
    {{--                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
    {{--                    <div class="p-6 bg-white border-b border-gray-200">--}}
    {{--                        You're logged in!--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
</x-app-layout>
