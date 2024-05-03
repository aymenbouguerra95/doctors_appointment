<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctor_appointment_db";
#$conn= new mysqli('localhost','root','','doctors_appointment_db')or die("Could not connect to mysql".mysqli_error($con));
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>