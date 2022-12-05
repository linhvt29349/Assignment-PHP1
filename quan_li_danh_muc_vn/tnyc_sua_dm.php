<?php
include "../connect.php";
$id_chinh_sua=isset($_POST['id'])?$_POST['id']:0;
$ten_chinh_sua=isset($_POST['name'])?$_POST['name']:'';

$sql="UPDATE types SET name='$ten_chinh_sua' WHERE id='$id_chinh_sua'";
$statement=$connect->prepare($sql);
$statement->execute();

header ('location:list_category.php');


?>