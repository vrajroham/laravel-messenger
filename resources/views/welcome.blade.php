<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .messenger {
              position: fixed;
              right: 30px;
              bottom: 30px;
              z-index: 99999;
            }
            .chatbox {
              /*background: white;
              padding: 20px;
              bottom: 0;
              border: 1px solid #cecece;
              border-radius: 5px;
              box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
              width: 25vw;
              height: 80vh;*/
              z-index: 2147483000 !important;
                position: fixed !important;
                bottom: 65px !important;
                right: 30px !important;
                /*height: calc(100% - 20px - 20px) !important;*/
                /*width: 370px !important;*/
                height: 80vh;
                width: 25vw;
                min-height: 250px !important;
                max-height: 590px !important;
                box-shadow: 0 5px 40px rgba(0,0,0,.16) !important;
                border-radius: 8px !important;
                overflow: hidden !important;
                opacity: 1 !important;
            }
            .chatbox .header {
                z-index: 2147483001;
                position: absolute;
                top: 0;
                right: 0;
                left: 0;
                height: 75px;
                background-color: #0a6ac9;
                box-shadow: 0 2px 4px rgba(0,0,0,.2);
            }
            .hidden {
              display: none;
            }

            #intercom-container .intercom-messenger-frame {

            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
            @include('messenger::home')
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </body>
</html>
