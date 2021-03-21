@extends('layouts.admin')

{{--<a href="{{ asset('/css/statistic/main.css') }}" rel="stylesheet"></a>--}}

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Statistic') }}</h1>

    <div class="flex-row justify-content-center">
        <div id="chartdiv"></div>
        <input onchange="readFile(this)" type="file">
    </div>

    <script src="{{ asset('/js/statistic/data/data.js') }}"></script>
    <script src="{{ asset('/js/statistic/file_reader.js') }}"></script>
    <script src="//cdn.amcharts.com/lib/4/core.js"></script>
    <script src="//cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="{{ asset('/js/statistic/chart.js') }}"></script>

@endsection
