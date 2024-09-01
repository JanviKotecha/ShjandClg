<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
$page_title = "Faculty";

if (isset($_POST['add_pro'])) {
  if (!empty($_POST['fname']) && !empty($_POST['fdegree'])) {
    $image = $_FILES['image']['name'];
    $fname = addslashes($_POST['fname']);
    $fdegree = addslashes($_POST['fdegree']);
    $joining_date = addslashes($_POST['joining_date']);
    $resign_date = addslashes($_POST['resign_date']);
   // $dt = $_POST['dt'];
    if (!empty($_FILES['image']['tmp_name'])) {
      $insert = $qm->insertRecordReturn("faculty", "faculty_name,faculty_degree,joinig_date,resign_date,created_at", "'" . $fname . "','" . $fdegree . "','".$joining_date."','".$resign_date."','" . $getDt . "'");
    }
    if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
      $supported_image = array('gif', 'jpg', 'jpeg', 'png');
      $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
      $Img = time() . "." . $ext;

      if (in_array($ext, $supported_image)) {
        $update = $qm->updateRecordReturn("faculty", "faculty_iamge='" . $Img . "'", "id=" . $insert);
        move_uploaded_file($_FILES["image"]["tmp_name"], UPLOAD_FACULTY_URL . $Img);
        $_SESSION['alert_msg'] .= "<div class='msg_success'>Faculty added successfully.</div>";
        header("location:faculty.php");

      } else {
        echo "<script>alert('Image is not formeted');history.back();</script>";
        exit;
      }
    } 
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
                                    <a href="faculty.php"
                                        style="text-decoration: none;color: black;">Faculty&nbsp;</a>
                                    <i class="fa fa-chevron-right"></i> Add Faculty
                                </h5>
                                <a href="faculty.php" class="btn btn-primary"
                                    style="margin-left: auto !important;margin-bottom:20px">Back</a>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form id="ins_form" class="form-sample" action="" method="Post"
                                        enctype="multipart/form-data" accept-charset="utf-8">
                                        <p class="card-iription"><b>
                                                <CENTER>Add Faculty</CENTER>
                                        </p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Faculty Image</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" class="form-control" name="image" id="image"
                                                            accept=".png, .jpg, .jpeg, .img" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Faculty Name</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" name="fname" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Faculty Degree</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" name="fdegree"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Joining Date Input -->
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Joining Date</label>
                                                    <div class="col-sm-12">
                                                        <input type="date" class="form-control" name="joining_date"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Resign Date Input -->
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Resign Date</label>
                                                    <div class="col-sm-12">
                                                        <input type="date" class="form-control" name="resign_date"
                                                             />
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

    <script>
    CKEDITOR.replace('desc', {
        placeholder: 'desc*'
    });
    </script>

    <!-- Form submission validation for description editor -->
    <script>
    document.getElementById('ins_form').addEventListener('submit', function(event) {
        var descriptionValue = CKEDITOR.instances['desc'].getData().trim();
        if (!descriptionValue) {
            event.preventDefault();
            alert('Faculty description is required.');
        }
    });
    </script>
</body>

</html>