<?php
if(is_array($slider)){
  extract($slider);
}

?>
<div class="content">
                <div class="updateslide">
                        <h1 class="title--update">Update SlideShow</h1>
                        <div class="updateslide__container">
                                
                                 <div class="img__banner">
                                <img src="../../view/home/hompage/img/<?=$image?>" alt="">
                                 </div>
                   
                                <form action="?ctr=comfirm" method="post" class="form_update" enctype="multipart/form-data" >
                                        <input type="hidden" name="id_slidershow" value="<?=$id_slidershow?>">
                                        <input type="hidden" name="name_slider" value="<?=$name_slider?>">
                                        <input type="file" name="img" id=""  class="input--update" >
                                        <input type="submit" value="Gửi" name="btn_update" class="btn--update">
                                        
                                </form>
                                
                  
                        </div>
                       
                        
                </div>


</div>
<!-- end -->
</div>