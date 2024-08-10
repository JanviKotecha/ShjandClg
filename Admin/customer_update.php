<DOCTYPE html>
<?php @include("include/secureConfig.php"); 
  $page_title = "info";
  if(isset($_POST['update'])){
    $id=$_POST['id'];
    $nm=$_POST['nm'];
    $ema=$_POST['em'];
    $mob=$_POST['mob'];
    $addr=$_POST['addr'];

    $nm = addslashes($nm); 
    $ema = addslashes($ema); 
    $mob = addslashes($mob); 
    $addr = addslashes($addr);

    $sel=$qm->getRecord("user","*","id=".$id);
    if(mysqli_num_rows($sel) > 0){
      $result=mysqli_fetch_array($sel);
    }
    $res=$qm->updateRecord("user","nm='".$nm."',eml='".$ema."',mob='".$mob."',addr='".$addr."',updAt='".$getDt."'","id=".$id);
    $_SESSION['alert_msg'] .= "<div class='msg_success'>Customer updated successfully.</div>";
    header("location:customer.php"); 
    exit;  
  }
  if(isset($_GET['id']))
  {
    if($_GET['id']!='')
    {
      if(is_numeric($_GET['id']))
      {
        $id=$_GET['id'];
        $res = $qm->getRecord("user","*","id=".$id);
        if(mysqli_num_rows($res) > 0) {
          $row = mysqli_fetch_array($res);
        } 
        else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
          header("location:customer.php");
          exit;
        } 
      }
      else {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
        header("location:customer.php");
        exit;
      }
      }
    else{
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
      header("location:customer.php");
      exit;
    }
  }
  else { ?>
    <script type="text/javascript">
      alert("somthing wrong");
      window.location="customer.php";
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
                <h5><a href="customer.php" style="text-decoration: none;color: black;">User&nbsp;</a> <i class="fa fa-chevron-right"></i> Update User</h5>
                <a href="customer.php" class="btn btn-primary" style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <?php include("include/loder.php"); ?>
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" action="" method="Post" enctype="multipart/form-data"> 
                      <p class="card-description"><b><CENTER>Update User</CENTER></p>
                      <input type="hidden" name="id" class="txtField" value="<?php echo $id; ?>">
                      <div class="row">
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="nm" value="<?php echo $row['nm']; ?>" required />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" name="em" value="<?php echo $row['eml']; ?>" class="form-control" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Please enter a valid email address"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                              <input type="mobile" class="form-control" name="mob" pattern="[0-9]{10}" title="Mobile number should be 10 digits" value="<?php echo $row['mob']; ?>" required />
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" name="addr" required><?php echo $row['addr']; ?></textarea>
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