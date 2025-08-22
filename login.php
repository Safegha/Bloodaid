<?php
session_start();
require 'db.php';
if (isset($_POST['login'])) {

$email=$_POST['email'];
$password=$_POST['password'];


 $sql= "SELECT Recipient_id,Recipient_fullname,Recipient_pwd 
 FROM recipient WHERE Recipient_email='$email' AND Recipient_pwd='$password'";
$result =$conn->query($sql);

 if ($result && $result->num_rows==1){
    $row = $result->fetch_assoc();


$_SESSION['user_id'] =$row['Recipient_id'];
            $_SESSION['user_name'] =$row['Recipient_fullname'];
   $_SESSION['redirect_to'] = 'login.php';
    header("Location: request.php");
    exit();
}else{
      echo "invalid";

 }

    

        $sql2= "SELECT Donor_id,Donor_fullname,Donor_pwd 
 FROM donor WHERE Donor_email='$email' AND Donor_pwd='$password'";
$result2 =$conn->query($sql2);

if ($result2 && $result2->num_rows==1){
    $row2= $result2->fetch_assoc();


$_SESSION['user_id'] =$row2['Donor_id'];
            $_SESSION['user_name'] =$row['Donor_fullname'];
   $_SESSION['redirect_to'] = 'login.php';
    header("Location: appointment.php");
    exit();
}else{
      echo "wrong";

 } 
 
    }





/*




error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();
require 'db.php';

// Only run login code if form submitted
if (isset($_POST['login'])) {
$email =$_POST['email'];
        $password=$_POST['password'];


    $sql= "SELECT Recipient_id,Recipient_fullname,Recipient_pwd FROM recipient WHERE Recipient_email='$email' AND Recipient_pwd='$password'";
$result =$conn->query($sql);

 if ($result && $result->num_rows==1){
    $row = $result->fetch_assoc();


$_SESSION['user_id'] =$row['Recipient_id'];
            $_SESSION['user_name'] =$row['Recipient_fullname'];

        
        header("Location: request.php");
        exit();
     }else {
        $error = "Invalid username or password";
    }
}
*/

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="bloodlogin.css">
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2 style="color: black;">Welcome Back</h2>
            <p class="subtitle">Please sign in to your account</p>
            
            <form class="form" action="login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                
                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </div>
                
                <button type="submit" class="login-btn" name="login">login</button>
            </form>
             
            <div class="signup-link">
                
                <p>Don't have an account? <a href="#">Sign up</a></p>

            </div>
        </div>
    </div>
</body>
</html>
