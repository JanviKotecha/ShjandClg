<!DOCTYPE html>
<html lang="en">
<?php @include ("include/secureConfig.php");
$page_title = "testimonial";
if (isset($_POST['add'])) {
  $name = $_POST['nm'];
  $designation = $_POST['desi'];
  $review = $_POST['rev'];
  $image = $_FILES['image']['name'];
  $name = addslashes($name);
  $designation = addslashes($designation);
  $review = addslashes($review);
  if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
    $supported_image = array('jpg', 'jpeg', 'png');
    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $Img = time() . "." . $ext;

    if (in_array($ext, $supported_image)) {
      $true = 'true';

      $insert = $qm->insertRecord("testimonial", "img,nm,desi,rev", "'".$Img."','" . $name . "','" . $designation . "','" . $review . "'");
      move_uploaded_file($_FILES["image"]["tmp_name"], UPLOAD_TESTIMONIAL_URL . $Img);

      $_SESSION['alert_msg'] .= "<div class='msg_success'>Testimonial added Successfully.</div>";
      header("location:testimonial.php");
      exit;
    }
  } else {
    echo "<script>alert('Image is not formeted');history.back();</script>";
    exit;
  }
}
?>

<head>
  <?php include ("include/head.php"); ?>
</head>

<body onload="hideLoader()">
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include ("include/sidebar.php"); ?>
      <div class="layout-page">
        <?php include ("include/navbar.php") ?><br>
        <div class="content-wrapper px-4">
          <div class="row">
            <div class="col-12">
              <div class="page-title-header" style="display:flex">
                <h5>
                  <a href="testimonial.php" style="text-decoration: none;color: black;">Testimonial&nbsp;</a>
                  <i class="fa fa-chevron-right"></i> Add Testimonial
                </h5>
                <a href="testimonial.php" class="btn btn-primary"
                  style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <div class="card">
                <div class="card-body">
                  <form id="ins_form" class="form-sample" action="" method="Post" enctype="multipart/form-data"
                    accept-charset="utf-8">
                    <p class="card-iription"><b>
                        <CENTER>Add Testimonial</CENTER>
                    </p>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Profile Image</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="image" id="image" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nm" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Dasignation</label>
                          <div class="col-sm-12">
                            <input type="text" name="desi" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Review</label>
                          <div class="col-sm-12">
                            <textarea class="form-control" name="rev"
                              style=" float: left;width: 100%;min-height: 75px;outline: none; resize: none;"></textarea>
                          </div>
                        </div>
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
        <?php @include ("include/footer.php"); ?>
      </div>
    </div>

  </div>
  <?php @include ("include/footer-script.php"); ?>
</body>

</html>