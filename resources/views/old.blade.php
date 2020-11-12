<!doctype html>
<html class="has-navbar-fixed-top" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iskawo</title>

    <meta property="og:title" content="Iskawo" />
    <meta property="og:description" content="Come stop by and check out my official website!" />
    <meta property="og:image" content="{{ asset('img/ProdByIskawo-Logo.png') }}" <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    <style>
      .imgoverlay {
        border-radius: 100%;
        display: flex;
        flex: 0 0 150px;
        height: 150px;
        justify-content: center;
        flex-direction: column;
        overflow: hidden;
        position: relative;
        width: 150px;
      }
      .imgoverlay imgoverlay {
        height: 100%;
      }
      .img__overlay {
        align-items: center;
        bottom: 0;
        display: flex;
        justify-content: center;
        flex-direction: column;
        left: 0;
        opacity: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: opacity 0.25s;
        z-index: 1;
        background-color: rgba(46,204,113,0.4);
        background: linear-gradient(65deg, rgba(46,204,113,0.4), rgba(243,156,18,0.4));
        color: #fafafa;
        font-size: 24px;
      }
      .img__overlay:hover {
        opacity: 1;
      }
    </style>

</head>

<body background="{{ asset('img/main/bg2.svg') }}">
<nav class="navbar is-fixed-top navbar is-danger" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="#top">
      <img src="{{ asset('img/iskawo-logo.png') }}" width="112" height="28">
    </a>
    <a class="navbar-item" href="#top">
        <strong style="color: grey;">Return to the top ⤴</strong>
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="navbar-start">
        <a class="navbar-item" href="#about">
          About
        </a>

        <a class="navbar-item" href="#contact">
          Contact
        </a>
        <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Socials
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item has-text-white" href="/youtube" target="_blank">
            <strong>YouTube</strong>
          </a>
          <a class="navbar-item has-text-white" href="/soundcloud" target="_blank">
            <strong>Soundcloud</strong>
          </a>
          <a class="navbar-item has-text-white" href="/discord" target="_blank">
            <strong>Discord</strong>
          </a>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
</nav>

  <section class="hero is-fullheight">
    <div id="top" class="hero-body">
        <div class="container">
            <h1 class="title is-1 has-text-white has-text-centered">Iskawo</h1>
            <h1 class="subtitle is-3 has-text-white has-text-centered"><strong><code style="background: transparent; color: yellow;">Experienced Developer & Music Producer</code></strong></h1>
        </div>
    </div>
  </section>
  <section class="hero is-fullheight">
    <div id="about" class="hero-body">
        <div class="container">
            <h1 class="title is-2 has-text-white has-text-centered"><strong>About me</strong></h1>
            <h1 class="subtitle is-4 has-text-white has-text-centered">
              <strong>
              <code style="background: transparent; color: grey;">
                I am 19 years old, from the UK and i enjoy coding Discord bots.<br />
                To the right you may find some of my bot projects;
              </code>
              </strong>
            </h1>
            </div>
            <div class="container is-centered">
            <div class="columns is-centered is-variable is-1-mobile is-0-tablet is-3-desktop is-8-widescreen is-2-fullhd">
              <div class="column is-one-quarter">
                  <a class="imgoverlay has-text-centered" href="https://discordapp.com/oauth2/authorize?client_id=551563093298249732&permissions=8&redirect_uri=http%3A%2F%2Fhoppityfloof.xyz%2Finstinct%2Fthanks.php&response_type=code&scope=bot%20guilds.join" target="_blank">
                    <div class="img__overlay">Instinct</div>
                    <img src="{{ asset('img/InstinctLogo.png') }}"/>
                  </a>
                  <h1 class="subtitle is-6 has-text-white has-text-centered">Multi-purpose bot</h1>
              </div>
            <div class="column is-one-quarter">
            <a class="imgoverlay has-text-centered" href="https://discordapp.com/api/oauth2/authorize?client_id=568081647111503883&permissions=8&redirect_uri=https%3A%2F%2Faurorabot.me%2Fthanks&response_type=code&scope=bot%20guilds.join" target="_blank">
                <div class="img__overlay">Aurora</div>
                <img src="{{ asset('img/AuroraLogo.png') }}"/>
              </a>
              <h1 class="subtitle is-6 has-text-white has-text-centered">Economy bot</h1>
            </div>
            <div class="column is-one-quarter">
                <a class="imgoverlay has-text-centered" href="https://discordapp.com/api/oauth2/authorize?client_id=505973556962787328&permissions=8&scope=bot" target="_blank">
                    <div class="img__overlay">Floofy 🎵</div>
                    <img src="{{ asset('img/FloofyLogo.png') }}"/>
                  </a>
                  <h1 class="subtitle is-6 has-text-white has-text-centered">Music bot</h1>
                </div>
            </div>
          </div>
      </div>
  </section>
  <section class="hero is-fullheight">
    <div id="contact" class="hero-body">
        <div class="container"><br /><br />
            <h1 class="title is-3 has-text-white has-text-centered">Contact me</h1>
            <h1 class="subtitle is-4 has-text-white has-text-centered">
              <strong>
              <code style="background: transparent; color: grey;">
                You can contact me through my Discord server <u>Instinct</u><br />
                which you can join by clicking the discord logo to the right
              </code>
              </strong>
            </h1>
        </div>
        <div class="container"><br /><br />
        <div class="columns is-centered is-variable is-1-mobile is-0-tablet is-3-desktop is-8-widescreen is-2-fullhd">
              <div class="column is-one-quarter">
                  <a class="imgoverlay" href="/discord" target="_blank">
                    <div class="img__overlay">Discord</div>
                    <img src="{{ asset('img/DiscordLogo.png') }}"/>
                  </a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
</body>
</html>