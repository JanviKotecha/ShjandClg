<DOCTYPE html>
<?php @include("include/secureConfig.php"); 
  $page_title = "admin_acc";
  if(isset($_POST['update'])){
    $id=$_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $username = addslashes($username); 
    $email = addslashes($email); 
    $phone = addslashes($phone); 

    $sel=$qm->getRecord("user","*","id=".$id);
    if(mysqli_num_rows($sel) > 0){
      $result=mysqli_fetch_array($sel);
    }
    $res=$qm->updateRecord("login","username='".$username."',email='".$email."',phone='".$phone."',updated_at='".$getDt."'","id=".$id);
    $_SESSION['alert_msg'] .= "<div class='msg_success'>Admin user updated successfully.</div>";
    header("location:admin_profile.php"); 
    exit;  
  }
  if(isset($_GET['id']))
  {
    if($_GET['id']!='')
    {
      if(is_numeric($_GET['id']))
      {
        $id=$_GET['id'];
        $res = $qm->getRecord("login","*","id=".$id);
        if(mysqli_num_rows($res) > 0) {
          $row = mysqli_fetch_array($res);
        } 
        else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
          header("location:admin_profile.php");
          exit;
        } 
      }
      else {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
        header("location:admin_profile.php");
        exit;
      }
      }
    else{
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
      header("location:admin_profile.php");
      exit;
    }
  }
  else { ?>
    <script type="text/javascript">
      alert("somthing wrong");
      window.location="admin_profile.php";
    </script>
  <?php exit;
    }
 ?>
<html>
  <head>
    <?php include("include/head.php");?>
  </head>
  <body onload="hideLoader()">
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php include("include/sidebar.php");?>
        <div class="layout-page">
        <?php include("include/navbar.php") ?><br>  
          <div class="content-wrapper px-4">
            <div class="row">
              <div class="col-12">
              <div class="page-title-header " style="display:flex">
                <h5><a href="admin_profile.php" style="text-decoration: none;color: black;">Admin Account&nbsp;</a> <i class="fa fa-chevron-right"></i> Update Admin User</h5>
                <a href="admin_profile.php" class="btn btn-primary" style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <?php include("include/loder.php"); ?>
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" action="" method="Post" enctype="multipart/form-data"> 
                      <p class="card-description"><b><CENTER>Update Admin User</CENTER></p>
                      <input type="hidden" name="id" class="txtField" value="<?php echo $id; ?>">
                      <div class="row">
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">UserName</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" required />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" value="<?php echo $row['email']; ?>"  class="form-control" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Please enter a valid email address" required />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                              <input type="mobile" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" required pattern="[0-9]{10}" title="Mobile number should be 10 digits" />
                            </div>
                          </div>
                        </div>
                         
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <center><br/><button type="submit" name="update"  class="btn btn-primary">Update</button>
                          <input type="reset" name="reset"  class="btn btn-danger" value="Reset">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php @include("include/footer.php");?>
        </div>
      </div>
    </div>
    <?php @include("include/footer-script.php");?>
  </body>
</html> 