<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
$page_title = "info";
if (isset($_POST['add'])) {
  $nm = $_POST['nm'];
  $ema = $_POST['em'];
  $mob = $_POST['mob'];
  $addr = $_POST['addr'];
  $pwd = $_POST['pass'];

  $pwdhash = password_hash($pwd, PASSWORD_DEFAULT); 

  $nm = addslashes($nm);
  $ema = addslashes($ema);
  $mob = addslashes($mob);
  $addr = addslashes($addr);

  $insert = $qm->insertRecord("user", "uNo,nm,eml,mob,addr,pwd,dt", "'" . sernum() . "','" . $nm . "','" . $ema . "','" . $mob . "','" . $addr . "','".$pwdhash."','" . $getDt . "'");

  $msg = "New User Register :- ".$nm;
  $date = date("d/m/Y");
  date_default_timezone_set("Asia/Calcutta");
  $time = date("h:i a");
  $insert = $qm->insertRecord("notificationhistory", "msg,date,time,type", "'" . $msg . "','" . $date . "','" . $time . "','user'");
  
  $_SESSION['alert_msg'] .= "<div class='msg_success'>User added successfully</div>";
  header("location:customer.php");
  exit;
}
?>

<head>
  <?php include("include/head.php"); ?>

</head>

<body onload="hideLoader()">
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include("include/sidebar.php"); ?>
      <div class="layout-page">
        <?php include("include/navbar.php") ?><br>
        <div class="content-wrapper px-4">
          <div class="row">
            <div class="col-12">
              <div class="page-title-header" style="display:flex">
                <h5>
                  <a href="customer.php" style="text-decoration: none;color: black;">User&nbsp;</a>
                  <i class="fa fa-chevron-right"></i> Add User
                </h5>
                <a href="customer.php" class="btn btn-primary"
                  style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <div class="card">
                <div class="card-body">
                  <form class="form-sample" action="" method="Post" enctype="multipart/form-data">
                    <p class="card-description"><b>
                        <CENTER>Add User</CENTER>
                    </p>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nm" required />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" name="em" class="form-control" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Please enter a valid email address" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile</label>
                          <div class="col-sm-9">
                            <input type="mobile" class="form-control" name="mob" required pattern="[0-9]{10}" title="Mobile number should be 10 digits" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <textarea name="addr" class="form-control" required></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 form-password-toggle">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9 input-group">
                          <input
                            type="password"
                            id="password"
                            class="form-control"
                            name="pass"
                            aria-describedby="password" 
                            required/>
                          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <center><br /><button type="submit" name="add" class="btn btn-primary">Add</button>
                          <input type="reset" class="btn btn-danger" value="Reset">
                        </center>
                      </div>
                    </div>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php @include("include/footer.php"); ?>
      </div>
    </div>

  </div>
  <?php @include("include/footer-script.php"); ?>
</body>

</html>