<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #ffffff;
        }

        #content {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0px;
        }

        #gradient {
            width: 100%;
            height: 800px;
            padding: 0px;
            margin: 0px;
        }

        #front {
            position: absolute;
            border: solid 0px #000;
            width: 120px;
            height: 45px;
            top: 1;
            bottom: 0;
            left: 0;
            right: 1;
            margin: auto;
            box-shadow: 0 0 0px #666;
            z-index: 1;

        }

        #front2 {
            margin: 0 auto;
            padding: 20px;
            resize: both;
            overflow: auto;
        }

        .absoluteCenter {
            /* Must manually set width/height */
            width: 400px;
            height: 150px;

            /* The magic centering code */
            margin: auto;
            position: absolute;
            top: 0;
            bottom: 0; /* Aligns Vertically - Remove for Horizontal Only */
            left: 0;
            right: 0; /* Aligns Horizontally - Remove for Vertical Only  */

            /* Prevent div from overflowing main window */
            max-width: 100%;
            max-height: 100%;
            overflow: auto;
        }

        .absoluteCenter2 {
            /* Must manually set width/height */
            width: 400px;
            height: 150px;

            /* The magic centering code */
            margin: auto;
            position: absolute;

            /* Prevent div from overflowing main window */
            max-width: 100%;
            max-height: 100%;
            overflow: auto;
        }

        /* IE 7 and Below */
        :first-child + html .absoluteCenter,
        * html .absoluteCenter {
            /* Place code here to override all above values, and add IE friendly centering */
        }

        /* Shared */
        .DevamBtn {
            box-sizing: border-box;
            position: relative;
            /* width: 13em;  - apply for fixed size */
            margin: 0.2em;
            padding: 0 166.0705px 0 166.0705px;
            border: none;
            text-align: left;
            line-height: 34px;
            white-space: nowrap;
            border-radius: 7px;
            font-size: 16px;
            color: #FFF;
        }

        .DevamBtn:before {
            content: "";
            box-sizing: border-box;
            position: absolute;
            top: 0;
            left: 0;
            width: 400px;
            height: 100%;
        }

        .DevamBtn:focus {
            outline: none;
        }

        .DevamBtn:active {
            box-shadow: inset 0 0 0 32px rgba(0, 0, 0, 0.1);
        }

        /* Facebook */
        .DevamBtn--facebook {
            background-color: #4267b2;
            background-image: linear-gradient(#4267b2, #3B55A0);
            /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
            text-shadow: 0 -1px 0 #354C8C;
        }

        .DevamBtn--facebook:before {
            border-right: #364e92 1px solid;
        }

        .DevamBtn--facebook:hover,
        .DevamBtn--facebook:focus {
            background-color: #5B7BD5;
            background-image: linear-gradient(#5B7BD5, #4864B1);
        }

    </style>
</head>
<body>

<div class="gradient">
    <div id="content">
        @yield('content')
    </div>
</body>
</html>
