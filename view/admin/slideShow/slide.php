
<div class="content">
        <div class="slideShow__container">
                <h1 class="slideShow__title">Danh sách banner</h1> 
                <div class="slideShow__table-container">
                <table class="table">
                        <thead>
                        <tr class="table--header">
                                <th>ID</th>
                                <th>IMAGE</th>
                                <th ><i class="fa-solid fa-pen-to-square icon"></i></th>
                                
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($listslider as $slider) {
                         extract($slider);
                         $update_slider="?ctr=upateslide&id_slidershow=".$id_slidershow;
                         echo '
                         <tr class="table--body">
                                <td>'.$id_slidershow.'</td>
                                <td class="img"><img src="../../view/home/hompage/img/'.$image.'" alt=""></td>
                                <td ><a href="'.$update_slider.'" ><i class="fa-solid fa-pen-to-square icon"></i></a></td>
                                
                        </tr>';
                        }


                        ?>
                        </tbody>
                </table>
                </div>
                
        </div>
              



</div>
<!-- end -->
</div>