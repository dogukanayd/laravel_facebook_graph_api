@extends('layouts.singleTest')
@section('content')

    <div class="bd-example" data-example-id="">
        <div class="card">
        <p><?php $testPath = $test->typeform_path;

?>
        </p>
            <h2 class="card-title">{{ $test->question_title }}</h2>
            <img class="card-img-top img-responsive"
                 style="display: block;" src="{{ $test->image_link }}"
                 data-holder-rendered="true">
            <div class="card-block">

                <b>{{$test->question_short_desc}}</b>

            </div><br>
            <button id="fbButton" type="button" class="btn btn-primary btn-md">
                <span><i class="fa fa-facebook-official fa-3" aria-hidden="true"></i> Facebook ile giriş yap</span>
            </button>

        </div>

    </div>
    <script>

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
                $('#fbButton').click(function () {
                    FB.login(processLoginClick, {scope: 'public_profile,email,user_friends,user_likes', return_scopes: true});
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
                postData("{{$testPath}}", data, "post");
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

    </script>
    <?php

?>

@endsection