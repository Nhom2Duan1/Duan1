<div class="container">
    <?php
       extract($one_news);

       ?>
    <div class="new">
        <div class="left">
            <a href=""><img src="img/img5.jpg" alt=""></a>
            <div class="title">
                <h2><a href="">Tin Tức</a></h2>
                <h1>
                    <?= $title ?>
                </h1>

                <hr>
            </div>
            <h6>
                <?= $date ?>
            </h6>
            <p>
                <?= $content ?>
            </p>
            <img src="./view/home/news/img/<?= $image ?>" alt="" style="width: 100%;">
            <div class="background"> <em>Voucher tặng món trị giá tới 189.000đ tại hệ thống TPCG-Food</em>
            </div>

            <div class="hr">
                <hr>
            </div>
            <div class="icon">
                <a href=""><i class='bx bxl-facebook-circle'></i></a>
                <a href=""><i class='bx bxl-twitter'></i></a>
                <a href=""><i class='bx bx-envelope'></i></a>
                <a href=""><i class='bx bxl-pinterest'></i></a>
                <a href=""><i class='bx bxl-google-plus'></i></a>
                <a href=""><i class='bx bxl-linkedin'></i></a>
            </div>
            <hr>
            <p>This entry was posted in Tin tức. Bookmark the permalink.</p>
        </div>
        <div class="post_right">

            <div class="title">
                <h1>BÀI VIẾT MỚI</h1>
                <hr>
            </div>
            <?php
                foreach ($news as $titlenews) {
                    extract($titlenews);
                    $linknews = "?ctr=newsct&&id_tintuc=" . $id_tintuc;
                    echo '<div class="post_details">
          <a href="' . $linknews . '">' . $title . '</a>
          <hr>
          </div>';
                }

                ?>

            <div class="title">
                <h1>CHUYÊN MỤC</h1>
                <hr>
            </div>

        </div>
    </div>

</div>