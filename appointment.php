
<?php
session_start();
require 'db.php';




if(isset($_POST['submit'])){
    $donor_id=$_SESSION['user_id'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $location=$_POST['location'];
        $phone_number=$_POST['phone_number'];


$sql= "INSERT INTO appointment(Donor_id,Prefferred_Time,Prefferred_Date,Location,phone_number	) VALUES('$donor_id','$time','$date','$location','$phone_number')";


   

    if (mysqli_query($conn, $sql)) {
        echo "appointment submitted successfully!";
    } else {
        echo "Error submitting request!" . $conn->error;
    }
}else {
    echo "failed";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment</title>
</head>
<link rel="stylesheet" href="appointment.css">
  <body>
  <div class="container">
    <h2>Book Your Appointment Here</h2>
    <form action="appointment.php" method="POST">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" required="">

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required="">

      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone_number" required="">

      <label for="service">Select Service</label>
      <select id="service" name="service" required="">
        <option value="">-- Choose a Service --</option>
        <option value="Blood Donor">Blood Donor</option>
        <option value="Blood Receiver">Blood Receiver</option>
      </select>

      <label for="date">Preferred Date</label>
      <input type="date" id="date" name="date" required="">

      <label for="time">Preferred Time</label>
      <input type="time" id="time" name="time" required="">

      <label for="Location">Location</label>
      <select id="Location" name="location" required="">
      <option value="">-- Choose a Location --</option>
        <option value="Douala">Douala</option>
        <option value="Yaounde">Yaounde</option>
        <option value="Bafoussam">Bafoussam</option>
      </select>
      <label for="notes">Additional Notes</label>
      <textarea id="notes" name="notes" rows="4" placeholder="Any special requests or info..."></textarea>

      <button type="submit" name="submit">Submit Appointment</button>
    </form>
  </div>


</body>
</html>