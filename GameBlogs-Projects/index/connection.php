<?php

$host="localhost";
$port="3306";
$username="root";
$password="";
$database="gamehub";
$conn= mysqli_connect($host.":".$port,$username,$password,$database);
if (!$conn){
    echo "Not Connected";
    die();
}
    ?>