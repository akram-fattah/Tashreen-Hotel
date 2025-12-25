window.addEventListener('load', () => {
    const elements = document.querySelectorAll('.animation');

    elements.forEach(el => {
        el.classList.add('animation_name');
    });
});



const menu = document.querySelector('.menu');
const nav = document.getElementById('nav');

menu.addEventListener('click', () => {
    nav.classList.toggle('open');
    menu.classList.toggle('open');
});


document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.swiper', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        loop: false,
        freeMode: false,  
        grabCursor: true,

        navigation: {
            nextEl: '#right',
            prevEl: '#left',
        },
        
    });
});
