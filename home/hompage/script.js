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
