<?php
   if(is_array($taikhoan)){
    extract($taikhoan);
   }
?>
<div class="container-update">
    <div class="title-update">
        <h1>Cập Nhật Tài Khoản</h1>
    </div>
    <div class="content-update">
        <form action="?ctr=update" method="post" enctype="multipart/form-data">
               <div>
                Tên Tài Khoản <br>
                <input type="text" name="ten_tk" value="<?=$ten_tk?>">
               </div>
               <div>
                Email  <br>
                <input type="emaoil" name="email" value="<?=$email?>">
               </div>
               <div>
                PassWord <br>
                <input type="password" name="pass" value="<?=$pass?>">
               </div>
               <div>
                SĐT <br>
                <input type="text" name="sdt" value="<?=$sdt?>">
               </div>
               <div class="click">
                <input type="hidden" name="id_tai_khoan" value="<?=$id_tai_khoan?>">
                <input type="submit" name="update" value="Cập Nhật">
               </div>
        </form>
    </div>
</div>