var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        document.getElementById('toggle-text').innerHTML = "Enable light theme";
        document.getElementById('icon').innerHTML = "🌕";
        localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        document.getElementById('toggle-text').innerHTML = "Enable dark theme";
        document.getElementById('icon').innerHTML = "🌑";
        localStorage.setItem('theme', 'light');
    }
}

var currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'dark') {
        document.getElementById('toggle-text').innerHTML = "Enable light theme";
        document.getElementById('icon').innerHTML = "🌕";
        toggleSwitch.checked = true;
    } else {
        document.getElementById('toggle-text').innerHTML = "Enable dark theme";
        document.getElementById('icon').innerHTML = "🌑";
        toggleSwitch.checked = false;
    }
}

toggleSwitch.addEventListener('change', switchTheme, false);