window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu-2'),
    menuItem = document.querySelectorAll('.menu-2_item'),
    hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('menu-2_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
            menu.classList.toggle('menu-2_active');
        })
    })
})