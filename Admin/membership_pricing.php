<!DOCTYPE html>
  <?php include("include/secureConfig.php");
    $page_title = "member_pricing";
    if(isset($_GET['id']))
    {
      if($_GET['id']!='') {
        if(is_numeric($_GET['id'])) {
          $res=$qm->getRecord("membership_pricing","*","id=".$_GET['id']);
          if(mysqli_num_rows($res)>0) {
            $qm->deleteRecord("membership_pricing","id=".$_GET['id']);
            $result=mysqli_fetch_array($res);
            $_SESSION['alert_msg'] .= "<div class='msg_success'>Membership Pricing Plan deleated successfully.</div>";
            header("location:membership_pricing.php"); 
            exit;
        }else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
          header("location:membership_pricing.php");
          exit;
        }
        } else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
          header("location:membership_pricing.php");
          exit;
        }
      } else  {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
        header("location:membership_pricing.php");
        exit;
      }
    }
      ?>
<html lang="en">
<head>
  <?php include("include/head.php"); ?>
  <style>
    .card {
      border: 1px solid #dee2e6;
      border-radius: 0.25rem;
      margin-bottom: 20px;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
    }
    .card-body {
      padding: 1.25rem;
    }
    .btn {
      padding: 5px 10px;
      font-size: 14px;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }
    .btn:hover {
      opacity: 0.8;
    }
    .card-title {
      margin-bottom: 20px;
    }
    hr {
      margin-top: 10px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body onload="hideLoader()">
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php include("include/sidebar.php") ?>
      <!-- / Menu -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php include("include/navbar.php") ?><br>  
        <div class="content-wrapper px-4">
          <div class="row page-title-header ">
            <div class="col-lg-12 grid-margin stretch-card">
              <?php include("include/loder.php"); ?>
              <?php include ("include/alert_msg.php"); ?>
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Membership Pricing Detail 
                    <a href="membership_pricing_add.php" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i> Add Pricing</a>
                  </h3>
                  <div class="row mt-5">
                    <?php 
                      $result = $qm->getRecord("membership_pricing");
                      if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-12 my-1">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <h5>Membership Plan </h5>
                            <div>
                              <a class="btn btn-primary mx-1" href="membership_pricing_update.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i> Edit</a>
                              <a class="btn btn-danger mx-1" href="membership_pricing.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this pricing plan?');"><i class="fa fa-trash"></i> Delete</a>
                            </div>
                          </div>
                          <hr>
                          <p><b>Start Date:</b> <?php echo $row['membership_start_date']; ?></p>
                          <p><b>New Price:</b> <?php echo $row['membership_new_price']; ?></p>
                          <p><b>Renew Price:</b> <?php echo $row['membership_renew_price']; ?></p>
                          <p><b>Description:</b> <?php echo $row['membership_description']; ?></p>
                          <p><b>Membership Privileges:</b> <?php echo $row['membership_privileges']; ?></p>
                          <p><b>Membership Email:</b> <?php echo $row['membership_email']; ?></p>
                          <p><b>Created At:</b> <?php echo $row['created_at']; ?></p>
                          <p><b>Updated At:</b> <?php echo $row['updated_at']; ?></p>
                        </div>
                      </div>
                    </div>
                    <?php } 
                      } else { ?>
                        <div class="col-md-12">
                          <div class="alert alert-warning" role="alert">
                            No pricing plans found.
                          </div>
                        </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include("include/footer.php"); ?>  
      </div>
    </div>
  </div>  
  <?php include("include/footer-script.php"); ?>
</body>
</html>
