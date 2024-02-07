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
    <title>login</title>
  </head>
  <body>
  <?php
    require('connection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `students` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
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
                    echo "<h3>Incorrect Username/password.</h3><br/>
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
                      }
                    } else {
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
            <div class="login-fields-container">
              <div class="login-fields">
                <label for="username">
                  <i class="fa-solid fa-user"></i> User Name
                </label>
                <input type="text" name="username" id="username" required />
              </div>
              <div class="login-fields">
                <label for="password">
                  <i class="fa-solid fa-lock"></i> Password
                </label>
                <input type="password" name="password" id="password" required />
              </div>
            </div>
            <p class='link'>Don't have an account! Click here to <a href='sign-up.php'>Register</a>.</p>
            <input type="submit" value="Login" class="login-btn" />
          </div>
          <div class="login-image">
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
