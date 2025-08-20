<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "bloodaid";

 $conn=mysqli_connect("localhost","root","", "bloodaid");
    if(!$conn){
        die("connection failed: " . mysqli_connect_error());
    }
  
?>