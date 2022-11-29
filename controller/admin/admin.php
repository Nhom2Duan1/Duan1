<?php
include_once '../../view/admin/nav.php';
include_once '../../view/admin/header.php';
include_once '../../model/acount/acount.php';
include_once '../../model/pdo.php';
include_once '../../model/contact/contact.php';
include_once '../../model/tablelist/tablelist.php';
include_once '../../model/slideShow/slideShow.php';
include_once '../../model/news/news.php';
include_once '../../model/introduce/introduce.php';
include_once './model/menu/listcatemenu.php';
include_once './model/menu/menu.php';
if(isset($_GET['ctr'])){
  $ctr = $_GET['ctr'];
  switch ($ctr) {
    case 'slide':
      $listslider=loadall_slide();
      include_once '../../view/admin/slideShow/slide.php';
      break;
    // hiển thị dữ liệu xóa slide
    case 'upateslide':
      if(isset($_GET['id_slidershow'])&&($_GET['id_slidershow']>1)){
        $slider=one_slider($_GET['id_slidershow']);
      }
      include_once '../../view/admin/slideShow/update.php';
      break;
      // xóa slide
     case 'comfirm':
      if(isset($_POST['btn_update'])&&($_POST['btn_update'])){
          $id_slidershow=$_POST['id_slidershow'];
          $name_slider=$_POST['name_slider'];
          $image=$_FILES['img']['name'];
          $target_dir="../../view/home/hompage/img/";
          $target_file=$target_dir . basename($_FILES["img"]["name"]);
          move_uploaded_file($_FILES["img"]["tmp_name"],
          $target_file);
          update_slidershow($id_slidershow,$image,$name_slider);
          
      }
      $listslider=loadall_slide();
      include_once '../../view/admin/slideShow/slide.php';
      break;
      // hiển thị danh sách tin tức
      case 'news':
        $listnews=loadall_news();
        include_once '../../view/admin/news/news.php';
        break;
        // thêm tin tức
        case 'add_news':
          if(isset($_POST['btn_add'])&&($_POST['btn_add'])){
            $title=$_POST['title'];
            $summary=$_POST['summary'];
            $content=$_POST['content'];
            $date=date('d/m/Y');
            $image=$_FILES['image']['name'];
            $target_dir="../../view/home/news/img/";
            $target_file=$target_dir. basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              
            } else {
              
            }
            add_news($title,$image,$summary,$content,$date);


          }
          include_once '../../view/admin/news/addnews.php';
          break;
          // xóa tin tức
          case 'delete_news':
            if(isset($_GET['id_tintuc'])&&($_GET['id_tintuc'])){
                 delete_news($_GET['id_tintuc']);
            }
             $listnews=loadall_news();
            include_once '../../view/admin/news/news.php';
            break;
            // hiển thị dữ liệu update tin tức
            case 'update_news':
              if(isset($_GET['id_tintuc'])&&($_GET['id_tintuc']>1)){
                $news=one_news($_GET['id_tintuc']);
              }
              
            include_once '../../view/admin/news/updatenews.php';
            break;
            // update tin tức
            case 'comfirm_news':
              if(isset($_POST['btn_update'])&&($_POST['btn_update'])){
                $id_tintuc=$_POST['id_tintuc'];
                $title=$_POST['title'];
                $summary=$_POST['summary'];
                $content=$_POST['content'];
                $date=date('d/m');
                $image=$_FILES['image']['name'];
                $target_dir="../../view/home/news/img/";
                $target_file=$target_dir. basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                  
                } else {
                  
                }
                update_news($id_tintuc,$title,$image,$summary,$content,$date);
              }
              $listnews=loadall_news();
              include_once '../../view/admin/news/news.php';
              break;
              // hiển thị danh sách giới thiệu
              case 'introduce':
                $listintro=loadall_intro();
                include_once '../../view/admin/introduce/index.php';
                break;
                //thêm giới thiệu
              case 'add_intro':
                if(isset($_POST['btn_add'])&&($_POST['btn_add'])){
                  $title=$_POST['title'];
                  $content=$_POST['content'];
                  $image=$_FILES['image']['name'];
                  $target_dir="../../view/home/news/img/";
                  $target_file=$target_dir. basename($_FILES["image"]["name"]);
                  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    
                  } else {
                    
                  }
                  add__intro($title,$image,$content);
                }
                include_once '../../view/admin/introduce/add_intro.php';
                break;
                // xóa giới thiệu
                case 'delete_intro':
                  if(isset($_GET['id_intro'])&&($_GET['id_intro'])){
                       delete_intro($_GET['id_intro']);
                  }
                  $listintro=loadall_intro();
                  include_once '../../view/admin/introduce/index.php';
                  break;
                  //load dữ liệu update
                  case 'update_intro':
                    if(isset($_GET['id_intro'])&&($_GET['id_intro']>1)){
                      $intro=one_intro($_GET['id_intro']);
                    }
                    
                  include_once '../../view/admin/introduce/update_intro.php';
                  break;
                  case 'comfirm_intro':
                    if(isset($_POST['btn_update'])&&($_POST['btn_update'])){
                      $id_intro=$_POST['id_intro'];
                      $title=$_POST['title'];
                      $content=$_POST['content'];
                      $image=$_FILES['image']['name'];
                      $target_dir="../../view/home/introduce/img/";
                      $target_file=$target_dir. basename($_FILES["image"]["name"]);
                      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        
                      } else {
                        
                      }
                      update_intro($id_intro,$title,$image,$content);
                    }
                    $listintro=loadall_intro();
                    include_once '../../view/admin/introduce/index.php';
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
      // list danh sách tài khoản
      case'listacount':          
        $list_taikhoan=loadall_taikhoan();
        include_once '../../view/admin/acount/listacount.php';
        break;
        // sửa tài khoản
         case 'update_acc':
          if(isset($_GET['id_tai_khoan']) && ($_GET['id_tai_khoan']>0)){
            $taikhoan = loadone_taikhoan($_GET['id_tai_khoan']);
          }
          $list_taikhoan=loadall_taikhoan();
          include_once '../../view/admin/acount/update.php';
          break;
        case'update':
          if(isset($_POST['update']) && ($_POST['update'])){
                  $id_tai_khoan=$_POST['id_tai_khoan'];
                  $ten_tk=$_POST['ten_tk'];
                  $email=$_POST['email'];
                  $pass=$_POST['pass'];
                  $sdt=$_POST['sdt'];
                  updte_taikhoan($id_tai_khoan,$ten_tk,$email,$pass,$sdt);
                  $thongbao="Cập nhật thành công";
                  $list_taikhoan=loadall_taikhoan();
          }
          include_once '../../view/admin/acount/listacount.php';
          break;
          // xóa tài khoản
        case 'delete_acc':
          if (isset($_GET['id_tai_khoan'])&&($_GET['id_tai_khoan'])>0){
            delete_taikhoan($_GET['id_tai_khoan']);
            $list_taikhoan=loadall_taikhoan();
          }
          include_once '../../view/admin/acount/listacount.php';
          break;
       
          // list danh sách liên hệ
          case 'contact':
            $list_lh= listall_lh();
            include_once '../../view/admin/contact/contact.php';
            break;
         // list danh mục bàn
         case 'tableList':
          $list_dm =  listall_dm() ;
            include_once '../../view/admin/tablelist/tablelist.php';
            break;

            // xóa danh mục bàn
            case 'xoadm':
              if(isset($_GET['id_loai_ban'])&&($_GET['id_loai_ban'])>0){
               $sql = "delete from loai_ban where id_loai_ban =".$_GET['id_loai_ban'];
               pdo_execute($sql);
              }
             $list_dm =  listall_dm() ;
             include_once '../../view/admin/tablelist/tablelist.php';
             break;
          
             // thêm danh mục bàn
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