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
{{--<div class="container">
    <div class="row"></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="col-xs-4">asd</div>
            <div class="col-xs-3 center-block">@yield('content')</div>
            <div class="col-xs-5">asd</div>
        </div>

    </div>
</div>--}}
<br><br><br>
<br><br><br>

<div class="container container-table">
    <div class="row vertical-center-row">
        <div class="text-center col-md-4 col-md-offset-4">@yield('content')</div>
    </div>
</div>
{{--<script>
    function goToFacebook(btnName,postDataUrl) {
        $(document).ready(function () {
            $.ajaxSetup({cache: true}); // since I am using jquery as well in my app
            $.getScript('//connect.facebook.net/en_US/sdk.js', function () {
                // initialize facebook sdk
                FB.init({
                    appId: '1953080944969460', // replace this with your id
                    status: true,
                    cookie: true,
                    version: 'v2.8'
                });
                // attach login click event handler
                $(btnName).click(function () {
                    FB.login(processLoginClick, {scope: 'public_profile,email,user_friends', return_scopes: true});
                });
                /*$(document).getElementById(btnName).click(function () {
                 FB.login(processLoginClick, {scope: 'public_profile,email,user_friends', return_scopes: true});
                 });*/
            });
// function to send uid and access_token back to server
// actual permissions granted by user are also included just as an addition
            function processLoginClick(response) {
                var uid = response.authResponse.userID;
                var access_token = response.authResponse.accessToken;
                var permissions = response.authResponse.grantedScopes;
                var data = {
                    uid: uid,
                    access_token: access_token,
                    _token: '{{ csrf_token() }}', // this is important for Laravel to receive the data
                    permissions: permissions
                };
                postData(postDataUrl, data, "post");
            }

// function to post any data to server
            function postData(url, data, method) {
                method = method || "post";
                var form = document.createElement("form");
                form.setAttribute("method", method);
                form.setAttribute("action", url);
                for (var key in data) {
                    if (data.hasOwnProperty(key)) {
                        var hiddenField = document.createElement("input");
                        hiddenField.setAttribute("type", "hidden");
                        hiddenField.setAttribute("name", key);
                        hiddenField.setAttribute("value", data[key]);
                        form.appendChild(hiddenField);
                    }
                }
                document.body.appendChild(form);
                form.submit();
            }
        });
    }
</script>--}}
</body>
</html>