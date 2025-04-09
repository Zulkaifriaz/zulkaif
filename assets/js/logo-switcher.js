// theme-switcher.js
document.addEventListener('DOMContentLoaded', function() {
    const lightModeBtn = document.querySelector('.setColor.light');
    const darkModeBtn = document.querySelector('.setColor.dark');
    const siteLogo = document.getElementById('site-logo');

    function updateLogo() {
        const isDark = document.body.classList.contains('dark-mode');
        if (siteLogo) {
            siteLogo.src = isDark 
                ? 'assets/images/logo/logo-light.png' 
                : 'assets/images/logo/logo-all-dark.png';
        }
    }

    lightModeBtn.addEventListener('click', () => {
        document.body.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
        updateLogo();
    });

    darkModeBtn.addEventListener('click', () => {
        document.body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
        updateLogo();
    });

    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-mode');
    }
    updateLogo();
});