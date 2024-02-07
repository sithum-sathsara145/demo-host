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
    <title>Courses - Encroll campus</title>
  </head>
  <body>
    <!--// Header \\-->
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
            <li>
              <i class="fa-solid fa-clock"></i> Mon - fri: 7:00am - 6:00pm
            </li>
          </ul>
          <ul class="adminuser-section">
            <li>
              <a
                href="login.php"
                data-toggle="modal"
                data-target="#ModalLogin"
              >
                login
              </a>
            </li>
            <li>
              <a href="#">Contact</a>
            </li>
            <li>
              <form action="search.php" method="get">
                <input
                  type="text"
                  name="search"
                  id="search"
                  placeholder="search"
                />
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

    <!--// Header \\-->
    <div class="main-content">
      <div class="main-section courses-popular-full">
        <div class="courses-container">
          <div class="courses-row">
            <div class="courses-col-md-12">
              <div class="fancy-title">
                <h2>Popular <span>Courses</span></h2>
              </div>
              <div class="courses courses-popular">
                <ul class="courses-popular-row">
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-1.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-1.jpg"
                            alt=""
                          />
                          <h6><a href="#">Shelly T. Forrester</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Advanced Architectural Research</a></h6>
                        <div class="courses-price"><span>$32</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 342</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 10</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-2.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-2.jpg"
                            alt=""
                          />
                          <h6><a href="#">Sam K. Harrington</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Advanced Landscape & Urbanism</a></h6>
                        <div class="courses-price"><span>Free</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 438</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 28</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-3.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-3.jpg"
                            alt=""
                          />
                          <h6><a href="#">Sara A. Shirley</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Transdisciplinary Design</a></h6>
                        <div class="courses-price"><span>$79</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 309</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-comments"></i> 19
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#">
                          <img src="images/papular-courses-4.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-4.jpg"
                            alt=""
                          />
                          <h6><a href="#">Julius M. Lepage</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Financial Information Systems</a></h6>
                        <div class="courses-price"><span>$50</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 298
                            </a>
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 11</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="courses-popular-row">
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-1.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-1.jpg"
                            alt=""
                          />
                          <h6><a href="#">Shelly T. Forrester</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Advanced Architectural Research</a></h6>
                        <div class="courses-price"><span>$32</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 342</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 10</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-2.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-2.jpg"
                            alt=""
                          />
                          <h6><a href="#">Sam K. Harrington</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Advanced Landscape & Urbanism</a></h6>
                        <div class="courses-price"><span>Free</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 438</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 28</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-3.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-3.jpg"
                            alt=""
                          />
                          <h6><a href="#">Sara A. Shirley</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Transdisciplinary Design</a></h6>
                        <div class="courses-price"><span>$79</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 309</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-comments"></i> 19
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#">
                          <img src="images/papular-courses-4.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-4.jpg"
                            alt=""
                          />
                          <h6><a href="#">Julius M. Lepage</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Financial Information Systems</a></h6>
                        <div class="courses-price"><span>$50</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 298
                            </a>
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 11</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="courses-popular-row">
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-1.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-1.jpg"
                            alt=""
                          />
                          <h6><a href="#">Shelly T. Forrester</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Advanced Architectural Research</a></h6>
                        <div class="courses-price"><span>$32</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 342</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 10</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-2.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-2.jpg"
                            alt=""
                          />
                          <h6><a href="#">Sam K. Harrington</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Advanced Landscape & Urbanism</a></h6>
                        <div class="courses-price"><span>Free</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 438</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 28</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-3.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-3.jpg"
                            alt=""
                          />
                          <h6><a href="#">Sara A. Shirley</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Transdisciplinary Design</a></h6>
                        <div class="courses-price"><span>$79</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 309</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-comments"></i> 19
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#">
                          <img src="images/papular-courses-4.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-4.jpg"
                            alt=""
                          />
                          <h6><a href="#">Julius M. Lepage</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Financial Information Systems</a></h6>
                        <div class="courses-price"><span>$50</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 298
                            </a>
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 11</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="courses-popular-row">
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-1.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-1.jpg"
                            alt=""
                          />
                          <h6><a href="#">Shelly T. Forrester</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Advanced Architectural Research</a></h6>
                        <div class="courses-price"><span>$32</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 342</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 10</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-2.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-2.jpg"
                            alt=""
                          />
                          <h6><a href="#">Sam K. Harrington</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Advanced Landscape & Urbanism</a></h6>
                        <div class="courses-price"><span>Free</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 438</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 28</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#"
                          ><img src="images/papular-courses-3.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-3.jpg"
                            alt=""
                          />
                          <h6><a href="#">Sara A. Shirley</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Transdisciplinary Design</a></h6>
                        <div class="courses-price"><span>$79</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 309</a
                            >
                          </li>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-comments"></i> 19
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="courses-col-md-3">
                    <div class="courses-popular-wrap">
                      <figure>
                        <a href="#">
                          <img src="images/papular-courses-4.jpg" alt="" />
                          <span class="popular-hover">
                            <small>see course</small>
                          </span>
                        </a>
                        <figcaption>
                          <img
                            src="images/papular-courses-thumb-4.jpg"
                            alt=""
                          />
                          <h6><a href="#">Julius M. Lepage</a></h6>
                        </figcaption>
                      </figure>
                      <div class="popular-courses-text">
                        <h6><a href="#">Financial Information Systems</a></h6>
                        <div class="courses-price"><span>$50</span></div>
                        <ul>
                          <li>
                            <a href="#" class="color">
                              <i class="fa-solid fa-users"></i> 298
                            </a>
                          </li>
                          <li>
                            <a href="#" class="color"
                              ><i class="fa-solid fa-comments"></i> 11</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Section -->
    <footer>
      <div class="footer__container">
        <div class="footer__links">
          <div class="footer__link--wrapper">
            <div class="footer__link--items">
              <h2>About Us</h2>
              <a href="/sign__up">How it works</a> <a href="/">Testimonials</a>
              <a href="/">Careers</a> <a href="/">Investments</a>
              <a href="/">Terms of Service</a>
            </div>
            <div class="footer__link--items">
              <h2>Contact Us</h2>
              <a href="/">Contact</a> <a href="/">Support</a>
              <a href="/">Destinations</a> <a href="/">Sponsorships</a>
            </div>
          </div>
          <div class="footer__link--wrapper">
            <div class="footer__link--items">
              <h2>Videos</h2>
              <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
              <a href="/">Agency</a> <a href="/">Influencer</a>
            </div>
            <div class="footer__link--items">
              <h2>Social Media</h2>
              <a href="/">Instagram</a> <a href="/">Facebook</a>
              <a href="/">Youtube</a> <a href="/">Twitter</a>
            </div>
          </div>
        </div>
        <section class="social__media">
          <div class="social__media--wrap">
            <div class="footer__logo">
              <a href="/" id="footer__logo">Enroll campus</a>
            </div>
            <p class="website__rights">
              © Enroll campus 2023. All rights reserved
            </p>
            <div class="social__icons">
              <a
                class="social__icon--link"
                href="//facebook.com"
                target="_blank"
                aria-label="Facebook"
              >
                <i class="fab fa-facebook"></i>
              </a>
              <a
                class="social__icon--link"
                href="//www.instagram.com/"
                target="_blank"
                aria-label="Instagram"
              >
                <i class="fab fa-instagram"></i>
              </a>
              <a
                class="social__icon--link"
                href="//www.youtube.com/"
                target="_blank"
                aria-label="Youtube"
              >
                <i class="fab fa-youtube"></i>
              </a>
              <a
                class="social__icon--link"
                href="//twitter.com"
                target="_blank"
                aria-label="Twitter"
              >
                <i class="fab fa-twitter"></i>
              </a>
              <a
                class="social__icon--link"
                href="//linkedin.com"
                target="_blank"
                aria-label="LinkedIn"
              >
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
          </div>
        </section>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
