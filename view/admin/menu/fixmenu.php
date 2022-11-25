<?php
 if(is_array($fix_menu)){
  extract($fix_menu);
  // var_dump($fix_menu);
 }
 $image_path = "../../view/admin/menu/img/".$anh_mon;
if(is_file($image_path)){
  $image = '<img style="width: 100px;" src="'.$image_path.'" alt="">';
}else{
    $image = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../view/admin/menu/css/main1.css">
</head>

<body>
  <div class="container_addmenu">
    <h2 class="title_addmenu">Sửa món ăn</h2>
    <div class="form_addmenu">
      <form action="?ctr=update_menu" method="POST" enctype="multipart/form-data">
        <div class="item_addmenu">
          <p>Ảnh món ăn</p>
          <input type="file" name="anh_mon_an">
          <?=$image?>
        </div>
        <div class="item_addmenu">
          <p>Tên món ăn</p>
          <input type="text" name="ten_mon" value="<?=$ten_mon?>">
        </div>
        <div class="item_addmenu">
          <p>Giá món ăn</p>
          <input type="text" name="gia_mon" value="<?=$gia_mon?>">
        </div>
        <div class="item_addmenu">
          <p>Đánh giá món ăn</p>
          <input type="text" name="danh_gia_mon" value="<?=$danh_gia_mon?>">
        </div>
        <div class="item_addmenu">
          <p>Loại món ăn</p>
          <select name="menu_list" id="">
            <?php
            foreach ($listmenu as $menu_list) {
            extract($menu_list);
            // var_dump($menu_list);
            if($id_danh_muc_mon==$id_mon)
            echo '<option value="'.$id_danh_muc_mon.'">'.$ten_danh_muc_mon.'</option>';
            else
            echo '<option value="'.$id_danh_muc_mon.'">'.$ten_danh_muc_mon.'</option>';
            }
            ?>
          </select>
        </div>
        <div class="btn_submit">
          <input type="submit" value="Cập nhật" name="submit_menu">
          <input type="hidden" name="id_mon" value="<?=$id_mon?>">
        </div>
        <?php if(isset($tb)&&($tb!="")) echo"<span style='color: #DC3535;' >$tb</span>"; ?>
      </form>
      <a href="?ctr=list_Menu"><button class="listmenu_addmenu">Danh sách thực đơn</button></a>
    </div>
  </div>
</body>

</html>