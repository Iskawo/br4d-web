<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404 | Iskawo</title>
    <link rel="icon" href="{{ asset('img/error.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <style>
        html, body {
            background-image: url("{{ asset('img/main/404-BG2.png') }}");
            color: #636b6f;
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
        .box{
            width:400px;
            height:400px;
        }
        .is-drk{
            background:#23272A;
        }
    </style>
    @include ('layouts.openGraph')
</head>

<body>
    @include ('layouts.nav')    
    <div class="page-wrap page-wrap-max-width has-text-centered has-text-white">
        <main class="article-content" id="maincontent"><br /><br />
            <div class="title">
                404 Error
            </div>
            <h1 class="subtitle">
                Sorry, we can’t seem to find what you’re looking for.
            </h1>
            <h1 class="subtitle">
                <a href="/">Return Home</a>
            </h1>
        </main>
    </div>
</body>
<img src="{{ asset('img/ripped.png') }}" alt="">
</html>