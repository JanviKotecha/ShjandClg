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
    <header class="header-section header-section--style2">

        <?php include("include/header.php"); ?>
    </header>
    <!-- ===============>> Header section end here <<================= -->
    <!-- ===============>> Banner section start here <<================= -->
    <section class="banner banner--style1">
        <div class="banner__bg">
            <div class="banner__bg-element">
                <img src="assets/images/banner/home1/bg.png" alt="section-bg-element" class="dark d-none d-lg-block">
                <span class="bg-color d-lg-none"></span>
            </div>
        </div>
        <div class="container">
            <div class="banner__wrapper">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-6 col-md-7">
                        <div class="banner__content" data-aos="fade-right" data-aos-duration="1000">
                            <div class="banner__content-coin">
                                <img src="assets/images/header/bag.png" alt="coin icon">
                            </div>
                            <h1 class="banner__content-heading">Welcome to <span>Sahajanand College!</span></h1>
                            <p class="banner__content-moto">Discover a world of opportunities at Sahajanand College. Our commitment to academic excellence and holistic development ensures that you receive the best education and preparation for your future. Join a vibrant community of learners and leaders dedicated to making a difference.
                            </p>
                            <div class="banner__btn-group btn-group">
                                <a href="courses.php" class="trk-btn trk-btn--primary trk-btn--arrow">Explore Our Programs
                                    <span><i class="fa-solid fa-arrow-right"></i></span> </a>
                            </div>
                            <div class="banner__content-social">
                                <p>Follow Us</p>
                                <ul class="social">
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style1 active"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style1"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style1"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style1"><i
                                                class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="signin.html" class="social__link social__link--style1"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="banner__thumb" data-aos="fade-left" data-aos-duration="1000">
                            <img src="assets/images/header/study.png" alt="banner-thumb" class="dark">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__shape">
            <span class="banner__shape-item banner__shape-item--1"><img src="assets/images/header/bag.png"
                    alt="shape icon"></span>
        </div>

    </section>
    <!-- ===============>> Banner section end here <<================= -->

    <!-- ===============>> partner section start here <<================= -->
    <div class="partner partner--gradient">
        <div class="container">
            <div class="partner__wrapper">
                <div class="partner__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="partner__item">
                                <div class="partner__item-inner indexSecond">
                                    B.B.A
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__item">
                                <div class="partner__item-inner indexSecond">
                                    B.com </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__item">
                                <div class="partner__item-inner indexSecond">
                                    B.C.A </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__item">
                                <div class="partner__item-inner indexSecond">
                                    B.sc. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============>> partner section end here <<================= -->

    <!-- ===============>> About section start here <<================= -->
    <!-- <section class="about about--style1">
        <div class="container">
            <div class="about__wrapper">
                <div class="row gx-5  gy-4 gy-sm-0  align-items-center">
                    <div class="col-lg-6">
                        <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                            <div class="about__thumb-inner">
                                <div class="about__thumb-image floating-content">
                                    <img class="dark" src="assets/images/about/1.png" alt="about-image">
                                    <div class="floating-content__top-left" data-aos="fade-right"
                                        data-aos-duration="1000">
                                        <div class="floating-content__item">
                                            <h3> <span class="purecounter" data-purecounter-start="0"
                                                    data-purecounter-end="10">30</span>
                                                Years
                                            </h3>
                                            <p>Consulting Experience</p>
                                        </div>
                                    </div>
                                    <div class="floating-content__bottom-right" data-aos="fade-right"
                                        data-aos-duration="1000">
                                        <div class="floating-content__item">
                                            <h3> <span class="purecounter" data-purecounter-start="0"
                                                    data-purecounter-end="25">25K</span>K+
                                            </h3>
                                            <p>Satisfied Customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content" data-aos="fade-left" data-aos-duration="800">
                            <div class="about__content-inner">
                                <h2>Welcome to <span>Sahajanand College! </span></h2>

                                <p class="mb-0">Sahajanand College is a leading institution of higher learning,
                                    dedicated to fostering an environment where students are inspired to learn, grow,
                                    and excel. Located in the heart of the city, our college offers a diverse range of
                                    undergraduate programs in BBA, BCA, B.Com, and B.Sc., tailored to meet the needs of
                                    today's dynamic world.</p>
                                <a href="our-identity.php" class="trk-btn trk-btn--border trk-btn--primary">Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ===============>> About section start here <<================= -->

    <!-- ===============>> feature section start here <<================= -->
    <section class="feature feature--style1 padding-bottom padding-top bg-color">
        <div class="container">
            <div class="feature__wrapper">
                <div class="row g-5 align-items-center justify-content-between">
                    <div class="col-md-6 col-lg-5">
                        <div class="feature__content" data-aos="fade-right" data-aos-duration="800">
                            <div class="feature__content-inner">
                                <div class="section-header">
                                    <h2 class="mb-10 mt-minus-5"> <span>Our </span>Values</h2>
                                    <p class="mb-0">Guiding Principles that Shape Our Commitment to Excellence and
                                        Community</p>
                                </div>

                                <div class="feature__nav">
                                    <div class="nav nav--feature flex-column nav-pills" id="feat-pills-tab"
                                        role="tablist" aria-orientation="vertical">
                                        <div class="nav-link active" id="feat-pills-one-tab" data-bs-toggle="pill"
                                            data-bs-target="#feat-pills-one" role="tab" aria-controls="feat-pills-one"
                                            aria-selected="true">
                                            <div class="feature__item">
                                                <div class="feature__item-inner">
                                                    <div class="feature__item-content">
                                                        <h6>We uphold the highest ethical standards in all our endeavors.</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-link" id="feat-pills-two-tab" data-bs-toggle="pill"
                                            data-bs-target="#feat-pills-two" role="tab" aria-controls="feat-pills-two"
                                            aria-selected="false">
                                            <div class="feature__item">
                                                <div class="feature__item-inner">
                                                    <div class="feature__item-content">
                                                        <h6>We strive for excellence in teaching, learning, and research.</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="nav-link" id="feat-pills-three-tab" data-bs-toggle="pill"
                                            data-bs-target="#feat-pills-three" role="tab"
                                            aria-controls="feat-pills-three" aria-selected="false">
                                            <div class="feature__item">
                                                <div class="feature__item-inner">
                                                    <div class="feature__item-content">
                                                        <h6>We embrace diversity and foster an inclusive environment for all.
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-link" id="feat-pills-four-tab" data-bs-toggle="pill"
                                            data-bs-target="#feat-pills-four" role="tab" aria-controls="feat-pills-four"
                                            aria-selected="false">
                                            <div class="feature__item">
                                                <div class="feature__item-inner">
                                                    <div class="feature__item-content">
                                                        <h6>We encourage creativity, critical thinking, and innovation.
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-link" id="feat-pills-five-tab" data-bs-toggle="pill"
                                            data-bs-target="#feat-pills-five" role="tab" aria-controls="feat-pills-five"
                                            aria-selected="false">
                                            <div class="feature__item">
                                                <div class="feature__item-inner">
                                                    <div class="feature__item-content">
                                                        <h6>We are committed to giving back to the community and making a positive impact.
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="feature__thumb pt-5 pt-md-0" data-aos="fade-left" data-aos-duration="800">
                            <div class="feature__thumb-inner">
                                <div class="tab-content" id="feat-pills-tabContent">
                                    <div class="tab-pane fade show active" id="feat-pills-one" role="tabpanel"
                                        aria-labelledby="feat-pills-one-tab" tabindex="0">
                                        <div class="feature__image floating-content">
                                            <img src="assets/images/values/1.png" alt="Feature image">
                                            <div class="floating-content__top-right floating-content__top-right--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style2 text-center">
                                                    <img src="assets/images/values/11.png" alt="rating">
                                                    <p class="style2">Integrity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="feat-pills-two" role="tabpanel"
                                        aria-labelledby="feat-pills-two-tab" tabindex="0">
                                        <div class="feature__image floating-content">
                                            <img src="assets/images/values/2.png" alt="Feature image">
                                            
                                            <div class="floating-content__bottom-left floating-content__bottom-left--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style3  d-flex align-items-center">
                                                    <img src="assets/images/values/12.png" alt="rating">
                                                    <p class="ms-3 style2">Excellence</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="feat-pills-three" role="tabpanel"
                                        aria-labelledby="feat-pills-three-tab" tabindex="0">
                                        <div class="feature__image floating-content">
                                            <img src="assets/images/values/3.png" alt="Feature image">
                                            <div class="floating-content__top-right floating-content__top-right--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style2 text-center">
                                                    <img src="assets/images/values/13.png" alt="rating">
                                                    <p class="style2">Inclusivity</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="feat-pills-four" role="tabpanel"
                                        aria-labelledby="feat-pills-four-tab" tabindex="0">
                                        <div class="feature__image floating-content">
                                            <img src="assets/images/values/4.png" alt="Feature image">
                                            
                                            <div class="floating-content__bottom-left floating-content__bottom-left--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style3  d-flex align-items-center">
                                                    <img src="assets/images/values/14.png" alt="rating">
                                                    <p class="ms-3 style2">Innovation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="feat-pills-five" role="tabpanel"
                                        aria-labelledby="feat-pills-five-tab" tabindex="0">
                                        <div class="feature__image floating-content">
                                            <img src="assets/images/values/5.png" alt="Feature image">
                                            <div class="floating-content__top-right floating-content__top-right--style2"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div
                                                    class="floating-content__item floating-content__item--style2 text-center">
                                                    <img src="assets/images/values/15.png" alt="rating">
                                                    <p class="style2">Community Service</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature__shape">
            <span class="feature__shape-item feature__shape-item--1"><img src="assets/images/values/values.png"
                    alt="shape-icon"></span>
            <span class="feature__shape-item feature__shape-item--2"> <span></span> </span>
        </div>
    </section>
    <!-- ===============>> feature section end here <<================= -->

    <!-- ===============>> Service section start here <<================= -->
    <section class="service padding-top padding-bottom">
        <div class="section-header section-header--max50">
            <h2 class="mb-10 mt-minus-5"><span>Benefits </span>We offer</h2>
            <p>Discover the advantages of studying at Sahajanand College.
                Our programs are designed to empower your future and enhance your learning experience!</p>
        </div>
        <div class="container">
            <div class="service__wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-6 col-md-6 col-lg-4 service-item page-1">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/1.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Boys Hostel Facility </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-1">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1000">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/2.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">3 Acre College Campus </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-1">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/3.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5><a class="stretched-link">Innovative Methods of Teaching</a> </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-1">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/4.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Advance Computer Labs</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-1">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1000">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/5.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Expert Faculty Staff</a> </h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-1">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/6.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Expert Talks </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 service-item page-2">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/7.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Industry Visit </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-2">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/8.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Canteen & Library</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-2">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/9.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Garden Area</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 service-item page-2">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/10.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Transportation</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-2">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/11.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Great Placement Opportunities</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-2">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/12.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">24 Hour CCTV Surveillance</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 service-item page-3">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/13.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Swimming Pool</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-3">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/14.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Projector Room </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-3">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/15.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Sports Activity Center</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 service-item page-3">
                        <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark" src="assets/images/service/16.png" alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link">Wi - Fi Zone</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Pagination -->
                <div class="paginations mt-5" data-aos="fade-up" data-aos-duration="800">
                    <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                        <li><a href="#" class="prev paginationPrev"><i class="fa-solid fa-angle-left me-2"></i> Prev</a>
                        </li>
                        <li><a href="#" class="pagination-link active" data-target="page-1">1</a></li>
                        <li><a href="#" class="pagination-link" data-target="page-2">2</a></li>
                        <li><a href="#" class="pagination-link" data-target="page-3">3</a></li>
                        <li><a href="#" class="next paginationNext">Next <i
                                    class="fa-solid fa-angle-right ms-2"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <!-- ===============>> Service section start here <<================= -->

    <!-- ========== Roadmap Section start Here========== -->
    <section class="roadmap roadmap--style2 padding-top  padding-bottom bg-color" id="roadmap">
        <div class="container">
            <div class="section-header section-header--max50">
                <h2 class="mb-10 mt-minus-5">Undergraduate <span> Programs</span></h2>
                <p>Explore a diverse range of programs designed to fuel your passion and prepare you for a successful
                    future.</p>
            </div>
            <div class="roadmap__wrapper">
                <div class="roadmap__upper">
                    <div class="roadmap__upper-inner">
                        <div class="swiper">
                            <div class="roadmap__slider">
                                <div class="swiper-wrapper">
                                    <?php $result=$qm->getRecord("course");
                                        if (mysqli_num_rows($result)>0) {
                                            $i=0;
                                            while ($row=mysqli_fetch_array($result)) { 
                                            $i++;?>
                                    <div
                                        class="roadmap__item <?php echo ($i % 2 == 0) ? 'roadmap__item--reverse' : ''; ?>">
                                        <!-- Dynamic class for vertical line position -->
                                        <div
                                            class="roadmap__item-inner <?php echo ($i % 2 == 0) ? 'roadmap__item-inner--vertical-line-top' : 'roadmap__item-inner--vertical-line-bottom'; ?>">
                                            <div class="roadmap__item-content">
                                                <!-- Use dynamic data from the database -->
                                                <h5><?php echo htmlspecialchars($row['c_name']); ?></h5>
                                                <p><?php 
                                                                    // Get the 'objective' field from the database
                                                                    $objective = htmlspecialchars($row['objective']);

                                                                    // Check if the objective length exceeds 200 characters
                                                                    if (strlen($objective) > 50) {
                                                                        // Truncate the text to 200 characters and add ellipsis
                                                                        echo substr($objective, 0, 50) . '...';
                                                                    } else {
                                                                        // Print the full text if it's less than or equal to 200 characters
                                                                        echo $objective;
                                                                    } ?>
                                                </p>
                                            </div>
                                            <div class="roadmap__item-date">
                                                <!-- Format and display the date dynamically -->
                                                <span><?php echo $row['duration']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } 
                                        }  
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a href="courses.php" class="trk-btn trk-btn--border trk-btn--primary">Explore More </a>
            </div>
        </div>
    </section>
    <!-- ========== Roadmap Section Ends Here========== -->

    <!-- ===============>> Team section start here <<================= -->
    <section class="team padding-top padding-bottom">
        <div class="section-header section-header--max50">
            <h2 class="mb-10 mt-minus-5">Meet our <span>faculties</span></h2>
            <p>Learn from passionate educators who bring knowledge to life. Discover the expertise that drives our
                academic excellence.</p>
        </div>
        <div class="container">
            <div class="team__wrapper">
                <div class="row g-4 align-items-center">
                    <?php
                        $limit = 4;
                        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                        $offset = ($current_page - 1) * $limit;
                        $faculty = $qm->getRecord("faculty");
                        $total_records =mysqli_num_rows($faculty);
                        $total_pages = ceil($total_records / $limit);

                        $result = $qm->getRecord("faculty","*" ,"","LIMIT $limit OFFSET $offset");
                    
                        if (mysqli_num_rows($result) > 0) {                        
                          while ($row = mysqli_fetch_array($result)) {
                            ?>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="<?php echo $row["faculty_iamge"]=='' ? FACULTY_URL.'noimg.png' : (file_exists(UPLOAD_FACULTY_URL.$row["faculty_iamge"]) ? FACULTY_URL.$row["faculty_iamge"] : FACULTY_URL.'noimg.png'); ?>"
                                        class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a
                                                    class="stretched-link"><?php echo $row['faculty_name']; ?></a> </h6>
                                            <p class="mb-0"><?php echo $row['faculty_degree']; ?></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php 
                          }
                        }  ?>
                </div>
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
    </section>
    <!-- ===============>> Team section start here <<================= -->

    <!-- ===============>> Testimonial section start here <<================= -->
    <section class="testimonial padding-top padding-bottom-style2 bg-color">
        <div class="container">
            <div class="section-header d-md-flex align-items-center justify-content-between">
                <div class="section-header__content">
                    <h2 class="mb-10">connect with <span>our Clients </span></h2>
                    <p class="mb-0">We love connecting with our clients to hear about their experiences and how we can
                        improve.
                    </p>
                </div>
                <div class="section-header__action">
                    <div class="swiper-nav">
                        <button class="swiper-nav__btn testimonial__slider-prev"><i
                                class="fa-solid fa-angle-left"></i></button>
                        <button class="swiper-nav__btn testimonial__slider-next active"><i
                                class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="testimonial__wrapper" data-aos="fade-up" data-aos-duration="1000">
                <div class="testimonial__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item--style1">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <p class="mb-0">
                                            The above testimonial is about Martha Chumo, who taught herself to code in
                                            one summer. This
                                            testimonial example works because it allows prospective customers to see
                                            themselves in
                                            Codeacademy’s current customer base.
                                        </p>
                                        <div class="testimonial__footer">
                                            <div class="testimonial__author">
                                                <div class="testimonial__author-thumb">
                                                    <img src="assets/images/testimonial/1.png" alt="author">
                                                </div>
                                                <div class="testimonial__author-designation">
                                                    <h6>Mobarok Hossain</h6>
                                                    <span>Trade Master</span>
                                                </div>
                                            </div>
                                            <div class="testimonial__quote">
                                                <span><i class="fa-solid fa-quote-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item--style1">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <p class="mb-0">
                                            In the above testimonial, a customer named Jeanine shares her experience
                                            with Briogeo’s products.
                                            While the post is scattered with too many product mentions, it takes full
                                            advantage of its real
                                            estate by allowing the writer to tell
                                        </p>
                                        <div class="testimonial__footer">
                                            <div class="testimonial__author">
                                                <div class="testimonial__author-thumb">
                                                    <img src="assets/images/testimonial/2.png" alt="author">
                                                </div>
                                                <div class="testimonial__author-designation">
                                                    <h6>Guy Hawkins</h6>
                                                    <span>Trade Boss</span>
                                                </div>
                                            </div>
                                            <div class="testimonial__quote">
                                                <span><i class="fa-solid fa-quote-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item--style1">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <p class="mb-0">
                                            The above testimonial is about Martha Chumo, who taught herself to code in
                                            one summer. This
                                            testimonial example works because it allows prospective customers to see
                                            themselves in
                                            Codeacademy’s current customer base.
                                        </p>
                                        <div class="testimonial__footer">
                                            <div class="testimonial__author">
                                                <div class="testimonial__author-thumb">
                                                    <img src="assets/images/testimonial/6.png" alt="author">
                                                </div>
                                                <div class="testimonial__author-designation">
                                                    <h6>Belal Hossain</h6>
                                                    <span>Trade Genius</span>
                                                </div>
                                            </div>
                                            <div class="testimonial__quote">
                                                <span><i class="fa-solid fa-quote-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Testimonial section start here <<================= -->

    <!-- ===============>> FAQ section start here <<================= -->
    <section class="faq padding-top padding-bottom of-hidden">
        <div class="section-header section-header--max65">
            <h2 class="mb-10 mt-minus-5"><span>Frequently</span> Asked questions</h2>
            <p>Hey there! Got questions? We've got answers. Check out our FAQ page for all the deets. Still not
                satisfied? Hit
                us up.</p>
        </div>
        <div class="container">
            <div class="faq__wrapper">
                <div class="row g-5 align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="accordion accordion--style1" id="faqAccordion1" data-aos="fade-right"
                            data-aos-duration="1000">
                            <div class="row">
                                <?php
                                    $result = $qm->getRecord("faq");
                                    if (mysqli_num_rows($result) > 0) {
                                        $count = 0;
                                        while ($row = mysqli_fetch_array($result)) {
                                            $count++; 
                                            $headerId = 'faq' . $count;
                                            $bodyId = 'faqBody' . $count;
                                            $isExpanded = ($count === 1) ? 'true' : 'false';
                                            $showClass = ($count === 1) ? 'show' : '';
                                            ?>
                                <div class="col-12">
                                    <div class="accordion__item accordion-item">
                                        <div class="accordion__header accordion-header" id="<?php echo $headerId; ?>">
                                            <button class="accordion__button accordion-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#<?php echo $bodyId; ?>"
                                                aria-expanded="<?php echo $isExpanded; ?>"
                                                aria-controls="<?php echo $bodyId; ?>">
                                                <span
                                                    class="accordion__button-content"><?php echo $row['question']; ?></span>
                                            </button>
                                        </div>
                                        <div id="<?php echo $bodyId; ?>"
                                            class="accordion-collapse collapse <?php echo $showClass; ?>"
                                            aria-labelledby="<?php echo $headerId; ?>" data-bs-parent="#faqAccordion1">
                                            <div class="accordion__body accordion-body">
                                                <p class="mb-15">
                                                    <?php echo $row['answer']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                        }
                                    } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq__thumb faq__thumb--style1" data-aos="fade-left" data-aos-duration="1000">
                            <img class="dark" src="assets/images/cta/faq.png" alt="faq-thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq__shape faq__shape--style1">
            <span class="faq__shape-item faq__shape-item--1"><img src="assets/images/cta/question.png"
                    alt="shpae-icon"></span>
        </div>
    </section>
    <!-- ===============>> FAQ section start here <<================= -->
    <!-- ===============>> footer start here <<================= -->
    <?php include("include/footer.php"); ?>
    <!-- ===============>> footer end here <<================= -->



    <!-- ===============>> scrollToTop start here <<================= -->
    <?php include("include/footer-script.php"); ?>

</body>

</html>