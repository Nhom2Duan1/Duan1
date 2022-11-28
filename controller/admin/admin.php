<?php
include_once '../../view/admin/nav.php';
include_once '../../view/admin/header.php';
include_once '../../model/contact/contact.php';
include_once '../../model/tablelist/tablelist.php';

include_once '../../model/pdo.php';
if(isset($_GET['ctr'])){
  $ctr = $_GET['ctr'];
  switch ($ctr) {
    // Trang chủ
    case 'home':
      include_once '../../view/admin/home.php';
      break;
    case 'slide':
      include_once '../../view/admin/slideShow/slide.php';
      break;
    case 'contact':
      $list_lh= listall_lh();
      include_once '../../view/admin/contact/contact.php';
      break;
    case 'tableList':
      $list_dm =  listall_dm() ;
        include_once '../../view/admin/tablelist/tablelist.php';
        break;
    case 'xoadm':
         if(isset($_GET['id_loai_ban'])&&($_GET['id_loai_ban'])>0){
          $sql = "delete from loai_ban where id_loai_ban =".$_GET['id_loai_ban'];
          pdo_execute($sql);
         }
        $list_dm =  listall_dm() ;
        include_once '../../view/admin/tablelist/tablelist.php';
        break;
        case 'adddm':
          if(isset($_POST['btn'])&&($_POST['btn'])){
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $so_luong = $_POST['so_luong'];
            insert_dm( $ten_danh_muc ,$so_luong);

          }
          $list_dm =  listall_dm() ;
          include_once '../../view/admin/tablelist/addm.php';
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