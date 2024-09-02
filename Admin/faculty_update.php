<DOCTYPE html>
    <?php @include("include/secureConfig.php"); 
  $page_title = "faculty";
  if(isset($_POST['update'])) {
    if (!empty($_POST['fname']) && !empty($_POST['fdegree'])) {
      $id=$_POST['id'];
      $image = $_FILES['image']['name'];
      $fname = addslashes($_POST['fname']);
      $fdegree = addslashes($_POST['fdegree']);
      $joining_date = addslashes($_POST['joining_date']);
      $resign_date = addslashes($_POST['resign_date']);
      $qm->updateRecord("faculty","faculty_name='".$fname."',faculty_degree='".$fdegree."',joinig_date='".$joining_date."',resign_date='".$resign_date."',updated_at='".$getDt."'","id=".$id);
      
      if(isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])){
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $allowd = array("jpg","png","jpeg","gif");
        $Img = time().".".$ext;
        if(in_array($ext,$allowd)) {
          $sel=$qm->getRecord("faculty","faculty_iamge","id=".$id);
          if(mysqli_num_rows($sel) > 0){
            $result=mysqli_fetch_array($sel);
            unlink(UPLOAD_FACULTY_URL.$result['faculty_iamge']);
          }
          move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_FACULTY_URL.$Img);
          $qm->updateRecord("faculty","faculty_iamge='".$Img."'","id=".$id);
          $_SESSION['alert_msg'] .= "<div class='msg_success'>Faculty updated successfully.</div>";
          header("location:faculty.php");
          exit;  
        }
        else{
        echo "<script>alert('Image is not formeted');history.back();</script>";
        exit;           
        }
      }
      $_SESSION['alert_msg'] .= "<div class='msg_success'>Faculty updated successfully.</div>";
      header("location:faculty.php");
      exit;  
  } else {
    echo "<script>alert('Please select the category');history.back();</script>";
    exit; } 
  }  
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $res = $qm->getRecord("faculty","*","id=".$id);
    if(mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_array($res);
    } else {
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
      header("location:faculty.php");
      exit;
    } 
  } else {
    $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
    header("location:faculty.php");
    exit;
  }
?>
    <html lang="en">

    <head>
        <?php include("include/head.php");?>
    </head>

    <body onload="hideLoader()">
        = <div class="layout-wrapper layout-content-navbar">
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
                                        <i class="fa fa-chevron-right"></i> Update Faculty
                                    </h5>
                                    <a href="faculty.php" class="btn btn-primary"
                                        style="margin-left: auto !important;margin-bottom:20px">Back</a>
                                </div>
                                <?php include("include/loder.php"); ?>
                                <div class="card">
                                    <div class="card-body">
                                        <form id="ins_form" class="form-sample" action="" method="Post"
                                            enctype="multipart/form-data">
                                            <p class="card-description"><b>
                                                    <CENTER>Update Faculty</CENTER>
                                            </p>
                                            <input type="hidden" name="id" class="txtField" value="<?php echo $id; ?>">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <center><img
                                                                    src="<?php echo $row["faculty_iamge"]=='' ? FACULTY_URL.'noimg.png' : (file_exists(UPLOAD_FACULTY_URL.$row["faculty_iamge"]) ? FACULTY_URL.$row["faculty_iamge"] :  FACULTY_URL.'noimg.png'); ?>"
                                                                    style="width:40%"></center>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 mt-3 col-form-label">Image</label>
                                                            <div class="col-sm-9">
                                                                <input type="file" class="form-control" name="image"
                                                                    id="image" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 mt-3 col-form-label">Faculty
                                                                Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="fname"
                                                                    value="<?php echo $row['faculty_name']; ?>"
                                                                    required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3  col-form-label">Faculty
                                                                Degree</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="fdegree"
                                                                    value="<?php echo $row['faculty_degree']; ?>"
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
                                                                <input type="date" class="form-control"
                                                                    name="joining_date"
                                                                    value="<?php echo $row['joinig_date']; ?>"
                                                                    required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Resign Date Input -->
                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-form-label">Resign Date</label>
                                                            <div class="col-sm-12">
                                                                <input type="date" class="form-control"
                                                                    name="resign_date"
                                                                    value="<?php echo $row['resign_date']; ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <center><br /><button type="submit" name="update"
                                                    class="btn btn-primary">Update</button>
                                                <button type="submit" name="reset" class="btn btn-danger">Reset</button>
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