<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
$page_title = "alumni";

if (isset($_POST['add_pro'])) {
  if (!empty($_POST['name']) && !empty($_POST['c_name'])) {
    $image = $_FILES['image']['name'];
    $name = addslashes($_POST['name']);
    $jobPosition = addslashes($_POST['jobPosition']);
    $c_name = addslashes($_POST['c_name']);
    $c_logo = $_FILES['c_logo']['name'];

    if (!empty($_FILES['image']['tmp_name'])) {
      $insert = $qm->insertRecordReturn("alumni", "name,jobPosition,c_name,created_at", "'" . $name . "','" . $jobPosition . "','".$c_name."','" . $getDt . "'");
    }
    if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
      $supported_image = array('gif', 'jpg', 'jpeg', 'png');
      $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
      $Img = time() . "." . $ext;

      if (in_array($ext, $supported_image)) {
        $update = $qm->updateRecordReturn("alumni", "img='" . $Img . "'", "id=" . $insert);
        move_uploaded_file($_FILES["image"]["tmp_name"], UPLOAD_ALUMNIPROFILE_URL . $Img);
      } else {
        echo "<script>alert('Image is not formeted');history.back();</script>";
        exit;
      }
    } 
    if (isset($_FILES['c_logo']['tmp_name']) && !empty($_FILES['c_logo']['tmp_name'])) {
        $supported_image = array('gif', 'jpg', 'jpeg', 'png');
        $ext = strtolower(pathinfo($c_logo, PATHINFO_EXTENSION));
        $Img = time() . "." . $ext;
  
        if (in_array($ext, $supported_image)) {
          $update = $qm->updateRecordReturn("alumni", "c_logo='" . $Img . "'", "id=" . $insert);
          move_uploaded_file($_FILES["c_logo"]["tmp_name"], UPLOAD_ALUMNILOGO_URL . $Img); 
        } else {
          echo "<script>alert('Image is not formeted');history.back();</script>";
          exit;
        }
    } 
    $_SESSION['alert_msg'] .= "<div class='msg_success'>Prominent Alumni added successfully.</div>";
    header("location:alumni.php");
  }
  else {
    echo "<script>alert('Please fill all the detail');history.back();</script>";
    exit;
  }
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
                                    <a href="alumni.php" style="text-decoration: none;color: black;">Prominent
                                        Alumni&nbsp;</a>
                                    <i class="fa fa-chevron-right"></i> Add Prominent Alumni
                                </h5>
                                <a href="alumni.php" class="btn btn-primary"
                                    style="margin-left: auto !important;margin-bottom:20px">Back</a>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form id="ins_form" class="form-sample" action="" method="Post"
                                        enctype="multipart/form-data" accept-charset="utf-8">
                                        <p class="card-iription"><b>
                                                <CENTER>Add Prominent Alumni</CENTER>
                                        </p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Image</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" class="form-control" name="image" id="image"
                                                            accept=".png, .jpg, .jpeg, .img" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Name</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" name="name" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Job Position</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" name="jobPosition"
                                                            accept=".png, .jpg, .jpeg, .img" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Company / Firm Name</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" name="c_name"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Company / Firm Logo</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" class="form-control" name="c_logo"
                                                            accept=".png, .jpg, .jpeg, .img" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <center><br />
                                                    <button type="submit" name="add_pro"
                                                        class="btn btn-primary">Add</button>&nbsp;&nbsp;&nbsp;
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