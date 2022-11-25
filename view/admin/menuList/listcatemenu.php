<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../view/admin/menuList/css/style2.css">
</head>

<body>
  <div class="container_menulist">
    <span class="title">Danh sách danh mục món ăn</span>
    <a href="?ctr=addcatemenu" class=""><button class="add_new">Thêm
        mới</button></a>
    <div class="listcate_menu">
      <table>
        <thead>
          <tr>
            <th>Mã danh mục món</th>
            <th>Tên danh mục món</th>
            <th>Ảnh danh mục món</th>
            <th colspan="2">Tùy chỉnh</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($listmenu as $cate_menu) {
            extract($cate_menu);
            // var_dump($cate_menu);
            // die;
            $deleListMenu = "?ctr=deleListMenu&id_danh_muc_mon=" . $id_danh_muc_mon;
            $fixListMenu = "?ctr=fixListMenu&id_danh_muc_mon=" . $id_danh_muc_mon;
            // $fixPro = "?ctr=fixPro&id_pro=" . $id_pro;
            echo '
            <tr>
            <td>'.$id_danh_muc_mon.'</td>
            <td>'.$ten_danh_muc_mon.'</td>
            <td><img style="width: 100px; margin: 5px auto;" src="../../view/admin/menuList/img/' . $anh_danh_muc_mon . '" alt=""></td>
            <td class="fix"><a href="'.$fixListMenu.'" class="fix_btn">Sửa</a></td>
            <td onclick=`alert("Bạn có muốn xóa?")` class="dele"><a href="'.$deleListMenu.'" class="dele_btn">Xóa</a></td>
            </a>
          </tr>
            ';       
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>