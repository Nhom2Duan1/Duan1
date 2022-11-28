<?php
//Thêm món ăn
function insert_addmenu($anh_mon,$ten_mon,$gia_mon,$danh_gia_mon,$mo_ta_mon_an,$menu_list){
  $sql = "insert into mon_an(id_mon,anh_mon,ten_mon,gia_mon,danh_gia_mon,mo_ta_mon_an,menu_list) values(NULL,'$anh_mon','$ten_mon','$gia_mon','$danh_gia_mon','$mo_ta_mon_an','$menu_list')";
  pdo_execute($sql);
}
//load all món ăn
function loadAll_menu(){
  $sql = "select * from mon_an";
  $all_menu = pdo_query($sql);
  return $all_menu;
  }
//Xóa món ăn
function delete_menu($id_mon){
  $sql = "delete from mon_an where id_mon=".$id_mon;
  pdo_execute($sql);
}
//Load one món ăn
function fix_menu($id_mon){
  $sql = "select * from mon_an where id_mon=".$id_mon;
  $fixmenu = pdo_query_one($sql);
  return $fixmenu;
}
//CẬP NHẬT MÓN ĂN
function update_menu($anh_mon,$ten_mon,$gia_mon,$danh_gia_mon,$mo_ta_mon_an,$menu_list,$id_mon){
  if($anh_mon!= ""){
    $sql = "update mon_an set anh_mon='".$anh_mon."',ten_mon = '".$ten_mon."',gia_mon = '".$gia_mon."',danh_gia_mon = '".$danh_gia_mon."',mo_ta_mon_an = '".$mo_ta_mon_an."',menu_list = '".$menu_list."'where id_mon=".$id_mon;
  }
  else{
    $sql = "update mon_an set ten_mon = '".$ten_mon."',gia_mon = '".$gia_mon."',danh_gia_mon = '".$danh_gia_mon."',mo_ta_mon_an = '".$mo_ta_mon_an."',menu_list = '".$menu_list."'where id_mon=".$id_mon;
  }
  pdo_execute($sql);
}
//LOAD MÓN ĂN THEO DANH MỤC
function loadAll_liscate_menu($menu_list=0){
  $sql = "select * from mon_an where 1"; 
  if($menu_list>0){
      $sql.=" and menu_list='".$menu_list."'";
  }
  $listmenu_cate = pdo_query($sql);
  return $listmenu_cate;
}
?>