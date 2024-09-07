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
    <section class="page-header bg--cover" style="background-image:url(assets/images/header/1.png)">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Events & Activity</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Events & Activity</li>
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




    <!-- ===============>> Blogs section start here <<================= -->
    <div class="blog padding-top padding-bottom section-bg-color">
        <div class="container">
            <div class="blog__wrapper">
                <div class="row g-4">
                    <?php
                        $limit = 6;
                        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                        $offset = ($current_page - 1) * $limit;
                        $events = $qm->getRecord("events");
                        $total_records =mysqli_num_rows($events);
                        $total_pages = ceil($total_records / $limit);

                        $result = $qm->getRecord("events","*" ,"","LIMIT $limit OFFSET $offset");
                    
                        if (mysqli_num_rows($result) > 0) {                        
                          while ($row = mysqli_fetch_array($result)) {
                            ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog__item" data-aos="fade-up" data-aos-duration="800">
                            <div class="blog__item-inner blog__item-inner--style2">
                                <div class="blog__thumb eventsImg">
                                    <img src="<?php echo $row["img"]=='' ? EVENTS_URL.'noimg.png' : (file_exists(UPLOAD_EVENTS_URL.$row["img"]) ? EVENTS_URL.$row["img"] : EVENTS_URL.'noimg.png'); ?>"
                                        class="border c-img" />
                                </div>

                                <div class="blog__content">
                                    <h5 class="10 style2 text-center mt-3"> <a
                                            href="blog-details.html"><?php echo $row['title']; ?></a>
                                    </h5>
                                    <div class="blog__meta text-center py-1">
                                        <span class="blog__meta-tag blog__meta-tag--style1"><?php echo $row['event_category']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                          }
                        }  ?>
                </div>
                <!-- Pagination -->
                <div class="paginations" data-aos="fade-up" data-aos-duration="1200">
                    <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                        <?php 
                          if ($current_page > 1) {
                              echo '<li><a href="?page=' . ($current_page - 1) . '"><i class="fa-solid fa-angle-left me-2"></i> Prev</a></li>';
                          } else {
                              echo '<li class="disabled"><a><i class="fa-solid fa-angle-left me-2"></i> Prev</a></li>';
                          }

                          for ($i = 1; $i <= $total_pages; $i++) {
                              if ($i == $current_page) {
                                  echo '<li><a href="?page=' . $i . '" class="active">' . $i . '</a></li>';
                              } else {
                                  echo '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
                              }
                          }

                          if ($current_page < $total_pages) {
                              echo '<li><a href="?page=' . ($current_page + 1) . '">Next <i class="fa-solid fa-angle-right ms-2"></i></a></li>';
                          } else {
                              echo '<li class="disabled"><a>Next <i class="fa-solid fa-angle-right ms-2"></i></a></li>';
                          }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============>> Blogs section start here <<================= -->





    <!-- ===============>> footer start here <<================= -->
    <?php include("include/footer.php"); ?>
    <!-- ===============>> footer end here <<================= -->



    <!-- ===============>> scrollToTop start here <<================= -->
    <?php include("include/footer-script.php"); ?>

</body>

</html>