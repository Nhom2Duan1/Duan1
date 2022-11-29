
<div class="list_dss">

<div class="LH">Danh Sách Cần Liên Hệ</div>
<div class="list_ds">
    <table class="table">
       <thead class="table_lh">
          <tr class="tr_lh">
            <th class="th_lh">id</th> 
            <th>Họ Tên </th>
            <th>Email</th>
            <th>Số Điện Thoại</th>
            <th>Nội Dung</th>
            <th>Mục Đích</th>
          </tr>
    </thead>
    <tbody>
      <?php 
      foreach( $list_lh as $lien_he){
         extract ($lien_he) ;
         echo '
         <tr>
         <td>'.$id_lien_he.'</td>
         <td>'.$ten_khach.'</td>
         <td>'.$email.'</td>
         <td>'.$sdt.'</td>
         <td>'.$muc_dich.'</td>
         <td>'.$noi_dung.'</td>
      </tr>' ;
      }
      ?>
       
     
    </tbody>
   </table>
</div>


</div>
  



<!-- </div> -->