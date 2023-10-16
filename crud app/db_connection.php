<?php
$host="localhost"; 
$username="root";
$password="";
$dbname="crud-db";

$conn=new mysqli($host,$username,$password,$dbname);

if(!$conn){
    die("connection failed".mysqli_connect_error());
}
echo "";