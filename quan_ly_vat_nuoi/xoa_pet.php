<?php
// nhận giá trị id của bản ghi muốn xóa bằng $_GET
include "../connect.php";
$id_bi_xoa=isset($_GET['id'])?$_GET['id']:0;

$sql_xoa="DELETE FROM pets WHERE id=$id_bi_xoa";
$statement=$connect->prepare($sql_xoa);

$message='';
if($statement->execute()){
    $message="Xóa thành công!";
}else{
    $message="Lỗi!";
}
header("location:list_pet.php?thong_bao=$message");
?>
