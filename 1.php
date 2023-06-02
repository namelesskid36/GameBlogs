<?php
$host="localhost";
$port="3307";
$username="root";
$password="";
$database="Shivapuri";
$connection=mysqli_connect($host.":".$port,$username,$password,$database);
if(!$connection){
    echo "Not connected";
    die();
}

$qry="Select* FROM student;";
$res=mysqli_query($connection,$qry);
if(mysqli_num_rows($res)>0){
    while($data=mysqli_fetch_assoc($res)){
        echo "<p>Name: ".$data["name"]."<p>";
        echo "<p>Roll: ".$data["roll"]."<p>";
        echo "<p>Class: ".$data["class"]."<p>";
        echo "<p>Address: ".$data["address"]."<p>";
        echo "<p>Section: ".$data["section"]."<p>";
        echo "<p>Gender: ".$data["gender"]."<p>";
        echo "<p>Phone_Number: ".$data["phone_number"]."<p>";
        echo "<p>Email: ".$data["email"]."<p>";
        echo "<p>DOB: ".$data["DOB"]."<p>";

    }
}
?>