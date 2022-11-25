<?php
function listall_dm(){
    $sql = "select * from loai_ban";
$list_dm = pdo_query($sql);
return $list_dm ;
}


function insert_dm($ten_danh_muc,$so_luong){
    $sql = "insert into loai_ban (ten_danh_muc,so_luong) VALUES ( '$ten_danh_muc', '$so_luong')";
    pdo_execute($sql);
}
// function delete_dm(){

// }
// ?>