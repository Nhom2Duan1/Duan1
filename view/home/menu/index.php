<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="./view/home/menu/style.css" />
</head>

<body>
  <div class="container_menu">
    <h2 class="title">Thực Đơn Nhà Hàng</h2>
    <div class="listMenu">
      <ul>
        <!-- ĐỔ DỮ LIỆU DANH SÁCH DANH MỤMÓNÓN -->
        <?php 
        $listmenu = loadAll_listmenu();
        // var_dump($listmenu);
        foreach ($listmenu as $loadlistcatemenu) {
          extract($loadlistcatemenu);
          $cate_menu = "?ctr=cate_menu&menu_list=".$id_danh_muc_mon;
          // var_dump($cate_menu);
          echo '
          <li>
            <div class="imgMenu"><img src="./view/home/menu/img/'.$anh_danh_muc_mon.'" alt="" /></div>
            <a  href="'.$cate_menu.'">'.$ten_danh_muc_mon.'</a>
          </li>
          ';
        }
        ?>
      </ul>
    </div>
    <div class="listDish">
      <!-- ĐỔ DỮ LIỆU MÓN ĂN -->
      <?php
       $list_catemenu = loadAll_liscate_menu();
       //  var_dump($anh_mon);
       foreach ($list_catemenu as $all_menu) {
         extract($all_menu);
        $detailMenu = "?ctr=detailMenu&id_mon=".$id_mon;
        // var_dump($id_mon);
        // var_dump($list_catemenu);
        echo '
        <div class="item">
        <div class="img">
        <img src="./view/admin/menu/img/'.$anh_mon.'" alt="" />
        </div>
        <div class="listDish_cnt">
        <div class="">
          <div class="price">'.$gia_mon.'</div>
          <div class="name">'.$ten_mon.'</div>
          <div class="review">
            <i class="fas fa-star"></i>
            <span>'.$danh_gia_mon.'</span>
          </div>
          </div>
          <div class="">
          <a href="'.$detailMenu.'">
            <div class="info">
              <button class="info_order">Chi tiết</button>
            </div>
          </a>
          </div>
        </div>
      </div>
        ';
      }
      ?>
    </div>
  </div>
</body>

</html>