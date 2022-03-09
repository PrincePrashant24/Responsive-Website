burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
rightNav = document.querySelector('.rightNav')
navList = document.querySelector('.nav-list')
burger.addEventListener('click', ()=>{
     rightNav.classList.toggle('v-nav');
     navList.classList.toggle('v-nav');
     navbar.classList.toggle('h-nav');

})