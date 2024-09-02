<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
$page_title = "topers";

if (isset($_POST['add_pro'])) {
  if (!empty($_POST['name']) && !empty($_POST['course'])) {
    $id=$_POST['id'];
    $image = $_FILES['image']['name'];
        $name = addslashes($_POST['name']);
        $course = addslashes($_POST['course']);
        $semester = addslashes($_POST['semester']);
        $year = addslashes($_POST['year']);
        $percentage = addslashes($_POST['percentage']);
        $active = addslashes($_POST['active']);
        
        $qm->updateRecord("topers"," name='" . $name . "', 
            course='" . $course . "', 
            semester='" . $semester . "', 
            year='" . $year . "', 
            percentage='" . $percentage . "', 
            active='" . $active . "' ","id=".$id);
    
    if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
      $supported_image = array('gif', 'jpg', 'jpeg', 'png');
      $Img = time() . "." . $ext;

      if (in_array($ext, $supported_image)) {
          $sel=$qm->getRecord("topers","img","id=".$id);
          if(mysqli_num_rows($sel) > 0){
            $result=mysqli_fetch_array($sel);
            unlink(UPLOAD_TOPERS_URL.$result['img']);
          }
          move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_TOPERS_URL.$Img);
          $qm->updateRecord("topers","img='".$Img."'","id=".$id);
          $_SESSION['alert_msg'] .= "<div class='msg_success'>Toper updated successfully.</div>";
          header("location:topers.php");
          exit;  
      } else {
        echo "<script>alert('Image is not formeted');history.back();</script>";
        exit;
      }
    } 
    $_SESSION['alert_msg'] .= "<div class='msg_success'>Toper updated successfully.</div>";
      header("location:topers.php");
      exit;  
  }
  else {
    echo "<script>alert('Please fill all the detail');history.back();</script>";
    exit;
  }
}

if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $res = $qm->getRecord("topers","*","id=".$id);
    if(mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_array($res);
    } else {
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
      header("location:topers.php");
      exit;
    } 
  } else {
    $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
    header("location:topers.php");
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
                                    <a href="topers.php" style="text-decoration: none;color: black;">Topers&nbsp;</a>
                                    <i class="fa fa-chevron-right"></i> Update Toper
                                </h5>
                                <a href="topers.php" class="btn btn-primary"
                                    style="margin-left: auto !important;margin-bottom:20px">Back</a>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form id="ins_form" class="form-sample" action="" method="Post"
                                        enctype="multipart/form-data" accept-charset="utf-8">
                                        <p class="card-iription"><b>
                                                <CENTER>Update Toper</CENTER>
                                        </p>
                                        <input type="hidden" name="id" class="txtField" value="<?php echo $id; ?>">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <center><img
                                                                src="<?php echo $row["img"]=='' ? TOPERS_URL.'noimg.png' : (file_exists(UPLOAD_TOPERS_URL.$row["img"]) ? TOPERS_URL.$row["img"] :  TOPERS_URL.'noimg.png'); ?>"
                                                                style="width:40%"></center>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-form-label">Image</label>
                                                        <div class="col-sm-12">
                                                            <input type="file" class="form-control" name="image"
                                                                id="image" accept=".png, .jpg, .jpeg, .img" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-form-label">Name</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="name"
                                                                value="<?php echo $row['name']; ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-form-label">Course</label>
                                                        <?php
                                                            // Fetch course data from the database
                                                            $courses = $qm->getRecord("course", "c_name");
                                                        ?>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="course" required>
                                                                <option value="">Select Course</option>
                                                                <?php
                                                                    // Loop through the fetched courses and populate the dropdown
                                                                    foreach ($courses as $course) {
                                                                        $selected = ($row['course'] == $course['c_name']) ? 'selected' : '';
                                                                        echo "<option value='" . $course['c_name'] . "' $selected>" . $course['c_name'] . "</option>";
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Semester</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" name="semester" required>
                                                            <option value=""
                                                                <?php if (empty($row['semester'])) echo 'selected'; ?>>
                                                                Select Semester</option>
                                                            <option value="Sem-1"
                                                                <?php if ($row['semester'] == 'Sem-1') echo 'selected'; ?>>
                                                                Sem-1</option>
                                                            <option value="Sem-2"
                                                                <?php if ($row['semester'] == 'Sem-2') echo 'selected'; ?>>
                                                                Sem-2</option>
                                                            <option value="Sem-3"
                                                                <?php if ($row['semester'] == 'Sem-3') echo 'selected'; ?>>
                                                                Sem-3</option>
                                                            <option value="Sem-4"
                                                                <?php if ($row['semester'] == 'Sem-4') echo 'selected'; ?>>
                                                                Sem-4</option>
                                                            <option value="Sem-5"
                                                                <?php if ($row['semester'] == 'Sem-5') echo 'selected'; ?>>
                                                                Sem-5</option>
                                                            <option value="Sem-6"
                                                                <?php if ($row['semester'] == 'Sem-6') echo 'selected'; ?>>
                                                                Sem-6</option>
                                                            <option value="Sem-7"
                                                                <?php if ($row['semester'] == 'Sem-7') echo 'selected'; ?>>
                                                                Sem-7</option>
                                                            <option value="Sem-8"
                                                                <?php if ($row['semester'] == 'Sem-8') echo 'selected'; ?>>
                                                                Sem-8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Year</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" name="year"
                                                            value="<?php echo $row['year']; ?>" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Percentage</label>
                                                    <div class="col-sm-12">
                                                        <input type="number" class="form-control" name="percentage"
                                                            min="0" max="100" value="<?php echo $row['percentage']; ?>"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Active</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" name="active" required>
                                                            <option value="1"
                                                                <?php if ($row['active'] == 1) echo 'selected'; ?>>Yes
                                                            </option>
                                                            <option value="0"
                                                                <?php if ($row['active'] == 0) echo 'selected'; ?>>No
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <center><br />
                                                    <button type="submit" name="add_pro"
                                                        class="btn btn-primary">Update</button>&nbsp;&nbsp;&nbsp;
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
            alert('topers description is required.');
        }
    });
    </script>
</body>

</html>