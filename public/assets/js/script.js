const html = document.querySelector('html');
const btn = document.querySelector('#switch-mode');
btn.addEventListener('click', function () {

    html.classList.toggle('light-mode');
});
