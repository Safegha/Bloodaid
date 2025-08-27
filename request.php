<?php



session_start();
require 'db.php';
if (!isset($_SESSION['user_id'])) {
  echo "<script>alert('Please kindly register and log in first before you can access this page.');</script>";
  
  exit();
}



if(isset($_POST['submit'])){
    $recipient_id=$_SESSION['user_id'];
    $blood_type=$_POST['blood_type'];
    $request_date=$_POST['request_date'];
    $quantity=$_POST['quantity'];

$sql= "INSERT INTO bloodrequest(Recipient_id,Bloodrequest_bloodtype,Request_date,quantity) VALUES('$recipient_id','$blood_type','$request_date','$quantity')";


   

    if (mysqli_query($conn, $sql)) {
        echo "Request submitted successfully!";
    } else {
        $error = "Error submitting request!";
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request</title>
</head>
<link rel="stylesheet" href="request.css">
<body>
     <header>
        <div class="Welcome">
            <p style="color: white;">Welcome to our Bloodaid site</p>
        </div>
<!--navbar-->
<nav>
    <div class="navbar">
         <img src="images/logo2.png" alt="" class="logo-image" width="50" height="50">

    <a href="#"><span class="logo1">BLOOD</span> <SPAN class="logo2">AID</SPAN></a>
    
    
    <ul class="nav-links">
        <li class="nav_list"><a href="home.php">Home</a></li><br>
        <li class="nav_list "><a href="about.php">About us</a></li><br>
        <li class="nav_list "><a href="request.php">Request blood</a></li><br>
                <li class="nav_list "><a href="logout.php">logout</a></li><br>


    <div class="register-dropdown">
    <button class="register-btn">Register Now &#9662;</button>
    <div class="register-dropdown-content">
        <a href="donor.php"> Donor</a>           
        <a href="recipient.php">Recipient</a>
    </div>
</div>
   
    
    <div class="login">
        <a href="login.php">login</a>
    

    </div>
    </div>
    </ul>
</nav>


    <h1 class="myheading">Blood Request</h1> 

    <div class="Request">
    
    <form action="request.php" method="POST" class="form_request" id="bloodForm">
        <p style="font-size: large;">please fill the following information</p>
  <label for="quantity">quantity</label>

    <input type="text" name="quantity" id="quantity"><br><br>
          <span id="quantityError" class="error"></span>

    <label for="">request date</label>
    <input type="date" name="request_date"  id="request_date"><br><br>
          <span id="request_dateError" class="error"></span>

    <label for="blood group">blood group</label>
    <select name="blood_type" id="bloodGroupe">
        <option value="A">A+</option>
         <option value="A">A-</option>
          <option value="B">B+</option>
           <option value="B">B-</option>
            <option value="AB">AB+</option>
             <option value="AB">AB-</option>
              <option value="O">O+</option>
               <option value="O">O-</option>
    </select><br><br>
       <span id="bloodGroupError" class="error"></span>

   
    <button class="submit" name="submit">submit</button>
    

</div>
    </form>

<footer>
         <div class="copy_right">
        <p> &copy copyright,2025;<span class="logo1">BLOOD</span> <SPAN class="logo2">AID</span></span>.</p>
         </div>
    </footer>
   
<script>
           

    const form = document.getElementById('bloodForm');

form.addEventListener('submit', (e) => {
    let isValid = true;

    // Check full name
    const quantity = document.getElementById('quantity');
    const quantityError = document.getElementById('quantityError');
    if (!Fullname.value.trim()) {
        FullnameError.innerHTML = 'quantity is required.';
        isValid = false;
    } else {
        quantityError.innerHTML = '';
    }

   

    // Check email
    const request_date = document.getElementById('request_date');
    const request_dateError = document.getElementById('request_dateError');
    if (!email.value.trim()) {
        emailError.innerHTML = 'request_date is required.';
        isValid = false;
    } else {
        request_dateError.innerHTML = '';
 

    // Check blood group
    const bloodGroup = document.getElementById('bloodGroup');
    const bloodGroupError = document.getElementById('bloodGroupError');
    if (!bloodGroup.value) {
        bloodGroupError.innerHTML = 'Blood group is required.';
        isValid = false;
    } else {
        bloodGroupError.innerHTML = '';
    }
    }
    
})




</script>


</body>
</html>