<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>?</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('/assets/bootstrap-social-gh-pages/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/bootstrap-social-gh-pages/assets/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/bootstrap-social-gh-pages/assets/css/docs.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/bootstrap-social-gh-pages/bootstrap-social.css') }}" rel="stylesheet"> --}}
    <link href="assets/bootstrap-social-gh-pages/assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/bootstrap-social-gh-pages/assets/css/docs.css" rel="stylesheet">
    <link href="assets/bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<div class="container">
    <div class="row center-block"><br>
        <h1 class="text-center">O.C.E.A.N</h1>
        <script src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/jquery-ui.min.js"></script>
        <div class="row">
            <div class="col-lg-3">
                @yield('card1')
            </div>
            <div class="col-lg-3">
                @yield('card2')
            </div>

            <div class="col-lg-3">
                @yield('card3')
            </div>

            <div class="col-lg-3">
                @yield('card4')
            </div>
        </div>
    </div>
</div>
@yield('footer')

<!-- Scripts -->

</body>
</html>
