<?php
include_once '../../view/admin/nav.php';
include_once '../../view/admin/header.php';
if(isset($_GET['ctr'])){
  $ctr = $_GET['ctr'];
  switch ($ctr) {
    // Trang chủ
    case 'home':
      include_once '../../view/admin/home.php';
      break;
    case 'updateslide':
      include_once '../../view/admin/slide.php';
      break;

    default:
      include_once '../../view/admin/home.php';
      break;
  }
}else{
  include_once '../../view/admin/home.php';
}
include_once '../../view/admin/footer.php';
?>