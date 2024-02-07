<?php
require_once("connection.php");

$username=$_GET['username'];


$query = "DELETE FROM `students` WHERE `students`.`username` = '$username';";;

if (mysqli_query($conn, $query)) {
    header('location:sign-up.php');
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

