<div class="content">
  <div class="news__container">
    <div class="news__add__title">
    <div class="title">Danh sách tin tức</div>
    <a href="?ctr=add_news"> <div class="news--add">Thêm tin tức <i class="fa-solid fa-plus"></i></div></a>
    
    </div>
     <div class="news__table">
        <table>
          <thead>
            <tr class="header--news">
              <th>ID</th>
              <th>Tên người đặt</th>
              <th>Số điện thoại</th>
              <th>Số người</th>
              <th>Ngày</th>
              <th>Giờ</th>
              <th><i class="fa-solid fa-pen-to-square icon--update"></i></th>
              <th> <i class="fa-solid fa-trash-can icon--delete"></i></th>
            </tr>
          </thead>
          <tbody>
            
            <?php
            foreach($listbooks as $books){
               extract($books);
               
               $delete_book="?ctr=delete_book&&id_dat_ban=".$id_dat_ban;
               $update_book="?ctr=update_book&&id_dat_ban=".$id_dat_ban;
               echo '
               <tr class="body--news">
               <td>'.$id_dat_ban .'</td>
               <td>'.$ten_nguoi_dat.'</td>
               <td >'.$sdt.'</td>
               <td>'.$so_nguoi.'</td>
               <td>'.$ngay.'</td>
               <td>'.$gio.'</td>
               <td> <a href="'.$update_book.'"><i class="fa-solid fa-pen-to-square icon--update"></i></a></td>
               <td> <a href="'.$delete_book.'"><i class="fa-solid fa-trash-can icon--delete"></i></a> </td>
             
            </tr>';
            }


            ?>
            
          </tbody>

        </table>
     </div>





  </div>
