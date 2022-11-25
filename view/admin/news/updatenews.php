<?php
if(is_array($news)){
     extract($news);
}

?>
<div class="content">
   <div class="news__container">
   <div class="title">Update tin tức</div>
   
   <form action="?ctr=comfirm_news" method="post" class="form__news" enctype="multipart/form-data"> 
   <div class="lable">
         <label for="">Tiêu đề</label>
         <textarea name="title" id="" cols="30" rows="10" placeholder="Viết gì đó ......"><?=$title?></textarea>
     </div>
     <div class="lable">
         <label for="">Image</label>
         <input type="file" name="image" id="" >
         <div class="img--update"><img src="../../view/home/news/img/<?=$image?>" alt=""></div>
     </div>
     <div class="lable">
         <label for="">Tóm tắt</label>
        
         <textarea name="summary" id="" cols="30" rows="10" placeholder="Viết gì đó ......"><?=$summary?></textarea>
     </div>
     <div class="lable">
         <label for="">Nội dung</label>
         <textarea name="content" id="" cols="30" rows="10" placeholder="Viết gì đó...." ><?=$content?></textarea>
     </div>
     <div class="btn--add">
        <input type="hidden" name="id_tintuc" value="<?=$id_tintuc?>">
       <a href="?ctr=news"><input type="submit" name="btn_update" value="Update bài"></a>
     </div>
     

   </form>

   </div>


</div>

</div>