<header id="header" class="header">
  <!--// TopStrip \\-->
  <div class="topstrip">
    <div class="topstrip-container">
      <ul class="stripinfo">
        <li>
          <i class="fa-solid fa-location-dot"></i> 2925 Swick Hill Street,
          Charlotte, NC 28202
        </li>
        <li><i class="fa-solid fa-phone"></i> +1 234-567-8910</li>
        <li><i class="fa-solid fa-clock"></i> Mon - fri: 7:00am - 6:00pm</li>
      </ul>
      <ul class="adminuser-section">
        <li>
          <?php
          if(!isset($_SESSION["username"])) {
              echo '<a href="login.php" data-toggle="modal" data-target="#ModalLogin">
              login
            </a>';
          }else{
            echo '<a href="logout.php" data-toggle="modal" data-target="#ModalLogin">
              logout
            </a>';
          }
          ?>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
        <li>
          <form action="search.php" method="get">
            <input type="text" name="search" id="search" placeholder="search" />
            <input type="submit" value="search" />
          </form>
        </li>
      </ul>
    </div>
  </div>
  <!--// TopStrip \\-->
  <!--// MainHeader \\-->
  <nav class="navbar">
    <div class="navbar__container">
      <a href="index.php" id="navbar__logo">
        <img
          src="./images/logo-1.png"
          alt="Encroll campus"
          class="navbar__logo-img"
        />
      </a>
      <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="navbar__menu">
        <li class="navbar__item">
          <a href="index.php" class="navbar__links">Home</a>
        </li>
        <li class="navbar__item">
          <a href="courses.php" class="navbar__links">Courses</a>
        </li>
        <li class="navbar__item">
          <a href="dashboard.php" class="navbar__links">Dashboard</a>
        </li>
        <li class="navbar__btn">
          <a href="sign-up.php" class="button">Sign Up</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--// MainHeader \\-->
  <script src="script.js"></script>
</header>
