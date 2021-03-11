<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Woof 🐶</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="icon" href="{{ asset('img/nav-icon.png') }}">
    </head>
    <body>
        <!-- @include ('layouts.theme') -->
        
        <section class="hero is-dark-nq-black">
            <div class="hero-body has-text-centered">
                <div class="container">
                    <h1 class="subtitle is-3">Oh no you found my secret dog stash 🐶</h1>
                    <a>
                        <button onclick="generateImage()" class="button is-rounded is-primary" style="background-color: #23272A; border-color: #4dc0b5;">
                            <b>Generate new image</b>
                        </button><br /><br />
                    </a>
                    <!-- <div class="box"> -->
                        <div id="image" onload='
                            req("https://api.thedogapi.com/v1/images/search?size=full", function(data) {
                                var html = "<img src=\"" + data[0]["url"] + "\">";
                                document.getElementById("image").innerHTML = html;
                            });'>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </section>
        @include('layouts.cookies')
    </body>
    <script>
        function req(url, callback) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    try {
                        var data = JSON.parse(xmlhttp.responseText);
                    } catch (err) {
                        console.log(err.message + " in " + xmlhttp.responseText);
                        return;
                    }
                    callback(data);
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }
        req("https://api.thedogapi.com/v1/images/search?size=full", function(data) {
            var html = "<img src=\"" + data[0]["url"] + "\">";
            document.getElementById("image").innerHTML = html;
        });
        function generateImage() {
            document.getElementById("image").innerHTML = 
            [
                '<br /><br /><br /><br /><br /><br /><br /><br /><br />',
                '<i class="fas fa-spinner fa-spin" style="font-size: 64px;"></i>'
            ].join('')
            req("https://api.thedogapi.com/v1/images/search?size=full", function(data) {
                var html = "<img src=\"" + data[0]["url"] + "\">";
                document.getElementById("image").innerHTML = html;
            });
        }
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    </script>
</html>