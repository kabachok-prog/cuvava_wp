var toggleButton = document.querySelector('.toggle-menu');
var navBar = document.querySelector('.nav-bar');
toggleButton.addEventListener('click', function () {
	navBar.classList.toggle('toggle');
});

function _go() {
    location.href=document.getElementById('select-state').options[document.getElementById('select-state').selectedIndex].value;
}