<?php
include "../connect.php";
$name=isset($_GET['name'])? $_GET['name']:0;
$type_id=isset($_GET['type_id'])? $_GET['type_id']:'';
$age=isset($_GET['age'])? $_GET['age']:0;
$weight=isset($_GET['weight'])? $_GET['weight']:0;
$img=isset($_GET['img'])? $_GET['img']:'';

$sql_tao_moi="INSERT INTO pets(name,type_id,age,weight,img) VALUES('$name','$type_id','$age','$weight','$img')";
$statement=$connect->prepare($sql_tao_moi);
$statement->execute();

header("location:list_pet.php?thong_bao=$message");
?>