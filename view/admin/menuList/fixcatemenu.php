<?php
if(is_array($fix_catemenu )){
  extract($fix_catemenu);
  // var_dump($fix_catemenu);
}
$image_path = "../../view/admin/menuList/img/".$anh_danh_muc_mon;
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
  <link rel="stylesheet" href="../../view/admin/menuList/css/style.css">
</head>

<body>
  <div class="container_menulist">
    <span class="title">Cập nhật danh mục món ăn</span>
    <div class="form_add">
      <form action="?ctr=update_catemenu" method="POST" enctype="multipart/form-data">
        <div class="item_menuList">
          <p>Mã danh mục món</p>
          <input type="text" readonly placeholder="auto number" disabled name="id_danh_muc_mon">
        </div>
        <div class="item_menuList">
          <p>Tên danh mục món</p>
          <input type="text" value="<?=$ten_danh_muc_mon?>" name="ten_danh_muc_mon">
        </div>
        <div class="item_menuList">
          <p>Ảnh danh mục món</p>
          <input type="file" name="anh_danh_muc">
          <?=$image?>
        </div>
        <div class="btn_submit">
          <input type="submit" value="Cập nhật" class="submit" name="123">
        </div>
        <input type="hidden" name="id_danh_muc_mon" value="<?=$id_danh_muc_mon?>">
      </form>
      <?php if(isset($tb)&&($tb!="")) echo"<span style='color: #DC3535;' >$tb</span>"; ?>
      <a href="?ctr=cate_menulist"><button class="add_listcate">Danh sách danh mục món</button></a>
    </div>
  </div>
</body>

</html>