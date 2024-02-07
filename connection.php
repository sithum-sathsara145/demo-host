<?php 
$conn = mysqli_connect("localhost","root","","lms");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "<script>console.log('connected successfully')</script>";
  ?>