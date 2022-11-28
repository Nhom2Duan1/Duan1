<?php
 if(is_array($a_menu)){
  extract($a_menu);
  // var_dump($a_menu);
 }
//  $image_path = "../../view/admin/menu/img/".$anh_mon;
// if(is_file($image_path)){
//   $image = '<img style="" src="'.$image_path.'" alt="">';
// }else{
//     $image = "";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./view/home/menu/detail.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<div class="ctn_detail">
  <div class="box_left">
    <?php 
    echo '
    <img src="./view/admin/menu/img/'.$anh_mon.'" alt="">
    ';
    ?>
  </div>
  <div class="box_right">
    <div class="title_right">
      <?php
      echo '<h2>'.$ten_mon.'</h2>';
      ?>
      <div class="price_right"><span>Giá món ăn:</span>
        <?=$gia_mon?>
      </div>
      <div class="review"><?=$danh_gia_mon?> <i class="fas fa-star"></i><span>1024 đánh giá</span></div>
    </div>
    <div class="infor_right">
      <img src="./view/home/menu/img/shopeefood.png" alt="">
      <img src="./view/home/menu/img/grapfood.png" alt="">
      <img src="./view/home/menu/img/beamin.png" alt="">
    </div>
    <div class="desc_right"><?=$mo_ta_mon_an?></div>
  </div>
</div>

<body>

</body>

</html>