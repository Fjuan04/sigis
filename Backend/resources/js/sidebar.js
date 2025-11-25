// navbar
const btn = document.getElementById('menu-btn');
const menu = document.getElementById('mobile-menu');
btn.addEventListener('click', () => {
menu.classList.toggle('hidden');
});


//sidebar
const btnToggleSidebar = document.querySelector('.btn-toggle-sidebar')

btnToggleSidebar.addEventListener('click', function() {
    this.parentElement.classList.toggle('left-[-210px]')
})