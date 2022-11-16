let prev = document.querySelector('#prev');
let next = document.querySelector('#next');
let image = [
  "url('../view/home/acount/signup/img/img1.jpg')",
  "url('../view/home/acount/signup/img/img2.jpg')",
  "url('../view/home/acount/signup/img/img3.jpg')"
];
let i = 0;
  
  next.addEventListener("click", ()=>{
    let bgc_image = document.querySelector('.boxleft .box1');
    bgc_image.style.backgroundImage = image[i];
    if(i < image.length - 1){
      i++;
    }else{
      i = 0;
    }
  })