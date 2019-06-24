const menuIcon = document.getElementById('menu-icon');
const slideoutMenu = document.getElementById('slide-out-menu');
const searchIcon = document.getElementById('search-icon');
const searchBox = document.getElementById('search-box');

searchIcon.addEventListener('click', function() {
    if(searchBox.style.top == '90px'){
        searchBox.style.top = '0px';
        searchBox.style.pointerEvents = 'auto';
    } else {
        searchBox.style.top = '90';
        searchBox.style.pointerEvents = 'auto';
    }
});

menuIcon.addEventListener('click', function(){
    if(slideoutMenu.style.opacity == "1") {
        slideoutMenu.style.opacity = '0';
        slideoutMenu.style.pointerEvents = 'none';
    } else {
        slideoutMenu.style.opacity = '1';
        slideoutMenu.style.pointerEvents = 'auto';
    }
});