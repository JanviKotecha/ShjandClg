<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <title>sahajanand college of IT and management Gondal </title>
  <?php include("include/head.php"); ?>
</head>

<body>

  <!-- ===============>> Preloader start here <<================= -->
 <?php include("include/preloder.php"); ?>
  <!-- ===============>> Preloader end here <<================= -->
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
            <li class="breadcrumb-item "><a href="index.php">Home</a></li>
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
                <h2>Welcome back!</h2>
                <p>Hey there! Ready to log in? Just enter your username and password below and you'll be back in action
                  in no time. Let's go!</p>
              </div>

              <!-- account social -->
              <div class="account__social">
                <a href="#" class="account__social-btn"><span><img src="assets/images/others/google.svg"
                      alt="google icon"></span>
                  Continue with google
                </a>
              </div>

              <!-- account divider -->
              <div class="account__divider account__divider--style1">
                <span>or</span>
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
                  <div class="col-12">
                    <div class="form-pass">
                      <label for="account-pass" class="form-label">Password</label>
                      <input type="password" class="form-control showhide-pass" id="account-pass" placeholder="Password"
                        required>

                      <button type="button" id="btnToggle" class="form-pass__toggle"><i id="eyeIcon"
                          class="fa fa-eye"></i></button>
                    </div>
                  </div>
                </div>

                <div class="account__check">

                  <div class="account__check-remember">
                    <input type="checkbox" class="form-check-input" value="" id="terms-check">
                    <label for="terms-check" class="form-check-label">
                      Remember me
                    </label>
                  </div>
                  <div class="account__check-forgot">
                    <a href="forgot-pass.html">Forgot Password?</a>
                  </div>
                </div>

                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Sign in</button>
              </form>


              <div class="account__switch">
                <p>Don't have an account? <a href="signup.html">Sign up</a></p>
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