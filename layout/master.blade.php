<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>
        Trạm nhiên liệu
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>

    <link rel="shortcut icon" href="{{ asset('asset/logo.svg') }}">

    <link href="{{ asset('css/libraries/datatable/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/libraries/datatable/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style"/>
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    @stack('css')
</head>

<body>
    @include('sweetalert::alert')
    <div class="wrapper">
        @include('admin.layout.header')
        @include('admin.layout.sidebar')
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">
                                    Title
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{--                    @if (session()->has('success'))--}}
                        {{--                        <div class="col-12">--}}
                        {{--                            <div class="alert alert-success">--}}
                        {{--                                {{ session()->get('success') }}--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    @endif--}}
                        <div class="col-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layout.footer')
    </div>
    @include('admin.layout.rightbar')

    <script src="{{ asset('js/libraries/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/hyper-config.js') }}"></script>
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/libraries/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/libraries/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/libraries/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/libraries/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/libraries/datatable/dataTables.checkboxes.min.js') }}"></script>
    @stack('js')
</body>
</html>
