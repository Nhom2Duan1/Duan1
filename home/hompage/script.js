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