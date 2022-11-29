<?php
function listall_lh(){
$sql = "select * from lien_he  " ;
$list_lh = pdo_query($sql) ;
return $list_lh ;
}
function insert_lienhe($ten_khach, $email, $sdt, $muc_dich, $noi_dung){
    $sql = "insert into lien_he (ten_khach, email, sdt, muc_dich, noi_dung) VALUES ( '$ten_khach', '$email', '$sdt', '$muc_dich', '$noi_dung')";
    pdo_execute($sql);
}
?>




