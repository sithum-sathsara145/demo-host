<?php
//include auth_session.php file on all user panel pages
include("connection.php");
include("auth_session.php");
$username =  $_SESSION["username"];
$query    = "SELECT * FROM `students` WHERE username='$username'";
$result = mysqli_query($conn, $query) ;
$row = mysqli_fetch_array($result);
[$username,$firstname,$lastname,$email,$password] = $row;

?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles.css" />
    <script
      src="https://kit.fontawesome.com/d2e7f822a5.js"
      crossorigin="anonymous"
    ></script>
    <title>Courses - Enroll campus</title>
  </head>
  <body>
    <!--// Header \\-->
    <?php 
     include("header.php");
    ?>
    <!--// Header \\-->

    <!--// Mini Header \\-->
    <div class="wm-mini-header">
      <span class="wm-blue-transparent"></span>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="wm-mini-title">
              <h1>Student Dashboard</h1>
            </div>
            <div class="wm-breadcrumb">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Student Dashboard</a></li>
                <li>Settings</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--// Mini Header \\-->
    <main>
      <div class="fancy-title">
        <h2>My <span>Profile</span></h2>
      </div>
      <!-- //dashboard \\ -->
      <div class="dashboard-form">
        <form action="update.php" method="post">
          <div class="grid-container">
            <div class="grid-row">
              <label for="firstname">
                <i class="fa-solid fa-user"></i> First Name
              </label>
              <input type="text" name="firstname" id="firstname" <?= "value ='$firstname'" ?> required />
            </div>
            <div class="grid-row">
              <label for="lastname">
                <i class="fa-solid fa-user"></i> last Name
              </label>
              <input type="text" name="lastname" id="lastname" <?= "value ='$lastname'" ?> required />
            </div>
            <div class="grid-row">
              <label for="username">
                <i class="fa-solid fa-user"></i> User Name
              </label>
              <input type="text" name="username" id="username" <?= "value ='$username'" ?> required disabled />
            </div>
            <div class="grid-row">
              <label for="email">
                <i class="fa-solid fa-user"></i> E-mail
              </label>
              <input type="email" name="email" id="email" <?= "value ='$email'" ?> required />
            </div>
            <div class="grid-row">
              <label for="password">
                <i class="fa-solid fa-lock"></i> Password
              </label>
              <input type="password" name="password" id="password"  />
            </div>
            <div class="grid-row">
              <label for="confirmpassword">
                <i class="fa-solid fa-lock"></i> confirm password
              </label>
              <input
                type="password"
                name="confirmpassword"
                id="confirmpassword"
              />
            </div>
            <div class="dashboard-btns">
              <input type="submit" value="Update" class="login-btn" />
              <button class="login-btn">
                <a
                  href="delete.php?username=<?=$username?>"
                  style="text-decoration: none; color: #fff">
                  Delete
                </a>
              </button>
              <button class="login-btn">
                <a
                  href="logout.php"
                  style="text-decoration: none; color: #fff"
                >
                  logout
                </a>
              </button>
            </div>
          </div>
        </form>
      </div>
      <!-- //dashboard\\ -->
    </main>
  </body>
</html>
