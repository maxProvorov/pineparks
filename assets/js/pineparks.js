document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger-menu');
    const navigationMenu = document.querySelector('.navigation__menu');
    const closeMenuButton = document.querySelector('.close-menu');

    const toggleMenu = () => {
        burgerMenu.classList.toggle('open');
        navigationMenu.classList.toggle('active');
    };

    burgerMenu.addEventListener('click', toggleMenu);
    closeMenuButton.addEventListener('click', toggleMenu);
});