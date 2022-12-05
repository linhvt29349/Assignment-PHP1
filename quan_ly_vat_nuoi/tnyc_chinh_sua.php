<?php
include "../connect.php";
$id=isset($_POST['id'])?$_POST['id']:0;
$name=isset($_POST['name'])?$_POST['name']:'';
$type=isset($_POST['type_id'])?$_POST['type_id']:'';
$age=isset($_POST['age'])?$_POST['age']:'';
$weight=isset($_POST['weight'])?$_POST['weight']:'';
$img=isset($_POST['img'])?$_POST['img']:'';


$update="UPDATE pets SET name='$name', weight='$weight', age='$age', img='$img', type_id='$type' WHERE id=$id";
$statement=$connect->prepare($update);
$statement->execute();


// sau khi thực thi thì không cần nhận kết quả
// kết quả nhận ở danh sách mới
header ('location:list_pet.php');

?>