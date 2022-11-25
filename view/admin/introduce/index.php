<div class="content">
  <div class="news__container">
    <div class="news__add__title">
    <div class="title">Danh sách giới thiệu</div>
    <a href="?ctr=add_intro"> <div class="news--add">Thêm giới thiệu <i class="fa-solid fa-plus"></i></div></a>
    
    </div>
     <div class="news__table">
        <table>
          <thead>
            <tr class="header--news">
              <th>ID</th>
              <th>TIÊU ĐỀ</th>
              <th>IMAGE</th>
              <th>CONTENT</th>
              <th><i class="fa-solid fa-pen-to-square icon--update"></i></th>
              <th><i class="fa-solid fa-trash-can icon--delete"></i></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listintro as $intro) {
              extract($intro);
              $delete_intro="?ctr=delete_intro&&id_intro=".$id_intro;
              $update_intro="?ctr=update_intro&&id_intro=".$id_intro;
              echo '<tr class="body--news">
              <th>'.$id_intro.'</th>
              <th>'.$title.'</th>
              <th class="news--img"><img  src="../../view/home/introduce/img/'.$image.'" alt=""></th>
              <th>'.$content.'</th>
              <th><a href="'.$update_intro.'"><i class="fa-solid fa-pen-to-square icon--update"></i></a> </th>
              <th><a href="'.$delete_intro.'"><i class="fa-solid fa-trash-can icon--delete"></i></a> </th>
            </tr>';
            }

            ?>
          
            
          </tbody>

        </table>
     </div>





  </div>
