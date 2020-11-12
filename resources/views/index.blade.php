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
        <div class="hero-body">
            <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
            </label>
            <em class="spaced">Enable dark theme</em>
            </div>
            <figure class="image container" style="height: 512px; width: 512px; background-color: transparent;">
                <img src="{{ asset('img/profile-png.svg') }}">
            </figure>
        </div>
        <div class="has-text-centered has-text-size-large">
            <div class="tooltip">
                <a href="/contact/discord" target="_blank"><i class="fab fa-discord"></i></a>
                <span class="tooltiptext" style="background-color: #C03F4B;"><strong>Discord</strong></span>
            </div>
            <div class="tooltip">
                <a href="https://github.com/Iskawo" target="_blank"><i class="fab fa-github"></i></a>
                <span class="tooltiptext" style="background-color: #DC8C4C;"><strong>Github</strong></span>
            </div>
            <div class="tooltip">
                <a href="https://twitter.com/xtc_Br4d" target="_blank"><i class="fab fa-twitter"></i></a>
                <span class="tooltiptext" style="background-color: #E4A84D;"><strong>Twitter</strong></span>
            </div>
            <div class="tooltip">
                <a href="/contact" target="_blank"><i class="far fa-envelope"></i></a>
                <span class="tooltiptext" style="background-color: #ECBC4D;"><strong>Email</strong></span>
            </div>
        </div>
        @include('layouts.cookies')
    </body>
    <script>
        const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
        function switchTheme(e) {
            if (e.target.checked) {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark'); //add this
            }
            else {
                document.documentElement.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light'); //add this
            }    
        }
        const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
        if (currentTheme) {
            document.documentElement.setAttribute('data-theme', currentTheme);

            if (currentTheme === 'dark') {
                toggleSwitch.checked = true;
            }
        }
        toggleSwitch.addEventListener('change', switchTheme, false);
    </script>
</html>