document.addEventListener('DOMContentLoaded', function() {
    const meteoToggle = document.getElementById('meteo');
    const sousMenu = document.getElementById('sousMenu');
    const icon = document.getElementById('icon');
    const iconMeteo = document.getElementById('icon-meteo');

    meteoToggle.addEventListener('click', function() {
        sousMenu.classList.toggle('opacity-0');
        sousMenu.classList.toggle('invisible');
        sousMenu.classList.toggle('sm:h-[88px]');
        sousMenu.classList.toggle('h-[68px]');
        icon.classList.toggle('sm:fa-rotate-270');
        iconMeteo.classList.toggle('fa-chevron-down');
    });
});
