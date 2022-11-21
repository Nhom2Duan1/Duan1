<?php
 
 
function add__intro($title,$image,$content){
        $sql="insert into introduce (title,image,content) VALUES ('$title','$image','$content')";
        pdo_execute($sql);


} 
function loadall_intro(){
        $sql="select *from introduce ";
        $listintro=pdo_query($sql);
        return $listintro;

}
function load2_intro(){
        $sql="select *from introduce order by id_intro desc limit 2";
        $listintro=pdo_query($sql);
        return $listintro;

}
function one_intro($id_intro){
        $sql="select * from introduce where id_intro=".$id_intro;
        $intro=pdo_query_one($sql);
        return $intro;
}
function delete_intro($id_intro){
        $sql="delete from introduce where id_intro=".$_GET['id_intro'];
        pdo_execute($sql);

}
function update_intro($id_intro,$title,$image,$content){
  if($image!=""){
        $sql="update introduce set title='$title', image='$image',content='$content' where id_intro=".$id_intro;
  }else{
        $sql="update introduce set title='$title',content='$content' where id_intro=".$id_intro;
  }
  pdo_execute($sql);
}

?>