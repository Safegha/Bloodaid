<?php
require 'db.php';

if (isset($_POST['submit'])){
      $fullname = $_POST['recipient_fullname'];
    $gender =$_POST['recipient_gender'];
    $password = $_POST['recipient_password'];
$bloodtype=$_POST['recipient_bloodtype'];
      $email = $_POST['recipient_email'];
      $contact =$_POST['recipient_contact'];
      $date_of_birth=$_POST['date_of_birth'];

       $id = $fullname.'+123';


$sql="INSERT INTO recipient(Recipient_id, Recipient_fullname, Recipient_gender,Recipient_pwd,Recipient_bloodtype, Recipient_email ,Recipient_contact,Date_of_birth)VALUES('$id', '$fullname', '$gender', '$password','$bloodtype', '$email' ,'$contact','$date_of_birth')";

if($conn->query($sql)===TRUE){
    echo"successesssssssss!";
}else{
    echo"failed: " . $conn->error;
}
$conn->close();
}else{
    echo"not!";
}
?>


