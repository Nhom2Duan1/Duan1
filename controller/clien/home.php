<?php
include_once './model/pdo.php';
include_once './model/menu/listcatemenu.php';
include_once './model/menu/menu.php';
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
        case 'cate_menu':   
          if(isset($_GET['menu_list'])&&($_GET['menu_list'])>0){
            $menu_list = $_GET['menu_list'];
            //  var_dump($menu_list);
          }else{
              $menu_list = 0;
          }
          $list_catemenu = loadAll_liscate_menu($menu_list);
          // var_dump($list_catemenu);
          include './view/home/menu/loadmenu.php';
          break;
      case 'detailMenu':
        if(isset($_GET['id_mon'])){
          $id_mon = $_GET['id_mon'];
          $a_menu = fix_menu($_GET['id_mon']);
          extract($a_menu);
          // var_dump($a_menu);
        }
        $listmenu = loadAll_listmenu();
        // var_dump($listmenu);
        include_once './view/home/menu/detailmenu.php';
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