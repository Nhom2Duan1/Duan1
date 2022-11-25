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
    <span class="title">Danh sách món ăn</span>
    <a href="?ctr=addmenu" class=""><button class="add_new">Thêm
        mới</button></a>
    <div class="listcate_menu">
      <table>
        <thead>
          <tr>
            <th>Mã món</th>
            <th>Ảnh món</th>
            <th>Tên món</th>
            <th>Giá món</th>
            <th>Đánh giá món</th>
            <th>Loại món</th>
            <th colspan="2">Tùy chỉnh</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //  $listmenu = loadAll_listmenu();
          //  var_dump($list_menu);
          foreach ($loadall_menu as $list_menu) {
            extract($list_menu);
            // var_dump($list_menu);
            // die;
            $deleMenu = "?ctr=deleMenu&id_mon=" . $id_mon;
            $fixMenu = "?ctr=fixMenu&id_mon=" . $id_mon;
            // $fixPro = "?ctr=fixPro&id_pro=" . $id_pro;
            echo '
            <tr>
            <td>'.$id_mon.'</td>
            <td><img style="width: 100px; margin: 5px auto;" src="../../view/admin/menu/img/' . $anh_mon . '" alt=""></td>
            <td>'.$ten_mon.'</td>
            <td>'.$gia_mon.'</td>
            <td>'.$danh_gia_mon.'</td>
            <td>'.$menu_list.'</td>
            <td class="fix"><a href="'.$fixMenu.'" class="fix_btn">Sửa</a></td>
            <td onclick=`alert("Bạn có muốn xóa?")` class="dele"><a href="'.$deleMenu.'" class="dele_btn">Xóa</a></td>
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