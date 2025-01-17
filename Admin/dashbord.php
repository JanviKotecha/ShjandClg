<!DOCTYPE html>
<html lang="en">
<?php 
  @include("include/secureConfig.php"); 
  $page_title = "Home";

  $user=$qm->getRecord("user");
  $userCount = mysqli_num_rows($user);

  $u_membership=$qm->getRecord("u_membership");
  $u_membershipCount = mysqli_num_rows($u_membership);

  $course=$qm->getRecord("course");
  $courseCount = mysqli_num_rows($course);

  $instructor=$qm->getRecord("instructor");
  $instructorCount = mysqli_num_rows($instructor);

?>
  <head>
    <title>FIP ADMIN PANEL</title>
    <?php include("include/head.php") ?>

    <style>
      .animated-icon {
        display: inline-block;
        width: 50px; 
        height: 50px; 
        background-size: cover;
      }
    </style>

  </head>
  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include("include/sidebar.php") ?>
        <!-- / Menu -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php include("include/navbar.php") ?>
          <!-- / Navbar -->
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Welome To 🎉</h5>
                          <p class="mb-4">
                            FIP (Federation of Indian Professionals) 
                          </p>
                          <a href="customer.php" class="btn btn-sm btn-outline-primary">View User</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img src="assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-md-4 order-1">
                  <div class="row">
                    <div class="col-3 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <!-- <img src="assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" /> -->
                              <i class="animated-icon" style="background-image: url('assets/img/icons/unicons/user.gif');"></i>
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="customer.php">View More</a>
                                <!-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> -->
                              </div>
                            </div>
                          </div>
                          <span class="fw-medium d-block mt-3 mb-1">User</span>
                          <h3 class="card-title mb-2"><?php echo $userCount; ?></h3>
                          <!-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-3 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <!-- <img src="assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" /> -->
                              <i class="animated-icon" style="background-image: url('assets/img/icons/unicons/member_user.gif');"></i>
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="membership_user.php">View More</a>
                                <!-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> -->
                              </div>
                            </div>
                          </div>
                          <span class="fw-medium d-block mt-3 mb-1">Membership User</span>
                          <h3 class="card-title text-nowrap mb-2"><?php echo $u_membershipCount; ?></h3>
                          <!-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-3 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <!-- <img src="assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" /> -->
                              <i class="animated-icon" style="background-image: url('assets/img/icons/unicons/course.gif');"></i>
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="course.php">View More</a>
                                <!-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> -->
                              </div>
                            </div>
                          </div>
                          <span class="d-block mt-3 mb-1">Course</span>
                          <h3 class="card-title text-nowrap mb-2"><?php echo $courseCount; ?></h3>
                          <!-- <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-3 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <!-- <img src="assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" /> -->
                              <i class="animated-icon" style="background-image: url('assets/img/icons/unicons/teacher.gif');"></i>
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="instructors.php">View More</a>
                                <!-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> -->
                              </div>
                            </div>
                          </div>
                          <span class="fw-medium d-block mt-3 mb-1">Instructor</span>
                          <h3 class="card-title mb-2"><?php echo $instructorCount; ?></h3>
                          <!-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.14%</small> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Footer -->
            <?php include("include/footer.php"); ?>
            <!-- / Footer -->
          </div>
        </div>
      </div>
    </div>
    <?php include("include/footer-script.php"); ?>
  </body>
</html>