<DOCTYPE html>
  <?php @include ("include/secureConfig.php");
  $page_title = "testimonial";
  if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $name = $_POST['nm'];
    $designation = $_POST['desi'];
    $review = $_POST['rev'];

    $name = addslashes($name);
    $designation = addslashes($designation);
    $review = addslashes($review);
    $image=$_FILES['image']['name'];

    $sel = $qm->getRecord("testimonial", "*", "id=" . $id);
    if (mysqli_num_rows($sel) > 0) {
      $result = mysqli_fetch_array($sel);
    }
    $res = $qm->updateRecord("testimonial", "nm='" . $name . "',desi='" . $designation . "',rev='" . $review . "'", "id=" . $id);
    if(isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])){
      $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
      $allowd = array("jpg","png","jpeg");
      $Img = time().".".$ext;
      if(in_array($ext,$allowd)) {
        $sel=$qm->getRecord("testimonial","img","id=".$id);
        if(mysqli_num_rows($sel) > 0){
          $result=mysqli_fetch_array($sel);
          unlink(UPLOAD_TESTIMONIAL_URL.$result['img']);
        }
        move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_TESTIMONIAL_URL.$Img);
        $qm->updateRecord("testimonial","img='".$Img."'","id=".$id);
        $_SESSION['alert_msg'] .= "<div class='msg_success'>Testimonial updated successfully.</div>";
        header("location:testimonial.php"); 
        exit;  
      }
      else{
        echo "<script>alert('Image is not formeted');history.back();</script>";
        exit;           
      }
    }
    $_SESSION['alert_msg'] .= "<div class='msg_success'>Testimonial updated Successfully.</div>";
    header("location:testimonial.php");
    exit;
  }
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $res = $qm->getRecord("testimonial", "*", "id=" . $id);
    if (mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_array($res);
    } else {
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
      header("location:testimonial.php");
      exit;
    }
  } else {
    $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
    header("location:testimonial.php");
    exit;
  }
  ?>
  <html lang="en">

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
                    <i class="fa fa-chevron-right"></i> Update Testimonial
                  </h5>
                  <a href="testimonial.php" class="btn btn-primary"
                    style="margin-left: auto !important;margin-bottom:20px">Back</a>
                </div>
                <?php include ("include/loder.php"); ?>
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" action="" method="Post" enctype="multipart/form-data">
                      <p class="card-description"><b>
                          <CENTER>Update Testimonial</CENTER>
                      </p>
                      <input type="hidden" name="id" class="txtField" value="<?php echo $id; ?>">
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <div class="col-sm-12">
                              <center><img src="<?php echo $row["img"]=='' ? TESTIMONIAL_URL.'noimg.png' : (file_exists(UPLOAD_TESTIMONIAL_URL.$row["img"]) ? TESTIMONIAL_URL.$row["img"] :  TESTIMONIAL_URL.'noimg.png'); ?>" style="width:40%"></center>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 mt-3 col-form-label">Image</label>
                              <div class="col-sm-9">
                                <input type="file" class="form-control" name="image" id="image" />
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="nm" value="<?php echo $row['nm']; ?>" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Dasignation</label>
                            <div class="col-sm-9">
                              <input type="text" name="desi" value="<?php echo $row['desi']; ?>" class="form-control">
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
                                style=" float: left;width: 100%;min-height: 75px;outline: none; resize: none;"><?php echo $row['rev']; ?></textarea>
                            </div>
                          </div>
                          <center><br /><button type="submit" name="update" class="btn btn-primary">Update</button>
                            <input type="submit" value="Reset" class="btn btn-danger">
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