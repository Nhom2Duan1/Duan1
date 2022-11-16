<?php
include_once './view/home/hompage/header.php';
if(isset($_GET['ctr'])){
  $ctr = $_GET['ctr'];
  switch ($ctr) {
    // Trang chủ
    case 'homepage':
      include_once './view/home/hompage/homepage.php';
      break;
    // Giới thiệu
    case 'introduce':
      break;
      // menu nhà hàng
    case 'menu':
      include_once './view/home/menu/index.php';
      break;
      // Liên hệ
    case 'contact':
      include_once './view/home/contact/contact.php';
      break;
      // Đặt bàn
    case 'settable':
      include_once './view/home/book/book.php';
      break;
      // Đăng nhập
    case 'signin':
      include_once './view/home/acount/signin/index.php';
      break;
      // Đăng kí
    case 'signup':
      include_once './view/home/acount/signup/index.php';
      break;
    case 'settable':
      include_once './book/book.php';
      break;
     
    default:
      include_once './view/home/hompage/homepage.php';
      break;
  }
}else{
  include_once './view/home/hompage/homepage.php';
}
include_once './view/home/hompage/footer.php';
?>