<?php
include "../connect.php";
$id=isset($_GET['id'])?$_GET['id']:0;

$sql_xoa="DELETE FROM types WHERE id=$id";
$statement=$connect->prepare($sql_xoa);

$message='';
if($statement->execute()){
    $message="Xóa thành công danh mục!";
}else{
    $message="Xóa không thành công danh mục!";
}
header ("location:list_category.php?thong_bao=$message");
?>