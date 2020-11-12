<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home - Br4d</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="icon" href="{{ asset('img/nav-icon.png') }}">
        @include ('layouts.openGraph')
    </head>
    <body>
        @include('layouts.mainTheme')
        <div class="has-text-centered has-text-size-large">
            <div class="tooltip">
                <a href="/contact/discord" target="_blank"><i class="fab fa-discord"></i></a>
                <span class="tooltiptext" style="background-color: #C03F4B;"><strong>Discord</strong></span>
            </div>
            <div class="tooltip">
                <a href="/contact" target="_blank"><i class="far fa-envelope"></i></a>
                <span class="tooltiptext" style="background-color: #DC8C4C;"><strong>Email</strong></span>
            </div>
            <div class="tooltip">
                <a href="https://github.com/Iskawo" target="_blank"><i class="fab fa-github"></i></a>
                <span class="tooltiptext" style="background-color: #E4A84D;"><strong>Github</strong></span>
            </div>
            <div class="tooltip">
                <a href="https://twitter.com/xtc_Br4d" target="_blank"><i class="fab fa-twitter"></i></a>
                <span class="tooltiptext" style="background-color: #ECBC4D;"><strong>Twitter</strong></span>
            </div>
        </div>
        @include('layouts.cookies')
    </body>
    <!-- <script defer src="{{ asset('js/themeSwitch.js') }}"></script> -->
</html>