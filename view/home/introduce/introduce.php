      <div class="container--contact" style="max-width: 1200px;margin: 0 auto ;">

 
          <div class="contact">
              <?php
              foreach($intro as $listintro){
                extract($listintro);
                echo '<div class="left">
                <h1>'.$title.'</h1>
                  <a href=""><img src="./view/home/introduce/img/'.$image.'" alt="" style="width:100% ; margin-bottom:100px"></a>
                  <p>'.$content.'</p>
                 
                 <a href="?ctr=menu"><button><i class="bx bx-search"></i> Thực đơn</button></a>
              </div>';
              }

              ?>
            
            <!-- <div class="left">
              <h1>TPCG-Food ALACARTE (Đặt bàn)</h1>
              <a href=""><img src="./view/home/introduce/img/img2.jpg" alt=""></a>
              <p> <strong>TPCG-Food</strong> là mô hình Buffet tự chọn ăn không giới hạn trong một mức giá cố định, có Line Buffet để quý khách lựa chọn món ăn.
                 Quý khách có thể bắt đầu bằng các món soup, kimchi salad, món nóng, món cổ truyền, các món thịt tẩm sốt Hàn Quốc nướng trên than hồng, và kết thúc với món tráng miệng. Thực đơn Buffet hơn 200 món ăn đa dạng đặc trưng hương vị Hàn Quốc.</p>
               <p><strong>TPCG-Food</strong> đặc biệt thích hợp với khách hàng có nhu cầu tổ chức liên hoan sinh nhật, khách đoàn và gia đình.</p>  
               <a href="?ctr=menu"><button><i class='bx bx-heart'></i> Thực đơn</button></a>
            </div> -->
          </div>
         
          </div>
