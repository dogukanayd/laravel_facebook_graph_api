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
</head>
<body>
 <script src="{{ asset('js/app.js') }}"></script>
    <div class="row"><br>
    <h1 class="text-center">Kim olduğunu öğrenmeye hazır mısın?</h1>
        @yield('content')
    </div>

    <!-- Scripts -->
   
</body>
</html>