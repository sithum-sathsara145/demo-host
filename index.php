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
    <title>LMS - Enroll campus</title>
  </head>
  <body>
    <!--// Header \\-->
    <?php include("header.php");?>
    <!--// Header \\-->
    <!--// Main Banner \\-->
    <div class="main-banner">
      <div class="banner">
        <div class="banner-layer">
          <img src="images/banner-view3-1.jpg" alt="" />
          <div class="caption">
            <div class="container">
              <div class="caption-inner">
                <h1>Students <span>don’t</span> just attend our university.</h1>
                <p>
                  They discover diverse opportunities to develop talents, &
                  become leaders, to have an impact on our campus.
                </p>
                <a class="discover-btn" href="#">discover us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--// Main Banner \\-->
    <div class="main-content">
      <!--// Main Section \\-->
      <div class="main-section">
        <div class="main-section-container">
          <div class="main-section-row">
            <div class="main-section-col-md-4">
              <div class="search-course">
                <h3 class="short-title color">Find Your Course</h3>
                <p>Fill in the form below to find your course:</p>
                <form>
                  <ul>
                    <li>
                      <div class="radio">
                        <div class="radio-partition">
                          <input
                            id="male"
                            type="radio"
                            name="gender"
                            value="male"
                          />
                          <label for="male">by ID</label>
                        </div>
                        <div class="radio-partition">
                          <input
                            id="female"
                            type="radio"
                            name="gender"
                            value="female"
                          />
                          <label for="female">by name</label>
                        </div>
                      </div>
                    </li>
                    <li>
                      <input
                        type="text"
                        value="Course Name"
                        onblur="if(this.value == '') { this.value ='Course Name'; }"
                        onfocus="if(this.value =='Course Name') { this.value = ''; }"
                      />
                      <i class="wmicon-search"></i>
                    </li>
                    <li>
                      <div class="apply-select">
                        <select>
                          <option>Category</option>
                          <option>Category</option>
                          <option>Category</option>
                          <option>Category</option>
                        </select>
                      </div>
                    </li>
                    <li><input type="submit" value="Search course" /></li>
                  </ul>
                </form>
              </div>
            </div>
            <div class="main-section-col-md-8">
              <div class="service box-service">
                <ul>
                  <li>
                    <div class="box-service-wrap box-service-wrap-color">
                      <i class="fa-solid fa-briefcase"></i>
                      <h6><a href="#">Business</a></h6>
                    </div>
                  </li>
                  <li>
                    <div class="box-service-wrap box-service-wrap-color">
                      <i class="fa-solid fa-money-bill"></i>
                      <h6><a href="#">Economics</a></h6>
                    </div>
                  </li>
                  <li>
                    <div class="box-service-wrap box-service-wrap-color">
                      <i class="fa-solid fa-calculator"></i>
                      <h6><a href="#">Math</a></h6>
                    </div>
                  </li>
                  <li>
                    <div class="box-service-wrap box-service-wrap-color">
                      <i class="fa-solid fa-atom"></i>
                      <h6><a href="#">Science</a></h6>
                    </div>
                  </li>
                  <li>
                    <div class="box-service-wrap box-service-wrap-color">
                      <i class="fa-solid fa-computer"></i>
                      <h6><a href="#">Computing</a></h6>
                    </div>
                  </li>
                  <li>
                    <div class="box-service-wrap box-service-wrap-color">
                      <i class="fa-solid fa-globe"></i>
                      <h6><a href="#">Web Design</a></h6>
                    </div>
                  </li>
                  <li>
                    <div class="box-service-wrap box-service-wrap-color">
                      <i class="fa-solid fa-microchip"></i>
                      <h6><a href="#">Development</a></h6>
                    </div>
                  </li>
                  <li>
                    <div class="box-service-wrap box-service-wrap-color">
                      <i class="fa-solid fa-microscope"></i>
                      <h6><a href="#">Biology</a></h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--// Main Section \\-->
      <!--// Main Section \\-->
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
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--// Main Section \\-->
    </div>
    <!-- main content -->
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
