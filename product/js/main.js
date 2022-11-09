function checkpay(){
  let checkpayment = document.querySelector("#check_pay");
  if(checkpayment.checked){
    document.querySelector(".payments").classList.add('display');
  }else{
    document.querySelector(".payments").classList.remove('display');
  }
}