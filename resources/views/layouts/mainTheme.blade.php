<div class="hero-body">
    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round"></div>
    </label>
    <em class="spaced">Enable dark theme</em>
    </div>
    <figure class="image container is-hidden-mobile" style="height: 512px; width: 512px; background-color: transparent;">
        <img src="{{ asset('img/profile-png.svg') }}">
    </figure>
    <figure class="image container is-hidden-desktop" style="height: 256px; width: 256px; background-color: transparent;">
        <img src="{{ asset('img/profile-png.svg') }}">
    </figure>
</div>
<script defer src="{{ asset('js/themeSwitch.js') }}"></script>