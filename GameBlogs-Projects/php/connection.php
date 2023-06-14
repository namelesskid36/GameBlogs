<?php

$host="localhost";
$port="3309";
$username="root";
$password="";
$database="loginpage";
$conn= mysqli_connect($host.":".$port,$username,$password,$database);
if (!$conn){
    echo "Not Connected";
    die();
}
    ?>