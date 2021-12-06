const menuIcon = document.querySelector('.burgermenu');

const navbar = document.querySelector('.navbar');

menuIcon.addEventListener('click', () => {
    navbar.classList.toggle('change');
});
