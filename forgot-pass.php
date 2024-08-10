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
        <h2>Register</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
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





  <!-- ===============>> account start here <<================= -->
  <section class="account padding-top padding-bottom sec-bg-color2">
    <div class="container">
      <div class="account__wrapper" data-aos="fade-up" data-aos-duration="800">
        <div class="row g-4">
          <div class="col-lg-12">
            <div class="account__content account__content--style1">

              <!-- account tittle -->
              <div class="account__header">
                <h2>Reset Your Password</h2>
                <p>Hey there! Forgot your password? No worries, just click "forgot password" and follow the steps to
                  recover it. Easy peasy lemon squeezy!</p>
              </div>


              <!-- account form -->
              <form action="#" class="account__form needs-validation" novalidate>
                <div class="row g-4">
                  <div class="col-12">
                    <div>
                      <label for="account-email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="account-email" placeholder="Enter your email"
                        required>
                    </div>
                  </div>
                </div>

                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Reset
                  password</button>
              </form>


              <div class="account__switch">
                <p> <a href="signin.html" class="style2"><i class="fa-solid fa-arrow-left-long"></i> Back to <span>Login</span></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="account__shape">
      <span class="account__shape-item account__shape-item--1"><img src="assets/images/contact/4.png"
          alt="shape-icon"></span>
    </div>
  </section>
  <!-- ===============>> account end here <<================= -->





  <!-- ===============>> footer start here <<================= -->
 <?php include("include/footer.php"); ?>
  <!-- ===============>> footer end here <<================= -->




  <!-- vendor plugins -->

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/all.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/fslightbox.js"></script>
  <script src="assets/js/purecounter_vanilla.js"></script>



  <script src="assets/js/custom.js"></script>


</body>

</html>