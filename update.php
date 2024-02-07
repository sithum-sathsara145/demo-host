<?php

include('connection.php');
include('auth_session.php');

  $username = $_SESSION['username'];
  //escapes special characters in a string
  $username = mysqli_real_escape_string($conn, $username);
  $firstname    = $_REQUEST['firstname'];
  $lastname    = $_REQUEST['lastname'];
  $email    = $_REQUEST['email'];
  $email    = mysqli_real_escape_string($conn, $email);
  $password = $_REQUEST['password'];
  $password = mysqli_real_escape_string($conn, $password);
  $query="Update `students` SET  `firstname`='$firstname', `lastname`='$lastname', `password`='" . md5($password) . "',`email`='$email' Where `username` = '$username';";

$result = mysqli_query($conn, $query);
if ($result){
    header('location: dashboard.php ' );
}
