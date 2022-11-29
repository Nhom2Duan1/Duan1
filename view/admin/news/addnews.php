
<div class="content">
   <div class="news__container">
   <div class="title">Thêm tin tức</div>
   
   <form action="" method="post" class="form__news" enctype="multipart/form-data"> 
   <div class="lable">
         <label for="">Tiêu đề</label>
         <textarea name="title" id="" cols="30" rows="10" placeholder="Viết gì đó ....."></textarea>
         <!-- <input type="text" name="title" id="" placeholder="Viết gì đó...."> -->
     </div>
     <div class="lable">
         <label for="">Image</label>
         <input type="file" name="image" id="" >
     </div>
     <div class="lable">
         <label for="">Tóm tắt</label>
         <!-- <input type="text" name="summary" id="" placeholder="Viết gì đó...."> -->
         <textarea name="summary" id="" cols="30" rows="10" placeholder="Viết gì đó ......"></textarea>

     </div>
     <div class="lable">
         <label for="">Nội dung</label>
         <textarea name="content" id="" cols="30" rows="10" placeholder="Viết gì đó...."></textarea>
     </div>
     <div class="btn--add">
        <input type="hidden" name="id_tintuc">
        <input type="submit" name="btn_add" value="Đăng bài" class="add-btn" >
     </div>
     

   </form>

   </div>


</div>

</div>