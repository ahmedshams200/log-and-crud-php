<?php


include "db_connection.php";


$id=$_GET['id'];

$sql = "DELETE FROM `crud` WHERE id=$id " ;
$result=mysqli_query($conn,$sql);

?>