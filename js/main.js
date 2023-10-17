
let ul = document.querySelector('nav .ul')

function openMenu(){
    ul.classList.add('open')
}

function closeMenu(){
    ul.classList.remove('open')
}
const toggleButton = document.getElementById('toggle-button');
const icon = document.getElementById('icon');
const menu = document.querySelector('.botoes-guia');

toggleButton.addEventListener('click', () => {
    menu.classList.toggle('open');
    if (menu.classList.contains('open')) {
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
    } else {
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
    }
});

