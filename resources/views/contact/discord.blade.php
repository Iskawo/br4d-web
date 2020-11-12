<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About - Iskawo</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="icon" href="{{ asset('img/nav-icon.png') }}">
        @include ('layouts.openGraph')
    </head>
    <body>
        @include ('layouts.nav')
        <section class="hero is-dark-nq-black has-text-centered" id="landing_toggle">
            <div class="hero-body">
                <h1 class="title is-1 has-text-white">Discord</h1><br /><br />
                <div class="container">
                    <div class="content">
                        <div class="box">
                            <h3>
                                If you use <u><a href="https://discordapp.com" target="_blank">Discord</a></u>, you can visit
                                my profile <u><a href="https://discordapp.com/users/286509757546758156" target="_blank">here</a></u>
                                or join my discord server using the widget below:
                            </h3><br />
                            <!-- <h3>
                                or join my discord server using the widget below.
                            </h3> -->
                            <iframe src="https://discordapp.com/widget?id=506105941498789888&theme=dark" height="350" allowtransparency="true" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
         </section><br />
         @include('layouts.cookies')
    </body>
</html>