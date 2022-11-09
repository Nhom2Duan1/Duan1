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