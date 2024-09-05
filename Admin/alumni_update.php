<DOCTYPE html>
    <?php @include("include/secureConfig.php"); 
  $page_title = "alumni";
  if(isset($_POST['update'])) {
    if (!empty($_POST['name']) && !empty($_POST['jobPosition'])) {
      $id=$_POST['id'];
      $image = $_FILES['image']['name'];
    $name = addslashes($_POST['name']);
    $jobPosition = addslashes($_POST['jobPosition']);
    $c_name = addslashes($_POST['c_name']);
    $c_logo = $_FILES['c_logo']['name'];
      $qm->updateRecord("alumni","name='".$name."',jobPosition='".$jobPosition."',c_name='".$c_name."',updated_at='".$getDt."'","id=".$id);
      
      if(isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])){
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $allowd = array("jpg","png","jpeg","gif");
        $Img = time().".".$ext;
        if(in_array($ext,$allowd)) {
          $sel=$qm->getRecord("alumni","img","id=".$id);
          if(mysqli_num_rows($sel) > 0){
            $result=mysqli_fetch_array($sel);
            unlink(UPLOAD_ALUMNIPROFILE_URL.$result['image']);
          }
          move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_ALUMNIPROFILE_URL.$Img);
          $qm->updateRecord("alumni","img='".$Img."'","id=".$id);
        }
        else{
        echo "<script>alert('Image is not formeted');history.back();</script>";
        exit;           
        }
      }
      if(isset($_FILES['c_logo']['tmp_name']) && !empty($_FILES['c_logo']['tmp_name'])){
        $ext = strtolower(pathinfo($_FILES['c_logo']['name'], PATHINFO_EXTENSION));
        $allowd = array("jpg","png","jpeg","gif");
        $Img = time().".".$ext;
        if(in_array($ext,$allowd)) {
          $sel=$qm->getRecord("alumni","c_logo","id=".$id);
          if(mysqli_num_rows($sel) > 0){
            $result=mysqli_fetch_array($sel);
            unlink(UPLOAD_ALUMNILOGO_URL.$result['c_logo']);
          }
          move_uploaded_file($_FILES['c_logo']['tmp_name'],UPLOAD_ALUMNILOGO_URL.$Img);
          $qm->updateRecord("alumni","c_logo='".$Img."'","id=".$id);
           
        }
        else{
        echo "<script>alert('Image is not formeted');history.back();</script>";
        exit;           
        }
      }
      $_SESSION['alert_msg'] .= "<div class='msg_success'>Prominent Alumni updated successfully.</div>";
      header("location:alumni.php");
      exit;  
  } else {
    echo "<script>alert('Please select the category');history.back();</script>";
    exit; } 
  }  
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $res = $qm->getRecord("alumni","*","id=".$id);
    if(mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_array($res);
    } else {
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
      header("location:alumni.php");
      exit;
    } 
  } else {
    $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
    header("location:alumni.php");
    exit;
  }
?>
    <html lang="en">

    <head>
        <?php include("include/head.php");?>
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
                                        <i class="fa fa-chevron-right"></i> Update Prominent Alumni
                                    </h5>
                                    <a href="alumni.php" class="btn btn-primary"
                                        style="margin-left: auto !important;margin-bottom:20px">Back</a>
                                </div>
                                <?php include("include/loder.php"); ?>
                                <div class="card">
                                    <div class="card-body">
                                        <form id="ins_form" class="form-sample" action="" method="Post"
                                            enctype="multipart/form-data">
                                            <p class="card-description"><b>
                                                    <CENTER>Update Prominent Alumni</CENTER>
                                            </p>
                                            <input type="hidden" name="id" class="txtField" value="<?php echo $id; ?>">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <center><img
                                                                    src="<?php echo $row["img"]=='' ? ALUMNIPROFILE_URL.'noimg.png' : (file_exists(UPLOAD_ALUMNIPROFILE_URL.$row["img"]) ? ALUMNIPROFILE_URL.$row["img"] :  ALUMNIPROFILE_URL.'noimg.png'); ?>"
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
                                                                    id="image" accept=".png, .jpg, .jpeg, .img" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 mt-3 col-form-label">Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="name"
                                                                    value="<?php echo $row['name']; ?>" required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3  col-form-label">Job Position</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="jobPosition"
                                                                    value="<?php echo $row['jobPosition']; ?>" 
                                                                    required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <!-- Joining Date Input -->
                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-form-label">Company / Firm
                                                                Name</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" name="c_name"
                                                                    value="<?php echo $row['c_name']; ?>" required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-form-label">Company / Firm
                                                                Logo</label>
                                                            <div class="col-sm-12">
                                                                <input type="file" class="form-control" name="c_logo" accept=".png, .jpg, .jpeg, .img" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <center><img
                                                                        src="<?php echo $row["c_logo"]=='' ? ALUMNILOGO_URL.'noimg.png' : (file_exists(UPLOAD_ALUMNILOGO_URL.$row["c_logo"]) ? ALUMNILOGO_URL.$row["c_logo"] :  ALUMNILOGO_URL.'noimg.png'); ?>"
                                                                        style="width:40%"></center>
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

    </body>

    </html>