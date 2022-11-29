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
    <span class="title">Quản lí danh mục món ăn</span>
    <div class="form_add">
      <form action="?ctr=addcatemenu" method="POST" enctype="multipart/form-data">
        <div class="item_menuList">
          <p>Mã danh mục món</p>
          <input type="text" readonly placeholder="auto number" disabled name="id_danh_muc_mon">
        </div>
        <div class="item_menuList">
          <p>Tên danh mục món</p>
          <input type="text" name="ten_danh_muc_mon">
        </div>
        <div class="item_menuList">
          <p>Ảnh danh mục món</p>
          <input type="file" name="anh_danh_muc_mon">
        </div>
        <div class="btn_submit">
          <input type="submit" value="Thêm mới" class="submit" name="abc">
        </div>
        <?php if(isset($tb)&&($tb!="")) echo"<span style='color: #DC3535;' >$tb</span>"; ?>
      </form>
      <a href="?ctr=cate_menulist"><button class="add_listcate">Danh sách danh mục món</button></a>
    </div>
  </div>
</body>

</html>