

const menuToggle = document.getElementById('menu-toggle');
const menuOptions = document.getElementById('menu-options');
const themeButton = document.getElementById('theme-button');
const textSizeButton = document.getElementById('text-size-button');
const textSpaceButton = document.getElementById('text-space-button');
const content = document.getElementById('content');

menuToggle.addEventListener('click', () => {
  menuOptions.style.display = menuOptions.style.display === 'none' ? 'block' : 'none';
});

themeButton.addEventListener('click', () => {
  content.style.backgroundColor = 'black';
  content.style.color = 'white';
});

textSizeButton.addEventListener('click', () => {
  content.style.fontSize = '24px';
});

textSpaceButton.addEventListener('click', () => {
  content.style.lineHeight = '2.0';
});

document.addEventListener("DOMContentLoaded", function() {
    const aboutLink = document.querySelector(".about-link");
    const subMenu = document.querySelector(".sub-menu");

    aboutLink.addEventListener("click", function(e) {
        e.preventDefault();
        subMenu.classList.toggle("show");
    });
});
  

