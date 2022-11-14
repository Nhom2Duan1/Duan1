<?php
include_once './header.php';
include_once './slideshow.php';
if(isset($_GET['ctr'])){
  $ctr = $_GET['ctr'];
  switch ($ctr) {
    // Giới thiệu
    case 'introduce':
      break;
      // menu nhà hàng
    case 'menu':
      include_once './menu/index.php';
      break;
      // Liên hệ
    case 'contact':
      include_once './contact/contact.php';
      break;
      // Đặt bàn
    case 'settable':
      include_once './book/book.php';
      break;
    default:
      include_once './homepage.php';
      break;
  }
}
include_once './footer.php';
?>