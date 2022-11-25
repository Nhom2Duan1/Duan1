<div class="content" >
     <div class="post" style="height:fit-content">
            <div class="post_content-left" >

           
                      <?php
                        foreach ($news as $listnews) {
                          extract($listnews);
                          $linknews="?ctr=newsct&&id_tintuc=".$id_tintuc;
                          echo ' <div class="post_left">
                          <div class="item">
                            <div class="date">'.$date.'</div>
                            <a href="'.$linknews.'"> <img src="./view/home/news/img/' . $image . '" alt="" style="width:400px"></a>
                          </div>
                          <div class="letter">
                            <a href="'.$linknews.'">
                              <h1>' . $title . '</h1>
                              <span>' .$date. '</span>
                            </a>
                            <hr width="30px">
                            <a href="'.$linknews.'">
                              <p>' . $summary . '</p>
                            </a>
                          </div>
                        </div>';
                        }


                        ?>
   </div>


                      <div class="post_right">
                        <div class="title">
                          <h1>BÀI VIẾT MỚI</h1>
                          <hr>
                        </div>
                        <?php
                            foreach ($news as $titlenews) {
                              extract($titlenews);
                              echo '<div class="post_details">
                              <a href="'.$linknews.'">' . $title . '</a>
                              <hr>
                            </div>';
                            }

                            ?>
                        <div class="title">
                          <h1>CHUYÊN MỤC</h1>
                          <hr>
                        </div>
                      </div>
                      <!-- end post_right -->
    </div>
</div>