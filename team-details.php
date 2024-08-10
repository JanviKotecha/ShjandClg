<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <title>Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, Stocks & Day Trading Business </title>
  <?php include("include/head.php"); ?>
</head>

<body>

  <!-- ===============>> Preloader start here <<================= -->
 <?php include("include/preloder.php"); ?>
  <!-- ===============>> Preloader end here <<================= -->



  <!-- ===============>> light&dark switch start here <<================= -->
  <div class="lightdark-switch">
    <span class="switch-btn" id="btnSwitch"><img src="assets/images/icon/moon.svg" alt="light-dark-switchbtn"
        class="swtich-icon"></span>
  </div>
  <!-- ===============>> light&dark switch start here <<================= -->





  <!-- ===============>> Header section start here <<================= -->
  <header class="header-section bg-color-3">
  <?php include("include/header.php"); ?>
  </header>
  <!-- ===============>> Header section end here <<================= -->





  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover" style="background-image:url(assets/images/header/1.png)">
    <div class="container">
      <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
        <h2>Team Details</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Team Details</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__shape">
        <span class="page-header__shape-item page-header__shape-item--1"><img src="assets/images/header/2.png"
            alt="shape-icon"></span>
      </div>
    </div>
  </section>
  <!-- ================> Page header end here <================== -->




  <!-- ===============>> team details section start here <<================= -->
  <div class="team team--details padding-top padding-bottom bg-color-3">
    <div class="container">
      <div class="team__wrapper">
        <div class="row g-5 align-items-center">
          <div class="col-md-5">
            <div class="team__thumb">
              <img src="assets/images/team-details/1.png" alt="Team Image">
            </div>
          </div>
          <div class="col-md-7">
            <div class="team__content">
              <h3>Shamika Thompson</h3>
              <p class="designation">Trade Consultant</p>
              <p class="info">Hey there! So glad you stopped by to Meet Our Company. Don't miss out on this opportunity
                to learn about what we do and the amazing team that makes it all happen! </p>

              <p>
                Our company is all about creating innovative solutions and providing top-notch services to our clients.
                From start to finish, we're dedicated to delivering results that exceed expectations.
              </p>

              <ul class="social mt-30">
                <li class="social__item">
                  <a href="#" class="social__link social__link--style2"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style2 "><i class="fab fa-instagram"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style2"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style2"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="social__item">
                  <a href="signin.html" class="social__link social__link--style2 d-sm-none d-md-block"><i
                      class="fab fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===============>> team details section end here <<================= -->





  <!-- ===============>> cta section start here <<================= -->
  <section class="cta padding-top padding-bottom  bg-color">
    <div class="container">
      <div class="cta__wrapper">
        <div class="cta__newsletter justify-content-center">
          <div class="cta__newsletter-inner" data-aos="fade-up" data-aos-duration="1000">
            <div class="cta__thumb">
              <img src="assets/images/cta/3.png" alt="cta-thumb">
            </div>
            <div class="cta__subscribe">
              <h2 > <span>Subscribe</span> our news</h2>
              <p>Hey! Are you tired of missing out on our updates? Subscribe to our news now and stay in the loop!</p>
              <form class="cta-form cta-form--style2 form-subscribe" action="#">
                <div class="cta-form__inner d-sm-flex align-items-center">
                  <input type="email" class="form-control form-control--style2 mb-3 mb-sm-0"
                    placeholder="Email Address">
                  <button class="trk-btn  trk-btn--large trk-btn--secondary2" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="cta__shape">
          <span class="cta__shape-item cta__shape-item--1"><img src="assets/images/cta/2.png" alt="shape icon"></span>
          <span class="cta__shape-item cta__shape-item--2"><img src="assets/images/cta/4.png" alt="shape icon"></span>
          <span class="cta__shape-item cta__shape-item--3"><img src="assets/images/cta/5.png" alt="shape icon"></span>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> cta section start here <<================= -->






  <!-- ===============>> footer start here <<================= -->
 <?php include("include/footer.php"); ?>
  <!-- ===============>> footer end here <<================= -->



  <!-- ===============>> scrollToTop start here <<================= -->
  <?php include("include/footer-script.php"); ?>

</body>

</html>