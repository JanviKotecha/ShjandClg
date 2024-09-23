<!DOCTYPE html>
<?php
    include "include/config.php";
?>
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
    <section class="page-header bg--cover" style="background-image:url(assets/images/header/banner5.png)">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Courses</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Courses</li>
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

    <section class="roadmap roadmap--style2 padding-top  padding-bottom bg-color">
        <div class="container">
            <div class="section-header">
                <h2 class="mb-10 mt-minus-5 text-center"> <span class="style2">Explore Our </span> Courses</h2>
                <p class="text-center">Find the perfect program that aligns with your interests and career goals, and
                    embark on your academic journey with us.</p>
            </div>
            <section class="about about--style1 ">
                <div class="container">
                    <div class="about__wrapper">
                        <?php
                          $result = $qm->getRecord("course");
                          if (mysqli_num_rows($result) > 0) {  
                            $counter = 0;                      
                            while ($row = mysqli_fetch_array($result)) {
                              $counter++;
                              $rowClass = ($counter % 2 == 1) ? 'flex-row-reverse' : ''; 
                              ?>                            
                              <div class="row gx-5  gy-4 gy-sm-0  align-items-center my-5 <?php echo $rowClass; ?>">
                                  <div class="col-lg-6">
                                      <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                          <div class="about__thumb-inner">
                                              <div class="about__thumb-image floating-content">
                                                  <img src="<?php echo $row["c_img"]=='' ? COURSE_URL.'noimg.png' : (file_exists(UPLOAD_COURSE_URL.$row["c_img"]) ? COURSE_URL.$row["c_img"] : COURSE_URL.'noimg.png'); ?>"
                                                      class="border c-img">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="about__content" data-aos="fade-left" data-aos-duration="800">
                                          <div class="about__content-inner">
                                              <h2><span><?php echo $row['c_name']; ?></span></h2>
                                              <h6><?php echo $row['c_subtitle']; ?></h6>
                                              <div class="d-flex flex-wrap">
                                                  <div class="blog__meta text-center py-1">
                                                      <span class="blog__meta-tag blog__meta-tag--style1"><?php echo $row['medium']; ?> Medium</span>
                                                  </div>
                                                  <div class="blog__meta text-center py-1 ms-3">
                                                      <span class="blog__meta-tag blog__meta-tag--style1"><?php echo $row['duration']; ?></span>
                                                  </div>
                                              </div>
                                              <p class="mb-2 mt-4"><span class="course-decTitle">Eligibility : </span><?php echo $row['eligibility']; ?></p>
                                              <p class="mb-2"><span class="course-decTitle">Objective Of The Course : </span><?php echo $row['objective']; ?></p>
                                              <p class="mb-0"><span class="course-decTitle">After Graduation : </span><?php echo $row['after_graduation']; ?></p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <?php 
                            }
                          }  ?>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- ===============>> footer start here <<================= -->
    <?php include("include/footer.php"); ?>
    <!-- ===============>> footer end here <<================= -->
                          


    <!-- ===============>> scrollToTop start here <<================= -->
    <?php include("include/footer-script.php"); ?>

</body>

</html>