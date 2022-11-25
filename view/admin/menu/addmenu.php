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
    <h2 class="title_addmenu">Thêm món ăn</h2>
    <div class="form_addmenu">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="item_addmenu">
          <p>Ảnh món ăn</p>
          <input type="file" name="anh_mon">
        </div>
        <div class="item_addmenu">
          <p>Tên món ăn</p>
          <input type="text" name="ten_mon">
        </div>
        <div class="item_addmenu">
          <p>Giá món ăn</p>
          <input type="text" name="gia_mon">
        </div>
        <div class="item_addmenu">
          <p>Đánh giá món ăn</p>
          <input type="text" name="danh_gia_mon">
        </div>
        <div class="item_addmenu">
          <p>Loại món ăn</p>
          <select name="menu_list" id="">
            <?php
            foreach ($listmenu as $menu_list) {
            extract($menu_list);
            echo '<option value="'.$id_danh_muc_mon.'">'.$ten_danh_muc_mon.'</option>';
            }
            ?>
          </select>
        </div>
        <div class="btn_submit">
          <input type="submit" value="Thêm mới" name="submit_menulist">
        </div>
        <?php if(isset($tb)&&($tb!="")) echo"<span style='color: #DC3535;' >$tb</span>"; ?>
      </form>
      <a href="?ctr=list_Menu"><button class="listmenu_addmenu">Danh sách thực đơn</button></a>
    </div>
  </div>
</body>

</html>