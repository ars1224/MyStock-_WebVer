<?php

$sname="localhost";
$User = "root";
$Pass="";
$db_name = "stock";

$conn = mysqli_connect($sname, $User, $Pass, $db_name);

if($conn->connect_error){
    echo "Connection error";
}