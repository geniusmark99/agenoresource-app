import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;


document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.querySelector('[x-data]');

    darkModeToggle.addEventListener('darkModeUpdated', function(event) {
        localStorage.setItem('darkMode', event.detail.darkMode);
    });
});


Alpine.start();
