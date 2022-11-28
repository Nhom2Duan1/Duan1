<?php
include_once './view/home/hompage/header.php';
include_once 'model/book/book.php';
include_once 'model/contact/contact.php';

include_once 'model/tablelist/tablelist.php';
include_once 'model/pdo.php';
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
         if(isset($_POST['btn'])&&($_POST['btn'])){
          $ten_khach = $_POST['name'];
          $email = $_POST['email'];
          $sdt = $_POST['sdt'];
          $muc_dich = $_POST['mucdich'];
          $noi_dung = $_POST['noidung'];
          insert_lienhe($ten_khach, $email, $sdt, $muc_dich, $noi_dung) ;
           $thongbao = "bạn đã gửi yêu cầu liên hệ thành công" ;
         }
      include_once './view/home/contact/contact.php';
      break;
      // Đặt bàn
    case 'settable':
      if(isset($_POST['btn_bt'])&&($_POST['btn_bt'])){
        $ten_nguoi_dat = $_POST['ten_nguoi_dat'];
        $sdt = $_POST['sdt'];
        $so_nguoi = $_POST['so_nguoi'];
        $ngay= $_POST['ngay'];

        $gio = $_POST['gio'];
        $gio1 = implode(",",$gio);
        $id_loai_ban = $_POST['id_loai_ban'];
       
        insert_dat_ban($ten_nguoi_dat,$sdt,$so_nguoi, $ngay,$gio1,$id_loai_ban);
       
      
      }
      $listdm = listall_dm();
    
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