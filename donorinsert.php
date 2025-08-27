<?php
require 'db.php';

if (isset($_POST['submit'])){
   
    $fullname = $_POST['fullname'];
    $gender =$_POST['gender'];
    $password = $_POST['password'];
$bloodtype=$_POST['bloodtype'];
      $email = $_POST['email'];
      $contact =$_POST['contact'];
      $date_of_birth=$_POST['date_of_birth'];

       $id = $fullname.'+125';


$sql="INSERT INTO Donor(Donor_id, Donor_fullname, Donor_gender,Donor_pwd,Donor_bloodtype, Donor_email ,Donor_contact,Date_of_birth)VALUES('$id', '$fullname', '$gender', '$password','$bloodtype', '$email' ,'$contact','$date_of_birth')";

if($conn->query($sql)===TRUE){
    echo"REGISTRATION WAS SUCCESSFUL";
}else{
    echo"failed: " . $conn->error;
}
$conn->close();
}
?>


