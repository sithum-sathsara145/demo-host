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
    <title>Sign Up</title>
  </head>
  <body>


<?php

include('connection.php');
if (isset($_REQUEST['username'])) {
  // removes backslashes
  $username = $_REQUEST['username'];
  //escapes special characters in a string
  // $username = mysqli_real_escape_string($conn, $username);
  $firstname    = $_REQUEST['firstname'];
  $lastname    = $_REQUEST['lastname'];
  $email    = $_REQUEST['email'];
  $email    = mysqli_real_escape_string($conn, $email);
  $password = $_REQUEST['password'];
  $password = mysqli_real_escape_string($conn, $password);
  $confirm = $_REQUEST["confirmpassword"];
  $query    = "INSERT into `students` (`username` ,`firstname`,`lastname`,`email`,`password`)
               VALUES ('$username','$firstname','$lastname','$email', '" . md5($password) . "')";

  
  try{
    if($confirm == $password){
    $result   = mysqli_query($conn, $query);
  }else{
    throw new Exception('passwords did not match');
    
  }
    if ($result) {
      ?>
      <div class="login-bg">
            <div class="login-container">
              <form action="" method="post">
                <div class="login-content">
                  <div class="login-text">
                    <div class="fancy-title">
                      <h2>Log <span>In</span></h2>
                    </div>
                    <p>Welcome Back!</p>
                  </div>
                  <?php
                  echo "<h3>You have successfully registered.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>";
          ?>
                </div>
                <div class="login-image">
                  <img src="./images/banner-view1-3.jpg" alt="" />
                </div>
              </form>
            </div>
          </div>
          <?php
  }}
  catch(Exception $e){
    echo "<script>console.log('$e')</script>"
    ?>
    <div class="login-bg">
      <div class="login-container signup-container">
        <form action="sign-up.php" method="post" >
          <div class="signup-content">
            <div class="login-text">
              <div class="fancy-title">
                <h2>Sign <span>Up</span></h2>
            </div>
              <?php
              echo "<h3>Required fields are missing.</h3><br/>
              <p class='link'>Click here to <a href='sign-up.php'>Sign up</a> again.</p>";
              ?>
          </div>
  </div>
          <div class="signup-image">
            <img src="./images/banner-view1-3.jpg" alt="" />
          </div>

        </form>
      </div>
    </div>
    <?php
}
  } else {




?>

    <div class="login-bg">
      <div class="login-container signup-container">
        <form action="" method="post" >
          <div class="signup-content">
            <div class="login-text">
              <div class="fancy-title">
                <h2>Sign <span>Up</span></h2>
              </div>
              <p>Welcome!</p>
            </div>
            <div class="login-fields-container signup-fields-container">
              <div class="signup-names">
                <div class="login-fields signup-name-fields">
                  <label for="firstname">
                    <i class="fa-solid fa-user"></i> First Name
                  </label>
                  <input type="text" name="firstname" id="firstname" required />
                </div>
                <div class="login-fields signup-name-fields">
                  <label for="lastname">
                    <i class="fa-solid fa-user"></i> last Name
                  </label>
                  <input type="text" name="lastname" id="lastname" required />
                </div>
              </div>
              <div class="login-fields">
                <label for="username">
                  <i class="fa-solid fa-user"></i> User Name
                </label>
                <input type="text" name="username" id="username" required />
              </div>
              <div class="login-fields">
                <label for="email">
                  <i class="fa-solid fa-user"></i> E-mail
                </label>
                <input type="email" name="email" id="email" required />
              </div>
              <div class="signup-names">
                <div class="login-fields signup-name-fields">
                    <label for="password">
                        <i class="fa-solid fa-lock"></i> Password
                      </label>
                      <input type="password" name="password" id="password" required />
                </div>
                <div class="login-fields signup-name-fields">
                    <label for="confirmpassword">
                        <i class="fa-solid fa-lock"></i> confirm password
                      </label>
                      <input
                        type="password"
                        name="confirmpassword"
                        id="confirmpassword"
                        required
                      />
                </div>
              </div>
              <p class='link'>Already registered! Click here to <a href='login.php'>Login</a> .</p>
            </div>
            <input type="submit" value="Sign up" class="login-btn" />
          </div>
          <div class="signup-image">
            <img src="./images/banner-view1-3.jpg" alt="" />
          </div>
        </form>
      </div>
    </div>
    <?php
  }

?>
  </body>
</html>
