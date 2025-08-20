<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="donor.css">
<body>
     <header>
        <div class="Welcome">
            <p>Welcome to our Bloodaid site</p>
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
        <a href="bloodlogin.html">login</a>

    </div>
</nav>
    
 
  <!-- FORM TITLE -->
  <h2>Medical Blood Donor Consent Form</h2>

  <!-- FORM START -->
  <form action="donorinsert.php" method="POST">

    <label for="Donor">Full Name</label>
    <input type="text" name="fullname" required="">

    <label>Gender</label>
    <select name="gender" required="">
      <option value="">--Select--</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>

    <label>Password</label>
    <input type="password" name="password" required="">

    <label>Blood Type</label>
    <select name="bloodtype" required="">
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

    <label>Email</label>
    <input type="email" name="email" required="">

    <label>Contact Number</label>
    <input type="tel" name="contact" required="">

    <label>Date of Birth</label>
    <input type="date" name="date_of_birth" required="">

    <button type="submit" name="submit">Register</button>
  </form>
<footer>
         <div class="copy_right">
        <p> &copy copyright,2025;<span class="logo1">BLOOD</span> <SPAN class="logo2">AID</span></span>.</p>
         </div>
    </footer>

</body>
</html>