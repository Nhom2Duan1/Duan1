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
              <th>TIÊU ĐỀ</th>
              <th>IMAGE</th>
              <th>TÓM TẮT</th>
              <th>CONTENT</th>
              <th>DATE</th>
              <th><i class="fa-solid fa-pen-to-square icon--update"></i></th>
              <th> <i class="fa-solid fa-trash-can icon--delete"></i></th>
            </tr>
          </thead>
          <tbody>
            
            <?php
            
            foreach($listnews as $news){
               extract($news);
               $delete_news="?ctr=delete_news&&id_tintuc=".$id_tintuc;
               $update_news="?ctr=update_news&&id_tintuc=".$id_tintuc;
               echo '
               <tr class="body--news">
               <td>'.$id_tintuc.'</td>
               <td>'.$title.'</td>
               <td class="news--img"><img  src="../../view/home/news/img/'.$image.'" alt=""></td>
               <td>'.$summary.'</td>
               <td>'.$content.'</td>
               <td>'.$date.'</td>
               <td> <a href="'.$update_news.'"><i class="fa-solid fa-pen-to-square icon--update"></i></a></td>
               <td> <a href="'.$delete_news.'"><i class="fa-solid fa-trash-can icon--delete"></i></a> </td>
             
            </tr>';
            }


            ?>
            
          </tbody>

        </table>
     </div>





  </div>






</div>
</div>