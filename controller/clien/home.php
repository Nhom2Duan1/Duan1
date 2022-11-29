<?php
session_start();
include_once './view/home/hompage/header.php';
include_once 'model/pdo.php';
include_once 'model/acount/acount.php';
include_once 'model/book/book.php';
include_once 'model/contact/contact.php';
include_once 'model/tablelist/tablelist.php';
include_once 'model/slideShow/slideShow.php';
include_once 'model/news/news.php';
include_once 'model/introduce/introduce.php';
include_once './model/menu/listcatemenu.php';
include_once './model/menu/menu.php';
$slider=loadall_slide();
if(isset($_GET['ctr'])){
  $ctr = $_GET['ctr'];
  switch ($ctr) {
    case 'homepage':
     
      $slider=loadall_slide();
      include_once './view/home/hompage/homepage.php';
      break;
    // News
    case 'news':
      $news=load4_news();
      include_once './view/home/news/news.php';
      break;
    // News chi tiết
    case 'newsct':
      if(isset($_GET['id_tintuc'])&&($_GET['id_tintuc']>1)){
        $id_tintuc=$_GET['id_tintuc'];
        $one_news=one_news($id_tintuc);
        $news=loadall_news();
        extract($one_news);
        include_once './view/home/news/detail1.php';
      }else{
        include_once './view/home/news/news.php';
      }
      break;
    // Giới thiệu
    case 'introduce':
      $intro=load2_intro();
      include_once './view/home/introduce/introduce.php';
      break;
      // danh sách các danh mục
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
         // chi tiết món ăn
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
      // Đăng nhập
    case 'signin':
      if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
        $ten_tk = $_POST['ten_tk'];
        $pass = $_POST['pass'];
        $checkacount=checkacount($ten_tk, $pass);
        if(is_array($checkacount)){
          $_SESSION['ten_tk']=$checkacount;
            header ('location:index.php');
        } else{
          $thongbao = "Tài khoản không tồn tại. Vui lòng đăng ký";
        }   
      }
      include_once './view/home/acount/signin/index.php';
      break;
      // Đăng kí
    case 'signup':
        if(isset($_POST['dangky']) && ($_POST['dangky'])){
          $ten_tk = $_POST['ten_tk'];
          $email = $_POST['email'];
          $pass = $_POST['pass'];
          $sdt = $_POST['sdt'];
          insert_taikhoan($ten_tk, $email, $pass, $sdt);
          $thongbao = "Đăng ký thành công";
        }
      include_once './view/home/acount/signup/index.php';
      break;
      // đăng xuất tài khoản
      case 'log_out': 
        session_unset ();
        header('location:index.php');
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

    default:
      include_once './view/home/hompage/homepage.php';
      break;
  }
}else{
  include_once './view/home/hompage/homepage.php';
}
include_once './view/home/hompage/footer.php';
?>