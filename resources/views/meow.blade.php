<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Meow :3 - Br4d</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="icon" href="{{ asset('img/nav-icon.png') }}">
    </head>
    <body>
        @include ('layouts.theme')
        
        <section class="hero is-dark-nq-black">
            <div class="hero-body has-text-centered">
                <div class="container">
                    <h1 class="title is-3">Oh no you found my super secret™️ cat stash.<br />You better not share this...</h1>
                    <a href="/meow">
                        <button href="/meow" class="button is-rounded is-primary" style="background-color: #23272A; border-color: #4dc0b5;">
                            New Image
                        </button><br /><br />
                    </a>
                    <div class="box">
                        <div id="image"></div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.cookies')
    </body>
    <script src="{{ asset('js/fetchImage.js') }}"></script>
</html>