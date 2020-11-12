<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404 - Br4d</title>
    <link rel="icon" href="{{ asset('img/error.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    @include ('layouts.openGraph')
</head>

<body>
    @include ('layouts.theme')    
    <div class="page-wrap page-wrap-max-width has-text-centered has-text-white">
        <main class="article-content" id="maincontent"><br /><br />
            <div class="title">
                404 Error
            </div>
            <h1 class="subtitle">
                Sorry, we can’t seem to find what you’re looking for.
            </h1>
            <section class="hero has-text-centered has-text-size-large" id="landing_toggle">
                <a href="/"><i class="fas fa-home"></i><em style="font-size: 20px;">Return home</em></a>
            </section>
        </main>
    </div>
</body>
<img src="{{ asset('img/ripped.png') }}" alt="">
</html>