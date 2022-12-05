<?php
include "../connect.php";
$name=isset($_GET['name'])? $_GET['name']:0;

$sql_tao_moi="INSERT INTO types(name) VALUES('$name')";
$statement=$connect->prepare($sql_tao_moi);
$statement->execute();

header("location:list_category.php");
?>