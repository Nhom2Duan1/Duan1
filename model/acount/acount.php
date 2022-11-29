<?php
// đăng nhập
function insert_taikhoan($ten_tk, $email, $pass, $sdt){
      $sql = "insert into taikhoan (ten_tk, email, pass, sdt) values ('$ten_tk','$email','$pass','$sdt')";
      pdo_execute($sql);
    }
// đăng nhập
    function checkacount($ten_tk, $pass){
     $sql = "select * from taikhoan where ten_tk='".$ten_tk."' AND pass=".$pass."";
     $p = pdo_query_one($sql);
     return $p;
}
// danh sách tài khoản
  function loadall_taikhoan(){
     $sql = "select * from taikhoan";
     $list_taikhoan=pdo_query($sql);
     return $list_taikhoan;
  }

  // xóa tài khoản
  function delete_taikhoan($id_tai_khoan){
    $sql = "delete from taikhoan where id_tai_khoan=".$id_tai_khoan;
    pdo_execute($sql);
  }
  // cập nhật tài khoản

  function  updte_taikhoan($id_tai_khoan,$ten_tk,$email,$pass,$sdt){
        $sql= "update taikhoan set ten_tk='".$ten_tk."', email='".$email."', pass='".$pass."',  sdt='".$sdt."' where id_tai_khoan=".$id_tai_khoan;
        pdo_execute($sql);
  }
  // load 1 cái tài khoản
  function loadone_taikhoan($id_tai_khoan){
     $sql =  "select * from taikhoan where id_tai_khoan=".$id_tai_khoan;
    $tk = pdo_query_one($sql);
    return $tk;
  }
  
?>
