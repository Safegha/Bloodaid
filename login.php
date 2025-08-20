
<?php
session_start();
require 'db.php';

if(isset($_POST['login'])){
header("location: login.php");
exit();
}
$message ="";
if(isset($_POST['login'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
  

$sql= "SELECT Recipient_id,Recipient_fullname,Recipient_password FROM recipient WHERE Recipient_email='$email' AND Recipient_password='$password'";
$result =$conn->query($sql);

 if ($result->num_rows==1){
    $row = $result->fetch_assoc();

$SESSION['user_id'] =$row['Recipient_id'];
            $SESSION['user_name'] =$row['Recipient_fullname'];

            header("location: requset.php");
            exit();
            }else{
                $message="invalid email of password";
            }
        }
    
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
            
            <form class="form" action="" method="POST">
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
                
                <button type="submit" class="login-btn" name="login">Sign In</button>
            </form>
            
            <div class="signup-link">
                <p>Don't have an account? <a href="#">Sign up</a></p>
            </div>
        </div>
    </div>
</body>
</html>
