<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TPCG-FOOD</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="./hompage/img/logo-removebg.png" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="./view/home/hompage/style.css" />
  <link rel="stylesheet" href="./view/home/acount/signin/style.css" />
  <link rel="stylesheet" href="./view/home/acount/signup/style.css" />
  <link rel="stylesheet" href="./view/home/hompage/style.css" />
  <link rel="stylesheet" href="./view/home/contact/contact.css">
  <link rel="stylesheet" href="./view/home/book/book.css">
  <link rel="stylesheet" href="./view/home/news/style.css" />
  <link rel="stylesheet" href="./view/home/news/style1.css" />
  <link rel="stylesheet" href="./view/home/introduce/style.css" />
  <link rel="stylesheet" href="./view/home/acount/signup/style.css" />
</head>

<body>
  <main class="container">
    <div class="bg__header"></div>
    <header id="scroll-header">

      <div class="header_container ">
        <div class="btn__menu">
          <i class="fa-solid fa-bars"></i>
        </div>
        <div class="header__logo">
          <img src="./view/home/hompage/img/logo-removebg.png" alt="" />
        </div>
 
        <div class="header__menu">

          <ul class="list--menu close-menu ">
            <div class="btn__close">
              <i class="fa-solid fa-xmark"></i>
            </div>
            <li class="list--link"><a href="?ctr=homepage">Trang chủ</a></li>
            <li class="list--link"><a href="?ctr=introduce">Giới thiệu</a></li>
            <li class="list--link"><a href="?ctr=settable">Đặt bàn</a></li>
            <li class="list--link"><a href="?ctr=menu">Thực đơn</a></li>
            <li class="list--link"><a href="?ctr=news">Tin tức</a></li>
            <li class="list--link"><a href="?ctr=contact">Liên hệ</a></li>
            <li class="list--link"><a href="#" class="hotline">Hotline:099999999</a></li>
           <?php 
            if(isset($_SESSION['ten_tk'])){                  
           ?> 
            <li class="list--link"> <a href="?ctr=log_out" style="color: #AAAAAA;">Đăng Xuất</a> </li>
           <?php } else{

           ?>
            <li class="list--link"><a href="?ctr=signin">Đăng nhập</a></li>
           <?php  }?>
            
            <li class="list--link"><a href="">
              <?php
              if(isset($_SESSION['ten_tk'])){
                ?>
                <span> Hello </span> <?php echo $_SESSION['ten_tk'] ['ten_tk'] ?>
                 
               <?php }?>
            </a>
          </li> 
          <?php
       if (isset($_SESSION['ten_tk'])) { 
           extract($_SESSION['ten_tk']);
         ?>
    
            <?php if($vai_tro == 1){ ?>
            <li class="list--link" >
              <a href="controller/admin/admin.php" style="color:#AAAAAA;"  >Đăng nhập admin</a>
            </li>
            <?php } ?>
         
         <?php
       } 
     ?>
          </ul>
        </div>
        <div class="search">
          <i class="fa-solid fa-magnifying-glass"></i>
          <form action="" method="get" class="form__search">
            <input type="text" name="" id="">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </header>