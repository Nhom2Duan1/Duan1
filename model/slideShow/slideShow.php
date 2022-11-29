<!-- update slideShow -->
<?php
function loadall_slide(){
        $sql="select *from slidershow ";
        $listslide=pdo_query($sql);
        return $listslide;

}

function one_slider($id_slidershow){
        $sql="select * from slidershow where id_slidershow=".$id_slidershow;
        $slider=pdo_query_one($sql);
        return $slider;

}
function update_slidershow($id_slidershow,$image,$name_slider){
        if($image!=""){
                $sql= "update slidershow set image='".$image."' ,name_slider='".$name_slider."' where id_slidershow =".$id_slidershow;
        }else{
                $sql= "update slidershow set name_slider='".$name_slider."'  where id_slidershow =".$id_slidershow;
        }
         
         pdo_execute($sql);
}

?>
