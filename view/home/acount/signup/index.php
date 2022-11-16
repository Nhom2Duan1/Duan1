<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng kí</title>
  <link rel="stylesheet" href="../view/home/acount/signup/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div class="signin">
      <div class="boxright">
        <div class="image_decor">
          <img src="../view/home/acount/signup/img/welcome.png" alt="">
        </div>
        <form action="">
          <div class="icon_form">
            <i class="fas fa-user"></i>
            <p>Họ Tên</p>
          </div>
          <input type="text" />
          <div class="icon_form">
            <i class="fas fa-lock"></i>
            <p>Mật khẩu</p>
          </div>
          <input type="password" name="" id="" />
          <div class="icon_form">
            <i class="fas fa-envelope"></i>
            <p>Email</p>
          </div>
          <input type="email" name="" id="" />
          <div class="icon_form">
            <i class="fas fa-phone"></i>
            <p>Số điện thoại</p>
          </div>
          <input type="text" />
          <div class="icon_form">
            <i class="fas fa-map-marked-alt"></i>
            <p>Địa chỉ</p>
          </div>
          <input type="text" />
          <div class="signin_btn"><button>Đăng Kí</button></div>
        </form>
        <div class="suggest_signup">
          <p>Bạn đã có tài khoản?</p>
          <a href="?ctr=signin">
            <p>Đăng nhập</p>
          </a>
        </div>
      </div>
      <div class="boxleft">
        <div class="box1" style="
              background-image: url('../view/home/acount/signup/img/img2.jpg');
            ">
          <div class="content">
            <div class="title">Welcome TPGC FOOD</div>
            <div class="desc">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut,
              laboriosam.
            </div>
            <div class="review">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="author">Ngoc Tuyen</div>
            <div class="arrow">
              <div onclick="prevImage()" id="prev" class="arrow1">
                <i class="fas fa-arrow-left"></i>
              </div>
              <div id="next" class="arrow2">
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="box2">
          <p>Nhà hàng Nhật Tân</p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
            voluptatum, facilis eligendi minus vitae debitis aperiam cum
            expedita. Incidunt nobis suscipit obcaecati consequatur voluptatem
            laudantium id aliquam voluptates doloremque quisquam.
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="../view/home/acount/signup/main.js"></script>
</body>

</html>