<?php
include_once '../../model/pdo.php';
include_once '../../model/menu/listcatemenu.php';
include_once '../../model/menu/menu.php';
include_once '../../view/admin/nav.php';
include_once '../../view/admin/header.php';
if(isset($_GET['ctr'])){
  $ctr = $_GET['ctr'];
  switch ($ctr) {
    case 'home':
      include_once '../../view/admin/home.php';
      break;
    case 'slide':
      include_once '../../view/admin/slideShow/slide.php';
      break;
    case 'cate_menu':
      include_once '../../view/admin/menuList/addCateMenu.php';
      break;
      //Thêm danh mục món ăn
    case 'addcatemenu':
      if(isset($_POST['abc']) && ($_POST['abc'])){
        $ten_danh_muc_mon = $_POST['ten_danh_muc_mon'];
        $anh_danh_muc_mon = basename($_FILES["anh_danh_muc_mon"]["name"]);
                    $target_dir = "../../view/admin/menuList/img/";
                    $target_file = $target_dir . $anh_danh_muc_mon;
                    move_uploaded_file($_FILES["anh_danh_muc_mon"]["tmp_name"], $target_file);  
                    insert_menuList($ten_danh_muc_mon,$anh_danh_muc_mon);
                    $tb = "Thêm thành công";
      }
      include_once '../../view/admin/menuList/addCateMenu.php';
      break;
      // Danh sách danh mục món
    case 'cate_menulist':
      $listmenu = loadAll_listmenu();
      // var_dump($listmenu);
      include_once '../../view/admin/menuList/listcatemenu.php';
      break;
      //Xóa danh sách danh mục món
    case 'deleListMenu':
      if(isset($_GET['id_danh_muc_mon'])){
        delete_cateMenuList($_GET['id_danh_muc_mon']);
      }
      $listmenu = loadAll_listmenu();
      include_once '../../view/admin/menuList/listcatemenu.php';
      break;
       //load value danh sách danh mục món
    case 'fixListMenu':
      if(isset($_GET['id_danh_muc_mon']) && ($_GET['id_danh_muc_mon'] >0)){
        $fix_catemenu  = fix_catemenu($_GET['id_danh_muc_mon']);
      }
      include_once '../../view/admin/menuList/fixcatemenu.php';
      break;
      //CẬP NHẬT - CHỈNH SỬA DANH MỤC
    case 'update_catemenu':
      if(isset($_POST['123']) && ($_POST['123'])){
        $id_danh_muc_mon = $_POST['id_danh_muc_mon'];
        $ten_danh_muc_mon = $_POST['ten_danh_muc_mon'];
        $anh_danh_muc_mon = basename($_FILES["anh_danh_muc"]["name"]);
                    $target_dir = "../../view/admin/menuList/img/";
                    $target_file = $target_dir . $anh_danh_muc_mon;
                    move_uploaded_file($_FILES["anh_danh_muc"]["tmp_name"], $target_file); 
                    update_cate($ten_danh_muc_mon,$anh_danh_muc_mon,$id_danh_muc_mon); 
                    $tb = "Cập nhật thành công";
                    $listmenu = loadAll_listmenu();
                    
      }
      include_once '../../view/admin/menuList/listcatemenu.php';
      break;
      // Thêm món ăn
      case 'addmenu':
        if(isset($_POST['submit_menulist'])){
          $anh_mon = basename($_FILES["anh_mon"]["name"]);
                    $target_dir = "../../view/admin/menu/img/";
                    $target_file = $target_dir . $anh_mon;
                    move_uploaded_file($_FILES["anh_mon"]["tmp_name"], $target_file);
          $ten_mon = $_POST['ten_mon'];
          $gia_mon = $_POST['gia_mon'];
          $danh_gia_mon = $_POST['danh_gia_mon'];
          $mo_ta_mon_an = $_POST['mo_ta_mon_an'];
          $menu_list =$_POST['menu_list'];
          insert_addmenu($anh_mon,$ten_mon,$gia_mon,$danh_gia_mon,$mo_ta_mon_an,$menu_list);
          $tb = "Thêm thành công";
        }
        $listmenu = loadAll_listmenu();
        include_once '../../view/admin/menu/addmenu.php';
        break;
        //Danh sách thực đơn
        case 'list_Menu':
          $loadall_menu = loadAll_menu();
          $listmenu = loadAll_listmenu();
          include_once '../../view/admin/menu/listmenu.php';
          break;
        //Xóa món ăn
        case 'deleMenu':
          if(isset($_GET['id_mon'])){
            delete_menu($_GET['id_mon']);
          }
          $loadall_menu = loadAll_menu();
          include_once '../../view/admin/menu/listmenu.php';
          break;
        //Load value món ăn
        case 'fixMenu':
          if(isset($_GET['id_mon']) && ($_GET['id_mon']) > 0 ){
            $fix_menu = fix_menu($_GET['id_mon']);
          }
          $listmenu = loadAll_listmenu();
          include_once '../../view/admin/menu/fixmenu.php';
          break;
        //Cập nhật món ăn
        case 'update_menu':
          if(isset($_POST['submit_menu'])){
            $id_mon = $_POST['id_mon'];
            // var_dump($id_mon);
            $anh_mon = basename($_FILES["anh_mon_an"]["name"]);
                      $target_dir = "../../view/admin/menu/img/";
                      $target_file = $target_dir . $anh_mon;
                      move_uploaded_file($_FILES["anh_mon_an"]["tmp_name"], $target_file);
            $ten_mon = $_POST['ten_mon'];
            $gia_mon = $_POST['gia_mon'];
            $danh_gia_mon = $_POST['danh_gia_mon'];
            $mo_ta_mon_an = $_POST['mo_ta_mon_an'];
            $menu_list =$_POST['menu_list'];
            update_menu($anh_mon,$ten_mon, $gia_mon,$danh_gia_mon,$mo_ta_mon_an,$menu_list,$id_mon);
            $tb = "Cập nhật thành công";
          }
          $loadall_menu = loadAll_menu();
          include_once '../../view/admin/menu/listmenu.php';
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