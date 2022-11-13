let prev = document.querySelector('#prev');
let next = document.querySelector('#next');
let image = [
  "url('./img/img1.jpg')",
  "url('./img/img2.jpg')",
  "url('./img/img3.jpg')"
];
let i = 0;
  // prev.addEventListener("click", ()=>{
  //   let bgc_image = document.querySelector('.boxleft .box1');
  //   bgc_image.style.backgroundImage = image[i];
  //   if(i < image.length){
  //     i--;
  //   }else{
  //     i = 0;
  //   }
  // })
  next.addEventListener("click", ()=>{
    let bgc_image = document.querySelector('.boxleft .box1');
    bgc_image.style.backgroundImage = image[i];
    if(i < image.length - 1){
      i++;
    }else{
      i = 0;
    }
  })