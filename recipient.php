<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> Recipient </title>
 
</head>
<link rel="stylesheet" href="recipient.css">
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
<h2>Medical Blood Recipient Consent Form</h2>
  <form action="recipientinsert.php" method="POST">
    <label for="recipient_fullname">Full Name</label>
    <input type="text" id="recipient_fullname" name="recipient_fullname" required>

    <label for="recipient_gender">Gender</label>
    <select id="recipient_gender" name="recipient_gender" required>
      <option value="">--Select--</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>

    <label for="recipient_pwd">Password</label>
    <input type="password" id="recipient_pwd" name="recipient_password" required>

    <label for="recipient_bloodtype">Blood Type</label>
    <select id="recipient_bloodtype" name="recipient_bloodtype" required>
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

    <label for="recipient_email">Email</label>
    <input type="email" id="recipient_email" name="recipient_email" required>

    <label for="recipient_contact">Contact Number</label>
    <input type="tel" id="recipient_contact" name="recipient_contact" required>

    <label for="date_of_birth">Date of Birth</label>
    <input type="date" id="date_of_birth" name="date_of_birth" required>

    <button type="submit" name="submit">Register</button>
  </form>

  <!-- FOOTER -->
   <footer>
         <div class="copy_right">
        <p> &copy copyright,2025;<span class="logo1">BLOOD</span> <SPAN class="logo2">AID</span></span>.</p>
         </div>
    </footer>


   

</body>
</html>
