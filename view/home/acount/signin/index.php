
  <div class="container_Signin">
    <div class="signin">
      <div class="boxleft">
        <div class="image_decor">
          <img src="./view/home/acount/signin/img/welcome_signin.png" alt="">
        </div>
        <form action="" method="post">
          <p>Họ tên</p>
          <input type="text" name="ten_tk"/>
          <p>Mật khẩu</p>
          <input type="password" name="pass" />
          <div class="btn_submit">
            <input type="submit" name="dangnhap" value="Đăng Nhập">
            <a href="">
              <p>Lấy lại mật khẩu</p>
            </a>
            <a href="">Cập nhập tài khoản</a>
          </div>
        </form>
        <h2 class="thongbao_signup">
        <?php
             if (isset($thongbao) && ($thongbao!= "")){
              echo $thongbao;
             }
        ?>
        </h2>
        <div class="suggest_signin">
          <p class="suggest_signin_title">Bạn chưa có tài khoản?</p>
          <a href="?ctr=signup">
            <p>Đăng kí </p>
           
          </a>
        </div>
      </div>
      <div class="boxright" style="
            background-image: url('https://images.unsplash.com/photo-1511300276866-a284652b55c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
          "></div>
    </div>
  </div>