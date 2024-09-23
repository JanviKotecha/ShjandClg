<!DOCTYPE html>
<?php
    include "include/config.php";
?>
<html lang="en" data-bs-theme="light">

<head>
    <title>Sahajanand College of IT and Management, Gondal</title>
    <?php include("include/head.php"); ?>

    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        /* Fullscreen Swiper styling */
        #image-slider {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 9999;
            background-color: rgba(0, 0, 0, 0.9);
            display: none;
        }

        .slider-img {
            width: 100%;
            height: auto;
            object-fit: contain;
            max-height: 100%;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
        }

        #close-slider {
            position: absolute;
            top: 10px;
            right: 20px;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            z-index: 999;
        }
    </style>
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
                        <li class="breadcrumb-item "><a href="index.php">Home</a></li>
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

                        $result = $qm->getRecord("events","*" ,"","ORDER BY id DESC LIMIT $limit OFFSET $offset");
                    
                        if (mysqli_num_rows($result) > 0) {                        
                          while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog__item" data-aos="fade-up" data-aos-duration="800">
                            <div class="blog__item-inner blog__item-inner--style2">
                                <div class="blog__thumb eventsImg">
                                    <img src="<?php echo $row["img"] == '' ? EVENTS_URL.'noimg.png' : (file_exists(UPLOAD_EVENTS_URL.$row["img"]) ? EVENTS_URL.$row["img"] : EVENTS_URL.'noimg.png'); ?>"
                                        class="border c-img open-slider" data-slide-index="<?php echo $offset; ?>" />
                                </div>

                                <div class="blog__content">
                                    <h5 class="10 style2 text-center mt-3"> 
                                        <a><?php echo $row['title']; ?></a>
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
                        }  
                    ?>
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
    <!-- ===============>> Blogs section end here <<================= -->

    <!-- Fullscreen Slider (initially hidden) -->
    <div class="swiper-container" id="image-slider">
        <div class="swiper-wrapper">
            <?php
            $events = $qm->getRecord("events");
            while ($row = mysqli_fetch_array($events)) { ?>
                <div class="swiper-slide">
                    <img src="<?php echo $row["img"] == '' ? EVENTS_URL.'noimg.png' : (file_exists(UPLOAD_EVENTS_URL.$row["img"]) ? EVENTS_URL.$row["img"] : EVENTS_URL.'noimg.png'); ?>" class="slider-img" />
                </div>
            <?php } ?>
        </div>

        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Close button -->
        <div id="close-slider">X</div>
    </div>

    <!-- ===============>> footer start here <<================= -->
    <?php include("include/footer.php"); ?>
    <!-- ===============>> footer end here <<================= -->

    <!-- ===============>> scrollToTop start here <<================= -->
    <?php include("include/footer-script.php"); ?>

    <!-- Swiper's JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Swiper
            var swiper = new Swiper('.swiper-container', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                spaceBetween: 10,
                loop: true,
            });

            // Open the slider when an image is clicked
            document.querySelectorAll('.open-slider').forEach((img, index) => {
                img.addEventListener('click', function () {
                    const clickedSlideIndex = index;
                    document.getElementById('image-slider').style.display = 'block';
                    swiper.slideTo(clickedSlideIndex + 1, 0); // Move to the clicked image
                });
            });

            // Close the slider
            document.getElementById('close-slider').addEventListener('click', function () {
                document.getElementById('image-slider').style.display = 'none';
            });
        });
    </script>
</body>

</html>
