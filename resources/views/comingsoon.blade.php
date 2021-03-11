<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coming Soon - Br4d</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
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
            .code {
                border-right: 2px solid;
                font-size: 26px;
                padding: 0 15px 0 15px;
                text-align: center;
            }
            .message {
                font-size: 18px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        @include ('layouts.theme')
        <div class="hero-body">
            <figure class="image container is-hidden-mobile" style="height: 512px; width: 512px;">
                <img src="{{ asset('img/coming-soon.png') }}">
            </figure>
            <figure class="image container is-hidden-desktop" style="height: 256px; width: 256px;">
                <img src="{{ asset('img/coming-soon.png') }}">
            </figure>
            @include('layouts.return')
        </div>
        @include('layouts.cookies')
    </body>
</html>
