
const hamburgerIcon = document.querySelector('.nav-hamburger-icon');
const navbarDrawer = document.querySelector('.nav-items-mobile-container');

    hamburgerIcon.addEventListener('click', () => {
        hamburgerIcon.classList.toggle('open');
        navbarDrawer.classList.toggle('open');
    });
