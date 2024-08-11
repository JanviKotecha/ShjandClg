<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
$page_title = "instructors";

if (isset($_POST['add_pro'])) {
  if (!empty($_POST['iname']) && !empty($_POST['idesc']) && !empty($_POST['idesi'])) {
    $image = $_FILES['image']['name'];
    $iname = addslashes($_POST['iname']);
    $idesi = addslashes($_POST['idesi']);
    $idesc = addslashes($_POST['idesc']);
   // $dt = $_POST['dt'];
    if (!empty($_FILES['image']['tmp_name'])) {
      $insert = $qm->insertRecordReturn("instructor", "Instructor_name,Instructor_designation,Instructor_description,add_date", "'" . $iname . "','" . $idesi . "','" . $idesc . "','" . $getDt . "'");
    }
    if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
      $supported_image = array('gif', 'jpg', 'jpeg', 'png');
      $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
      $Img = time() . "." . $ext;

      if (in_array($ext, $supported_image)) {
        $update = $qm->updateRecordReturn("instructor", "Instructor_iamge='" . $Img . "'", "id=" . $insert);
        move_uploaded_file($_FILES["image"]["tmp_name"], UPLOAD_PROFILE_URL . $Img);
        $_SESSION['alert_msg'] .= "<div class='msg_success'>Instructor added successfully.</div>";
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
                  <a href="faculty.php" style="text-decoration: none;color: black;">instructors&nbsp;</a>
                  <i class="fa fa-chevron-right"></i> Add instructor
                </h5>
                <a href="faculty.php" class="btn btn-primary"
                  style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <div class="card">
                <div class="card-body">
                  <form id="ins_form" class="form-sample" action="" method="Post" enctype="multipart/form-data"
                    accept-charset="utf-8">
                    <p class="card-iription"><b>
                        <CENTER>Add instructor</CENTER>
                    </p>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">instructor Image</label>
                          <div class="col-sm-12">
                            <input type="file" class="form-control" name="image" id="image" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">instructor Name</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="iname" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">instructor Designation</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="idesi" required />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">instructor Description</label>
                          <div class="col-sm-12">
                            <textarea class="form-control" name="idesc" id="desc"
                              style=" float: left;width: 100%;min-height: 75px;outline: none; resize: none;"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <center><br />
                          <button type="submit" name="add_pro" class="btn btn-primary">Add</button>&nbsp;&nbsp;&nbsp;
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
                alert('Instructor description is required.');
            }
        });
  </script>
</body>

</html>