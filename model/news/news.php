<?php
 
 
function add_news($title,$image,$summary,$content,$date){
        $sql="insert into tintuc (title,image,summary,content,date) VALUES ('$title','$image','$summary','$content','$date')";
        pdo_execute($sql);


} 
function loadall_news(){
        $sql="select *from tintuc ";

        $listslide=pdo_query($sql);
        return $listslide;

}
function load4_news(){
        $sql="select *from tintuc order by id_tintuc desc limit 4";

        $listslide=pdo_query($sql);
        return $listslide;

}
function one_news($id_tintuc){
        $sql="select * from tintuc where id_tintuc=".$id_tintuc;
        $news=pdo_query_one($sql);
        return $news;
}
function delete_news($id_tintuc){
        $sql="delete from tintuc where id_tintuc =".$_GET['id_tintuc'];
        pdo_execute($sql);

}
function update_news($id_tintuc,$title,$image,$summary,$content,$date){
  if($image!=""){
        $sql="update tintuc set title='$title', image='$image', summary='$summary',content='$content',date='$date' where id_tintuc=".$id_tintuc;
  }else{
        $sql="update tintuc set title='$title', summary='$summary',content='$content',date='$date' where id_tintuc=".$id_tintuc;
  }
  pdo_execute($sql);
}

?>