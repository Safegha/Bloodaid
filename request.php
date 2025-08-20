
<?php
session_start();
require 'db.php';

if(isset($_POST['submit'])){
header("location: login.php");
exit();
}
$message ="";
if(isset($_POST['submit'])){
    $recipient_id=$_SESSION['user_id'];
    $blood_type=$_POST['blood_type'];
    $request_date=$_POST['request_date'];
  $id = $recipient_id.'+123';

$sql= "INSERT INTO bloodrequest(Bloodrequest_id,Request_id,Bloodrequest_bloodtype,Request_date	) VALUES(''$id',$recipient_id','$blood_type','$request_date')";

 if ($conn->query($sql)===TRUE){
    echo"success!";
}else{
    echo"failed: " . $conn->error;
}
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="request.css">
<body>
     <header>
        <div class="Welcome">
            <p style="color: white;">Welcome to our Bloodaid site</p>
        </div>
<!--navbar-->
<nav>
             <img src="c:\Users\PC\Downloads\logo2.png" alt="" class="logo-image" width="50" height="50">

    <a href="#"><span class="logo1">BLOOD</span> <SPAN class="logo2">AID</SPAN></a>
    
    
    <ul>
        <li class="nav_list"><a href="home.html">Home</a></li><br>
        <li class="nav_list "><a href="about.html">About us</a></li><br>
        <li class="nav_list "><a href="request.html">Request blood</a></li><br>
       
    </ul>

    <div class="register-dropdown">
    <button class="register-btn">Register Now &#9662;</button>
    <div class="register-dropdown-content">
        <a href="donor.html"> Donor</a>           
        <a href="recipient.html">Recipient</a>
    </div>
</div>
   
    
    <div class="login">
        <a href="login.html">login</a>

    </div>
</nav>

    <h1 class="myheading">Blood Request</h1> 
    <div class="Request">
    
    <form action="" method="POST" class="form_request" id="bloodForm">
        <p style="font-size: large;">please fill the following information</p>
        <label for="Fullname">Fullname</label><br>
        <input type="Fullname" id="Fullname" name="Fullname" placeholder="Fullname"><br>
    <label for="location">location</label><br>
    <input type="location" id="location" name="location" placeholder="location"><br>
<label for="email">Email</label><br>
    <input type="email" id="email" name="email" placeholder="email"><br>

<label for="phone number">phone number</label><br>
    <input type="phone number" id="phone number" name="phone number" placeholder="phone number"><br>

    <label for="blood group">blood group</label><br>
    <select name="blood_type" id="">
        <option value="A">A+</option>
         <option value="A">A-</option>
          <option value="B">B+</option>
           <option value="B">B-</option>
            <option value="AB">AB+</option>
             <option value="AB">AB-</option>
              <option value="O">O+</option>
               <option value="O">O-</option>
    </select><br>
    <label for="Gender">Gender</label><br>
      
        <label for="male">Male</label>
        <input type="radio" name="male" id="male">
        <label for="female">female</label>
        <input type="radio" name="female" id="female">
    <label for="">request date</label>
    <input type="date" name="request_date">
    <button class="submit" name="submit">submit</button>

</div>
    </form>
<footer>
         <div class="copy_right">
        <p> &copy copyright,2025;<span class="logo1">BLOOD</span> <SPAN class="logo2">AID</span></span>.</p>
         </div>
    </footer>
   <?php
   if($message!= "") echo "<p>$message</p>";
   ?>

<!----    
</form>

     <form action="" method="post">

    <label for="Fullname">Full Name</label>
    <input type="text" name="Fullname" required="">
    <label for="Location">Location</label>
    <input type="text" name="Location" required="">

    

    <label>Password</label>
    <input type="password" name="recipient_pwd" required="">

    <label>Blood Type</label>
    <select name="recipient_bloodtype" required="">
      <option value="">--Select--</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select>
    <label>Gender</label>
    <select name="recipient_gender" required="">
      <option value="">--Select--</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>

    <label>Email</label>
    <input type="email" name="recipient_email" required="">

    <label>Contact Number</label>
    <input type="tel" name="recipient_contact" required="">

    <label>Date of Birth</label>
    <input type="date" name="date_of_birth" required="">

    <button type="submit">submit request</button>
  </form>
    </div>
-->
</body>
</html>