<?php

$host="localhost";
$user="root";
$pass="root";
$db="web";
$conn=new mysqli($host,$user,$pass,$db,3307);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>