<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Sahjanand College - Gondal</title>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" href="assets/css/frm.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
                <h2>Contact Us</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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

    <!-- ===============>> Contact section start here <<================= -->
    <div class="contact padding-top padding-bottom">
        <div class="container">
            <div class="contact__wrapper">
                <!--progress bar-->
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto mb-4">
                        <div class="multisteps-form__progress" id="hidden">
                            <button class="multisteps-form__progress-btn js-active" type="button">Personal
                                Detials</button>
                            <button class="multisteps-form__progress-btn" type="button">Address Details</button>
                            <button class="multisteps-form__progress-btn" type="button">Academic Details</button>
                            <button class="multisteps-form__progress-btn" type="button">Terms & Submit</button>
                        </div>
                        <br><br>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-12 col-lg-12 m-auto">
                        <form class="multisteps-form__form" action="form_data.php" method="post" name="myform"
                            enctype="multipart/form-data" novalidate>
                            <!--single form panel 1 -->
                            <?php include("Step1.php"); ?>
                            <!--single form panel 2 -->
                            <?php include("Step2.php"); ?>
                            <!--single form panel 3 -->
                            <?php include("Step3.php"); ?>
                            <!-- single form panel 4 -->
                            <?php include("Step4.php"); ?>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="contact__shape">
            <span class="contact__shape-item contact__shape-item--1"><img src="assets/images/contact/4.png"
                    alt="shape-icon"></span>
            <span class="contact__shape-item contact__shape-item--2"> <span></span> </span>
        </div>
    </div>
    <!-- ===============>> Contact section start here <<================= -->

    <script>
        document.getElementById('disability').addEventListener('change', function() {
            var disabilityValue = this.value;
            var percentageContainer = document.getElementById('disability_percentage_container');
            var certificateContainer = document.getElementById('disability_certificate_container');

            if (disabilityValue === 'Yes') {
                percentageContainer.style.display = 'block';
                certificateContainer.style.display = 'block';
            } else {
                percentageContainer.style.display = 'none';
                certificateContainer.style.display = 'none';
            }
        });
    </script>
    <script src="script.js"></script>

    <!-- ===============>> footer start here <<================= -->
    <?php include("include/footer.php"); ?>
    <!-- ===============>> footer end here <<================= -->

    <!-- ===============>> scrollToTop start here <<================= -->
    <?php include("include/footer-script.php"); ?>

</body>

</html>