<?php
if(is_array($intro)){
        extract($intro);
}


?>

<div class="content">
   <div class="news__container">
   <div class="title">Update giới thiệu</div>
   
   <form action="?ctr=comfirm_intro" method="post" class="form__news" enctype="multipart/form-data"> 
   <div class="lable">
         <label for="">Tiêu đề</label>
         <!-- <input type="text" name="title" id="" placeholder="Viết gì đó...." value=""> -->
         <textarea name="title" id="" cols="30" rows="10"><?=$title?></textarea>
     </div>
     <div class="lable">
         <label for="">Image</label>
         <input type="file" name="image" id="" >
         <div class="img--update"><img src="../../view/home/introduce/img/<?=$image?>" alt=""></div>
     </div>
     
     <div class="lable">
         <label for="">Nội dung</label>
         <textarea name="content" id="" cols="30" rows="10" placeholder="Viết gì đó...." ><?=$content?></textarea>
     </div>
     <div class="btn--add">
        <input type="hidden" name="id_intro" value="<?=$id_intro?>">
        <input type="submit" name="btn_update" value="Update">
     </div>
     

   </form>

   </div>


</div>

</div>