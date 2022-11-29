<?php
//Thêm danh mục
function insert_menuList($ten_danh_muc_mon,$anh_danh_muc_mon){
  $sql = "insert into danh_muc_mon(id_danh_muc_mon,ten_danh_muc_mon,anh_danh_muc_mon) values(NULL,'$ten_danh_muc_mon','$anh_danh_muc_mon')";
  pdo_execute($sql);
}
//Load all danh mục món
function loadAll_listmenu(){
  $sql = "select * from danh_muc_mon";
  $listmenu = pdo_query($sql);
  return $listmenu;
  }
//Xóa danh mục món
function delete_cateMenuList($id_danh_muc_mon){
  $sql = "delete from danh_muc_mon where id_danh_muc_mon=".$id_danh_muc_mon;
  pdo_execute($sql);
}
//Sửa danh mục món
function fix_catemenu($id_danh_muc_mon){
  $sql = "select * from danh_muc_mon where id_danh_muc_mon=".$id_danh_muc_mon;
  $catemenu = pdo_query_one($sql);
  return $catemenu;
}
//CẬP NHẬT DANH MỤC MÓN
function update_cate($ten_danh_muc_mon,$anh_danh_muc_mon, $id_danh_muc_mon){
  if($anh_danh_muc_mon!= ""){
    $sql = "update danh_muc_mon set ten_danh_muc_mon='".$ten_danh_muc_mon."',anh_danh_muc_mon = '".$anh_danh_muc_mon."'where id_danh_muc_mon=".$id_danh_muc_mon;
  }
  else{
    $sql = "update danh_muc_mon set ten_danh_muc_mon='".$ten_danh_muc_mon."'where id_danh_muc_mon=".$id_danh_muc_mon;
  }
  pdo_execute($sql);
}
?>