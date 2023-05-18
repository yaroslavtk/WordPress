window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.top-navigation-list'),
        menuItem = document.querySelectorAll('.top-navigation-item'),
        hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('top-navigation-active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
            menu.classList.toggle('top-navigation-active');
        });
    });
});