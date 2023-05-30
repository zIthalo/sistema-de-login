var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor:'true',
   pagination: {
       el: ".swiper-pagination",
       clickable: true,
       dynamicBullets: true,   
   },
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },

   breakpoints:{
     0:{
       slidesPerView: 1,
     },
     520:{
       slidesPerView: 2,
     },
     950:{
       slidesPerView: 3,
     }
   },
  });





const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event){
    if (event.type === 'touchstart') event.preventDefault();
    const nav = document.getElementById('nav');
    nav.classList.toggle('active')
    const active = nav.classList.contains('active')
    event.currentTarget.setAttribute('aria-expanded', active)
    if (active){ 
        event.currentTarget.setAttribute('aria-label', 'Fechar Menu')
    }else{
        event.currentTarget.setAttribute('aria-label', 'Abrir Menu')
    }
}

btnMobile.addEventListener('click', toggleMenu); /*lê-se quando eu clicar no id btn-mobile salvo na const btnMobile execute uma função chamada toggleMenu*/
btnMobile.addEventListener('touchstart', toggleMenu);