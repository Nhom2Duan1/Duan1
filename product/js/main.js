function checkpay(){
  let checkpayment = document.querySelector("#check_pay");
  if(checkpayment.checked){
    document.querySelector(".payments").classList.add('display');
  }else{
    document.querySelector(".payments").classList.remove('display');
  }
}
let inputfocus = document.querySelectorAll('.focus');
console.log(inputfocus);
for(let i = 0; i<=inputfocus.length;i++){
  inputfocus[i].addEventListener("focus",()=>{
    inputfocus[i].style.border = "2px solid #2192FF";
  })
}
function seemoreclick(){
  let seemore = document.querySelector('.seemore');
  let textSeemore = document.querySelector('.text_seemore');
  console.log(textSeemore);
  if(seemore.style.display ===  'none'){
    seemore.style.display =  'block';
    textSeemore.textContent = 'Thu gọn'
  } else{
    seemore.style.display =  'none';
    textSeemore.textContent = 'Xem thêm'
  }
  // if(seemore.style.display ==  'block'){
  //   textSeemore.textContent = 'Thu gọn';seemore.style.display =  'none';
  // }
}