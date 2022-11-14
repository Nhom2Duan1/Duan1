$(document).ready(function(){
        $('.banner__container').slick({
                slidesToShow: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2500,
                prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
                nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
                dots:true
        });
      });
//scroll header
const scrollHeader = () => {
       const bgHeader=document.querySelector('header')
       if(this.scrollY>=50){
        bgHeader.classList.add('bg-header')
       }else{
        bgHeader.classList.remove('bg-header')

       }
}
window.addEventListener('scroll',scrollHeader)
/// scroll to top

const scrollUp = () =>{
        const scrollUp = document.getElementById('scroll-up')
         if(this.scrollY >=350){
                scrollUp.classList.add('show-scroll')
         }else{
                scrollUp.classList.remove('show-scroll')
         }
        // this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
        // :scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll',scrollUp)
// show mennu
const btnShow=document.querySelector('.btn__menu')
const btnClose=document.querySelector('.btn__close')
const listMenu = document.querySelector('.header__menu .list--menu')
const bgHeader = document.querySelector('.bg__header')
btnShow.addEventListener('click',()=>{  
        listMenu.classList.add('show-menu')
        listMenu.classList.remove('close-menu')
        bgHeader.classList.add('bg')
       
})
btnClose.addEventListener('click',()=>{ 
        listMenu.classList.remove('show-menu')
        listMenu.classList.add('close-menu')
        bgHeader.classList.remove('bg')
})
//show search
const search=document.querySelector('.search i')
search.addEventListener('click',()=>{
        const formSearch = document.querySelector('.form__search')
        formSearch.classList.toggle('show-search')

})
