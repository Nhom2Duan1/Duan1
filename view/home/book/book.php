
  <div>
    <div class="img_banner">
      <img src="./view/home/book/img/banner.jpg" alt="">
    </div>
    <div class="form">
      <div class="left">
        <h1>Set Table </h1>
        <span class="tt">Quý khách vui lòng đặt bàn trước để có trải nghiệm thưởng thức ẩm thực tốt nhất tại Sun
          Homes
          BBQ.</span>
        <h4>Gợi ý Đặt Bàn:</h4>
        <span class="table_type"> <i class='bx bx-chevron-right'></i> Đi 1 người: đặt bàn đơn</span>
        <hr> <br>
        <span class="table_type"> <i class='bx bx-chevron-right'></i> Đi 2 người: đặt bàn đôi</span>
        <hr> <br>
        <span class="table_type"> <i class='bx bx-chevron-right'></i> Đi nhóm 4-6 người: đặt bàn 6 người.</span>
        <hr> <br>
        <span class="table_type"> <i class='bx bx-chevron-right'></i>Đi nhóm 6-12 người: đặt bàn dài</span>
        <hr> <br>
        <span class="table_type"> <i class='bx bx-chevron-right'></i>Đi nhóm >12 người: gọi trực tiếp Hotline:
          0909.009.009</span>
        <hr>
      </div>
      <!-- <link rel="stylesheet" href="../view/home/book/book.css"> -->
      <div class="righ">
        <div class="" >
          <form action="" method="post">
          <select class="option" name="id_loai_ban" id="">
            <option value="">Chọn Loại Bàn</option>
            <?php
            foreach ($listdm as $dm_ban ) {
              extract ($dm_ban);
              echo ' <option  value="'.$id_loai_ban.'">'.$ten_danh_muc.'</option>';
            }
             ?>
            
            

          </select>
          <input class="input" name="ten_nguoi_dat" type="text" placeholder="Tên Của Bạn ..." required>
          <input class="input" name="sdt" type="text" placeholder="Số Điện Thoại ..." required>
          <input class="input" name="so_nguoi" type="number" min="0" placeholder="Số Người ăn ..." required>
          <input class="datime" name="ngay" type="date">
        </div>
        <div class="checkbox">
          <div class="name">
            <input type="radio" name="gio[]" value="08:00">
            <nav class="time">08:00</nav>
          </div>
          <div class="name"><input name="gio[]" type="radio"  value="08:30">
            <nav class="time">08:30</nav>
          </div>
          <div class="name"><input name="gio[]" type="radio"  value="09:00">
            <nav class="time">09:00</nav>
          </div>
          <div class="name"><input name="gio[]" type="radio"  value="09:30">
            <nav class="time">09:30</nav>
          </div>
          <div class="name"><input  name="gio[]"type="radio"  value="10:00">
            <nav class="time">10:00</nav>
          </div>
          <div class="name"><input  name="gio[]"type="radio"  value="10:30">
            <nav class="time">10:30</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio"  value="11:00">
            <nav class="time">11:00</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio"  value="11:30">
            <nav class="time">11:30</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio"  value="12:00">
            <nav class="time">12:00</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio"  value="12:30">
            <nav class="time">12:30</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio"  value="13:00">
            <nav class="time">13:00</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio"  value="13:00">
            <nav class="time">13:30</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="14:00">
            <nav class="time">14:00</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="14:30">
            <nav class="time">14:30</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="15:00">
            <nav class="time">15:00</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="15:30">
            <nav class="time">15:30</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="16:00">
            <nav class="time">16:00</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="16:30">
            <nav class="time">16:30</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="17:00">
            <nav class="time">17:00</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="17:30">
            <nav class="time">17:30</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="18:00">
            <nav class="time">18:00</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="18:30"> 
            <nav class="time">18:30</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="19:00">
            <nav class="time">19:00</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="19:30">
            <nav class="time">19:30</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="20:00">
            <nav class="time">20:00</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="20:30">
            <nav class="time">20:30</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="21:00">
            <nav class="time">21:00</nav>
          </div>
          <div class="name"><input name="gio[]"type="radio" value="21:30">
            <nav class="time">21:30</nav>
          </div>

        </div>
        <div class="btn_button"><input name="btn_bt" type="submit" value="Đặt Bàn"></div>
        </form>

      </div>
    </div>
  </div>
