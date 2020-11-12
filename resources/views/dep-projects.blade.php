<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projects - Iskawo</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="icon" href="{{ asset('img/nav-icon.png') }}">
        @include ('layouts.openGraph')
    </head>
    <body>
        @include ('layouts.nav')
        
        <section class="hero is-dark-nq-black is-medium" id="landing_toggle">
            <div class="hero-body has-text-centered">
                <div class="container">
                    <div class="container is-dark-nq-black has-text-centered">
                    </div>
                    <h1 class="title is-1 has-text-white">Projects.</h1><br />
                </div>
                <section class="section">
                    <div class="container">
                        <div class="content">
                            <div class="card is-horizontal">
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-128x128 is-hidden-mobile">
                                                <img src="{{ asset('img/bot-logos/instinct.png') }}">
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <h1 class="title is-4">Instinct Bot</small></h1>
                                            <h2 class="subtitle is-6">Instinct#9021</h2>
                                            <p>
                                                Instinct is a multi-functioning Discord bot there to make your
                                                server creating and moderating experience a whole load easier.
                                            </p>
                                            <a href="https://instinctbot.site/invite/stable"
                                                target="_blank"
                                                class="button is-rounded is-fullwidth"
                                                style="background-color: #42e6cd;">
                                                Invite Instinct to your server
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="container">
                        <div class="content">
                            <div class="card is-horizontal">
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-128x128 is-hidden-mobile">
                                                <img src="{{ asset('img/bot-logos/canary.png') }}">
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <h1 class="title is-4">Instinct Canary Bot</small></h1>
                                            <h2 class="subtitle is-6">Instinct Canary#3475</h2>
                                            <p>
                                                Instinct Canary is a Public beta of Instinct.
                                            </p>
                                            <a href="https://instinctbot.site/invite/canary"
                                                target="_blank"
                                                class="button is-rounded is-fullwidth"
                                                style="background-color: #f6bb42;">
                                                Invite Instinct Canary to your server
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </body>
</html>