<DOCTYPE html>
<?php @include("include/secureConfig.php"); 
  $page_title = "instructors";
  if(isset($_POST['update'])) {
    if(!empty($_POST['iname']) && !empty($_POST['idesi']) && !empty($_POST['desc'])) {
      $id=$_POST['id'];
      $image=$_FILES['image']['name'];
      $iname=addslashes($_POST['iname']);
      $idesi=addslashes($_POST['idesi']);
      $idesc=addslashes($_POST['desc']);
      $qm->updateRecord("instructor","instructor_name='".$iname."',instructor_designation='".$idesi."',instructor_description='".$idesc."',updated_at='".$getDt."'","id=".$id);
      
      if(isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])){
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $allowd = array("jpg","png","jpeg","gif");
        $Img = time().".".$ext;
        if(in_array($ext,$allowd)) {
          $sel=$qm->getRecord("instructor","instructor_iamge","id=".$id);
          if(mysqli_num_rows($sel) > 0){
            $result=mysqli_fetch_array($sel);
            unlink(UPLOAD_PROFILE_URL.$result['instructor_iamge']);
          }
          move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_PROFILE_URL.$Img);
          $qm->updateRecord("instructor","instructor_iamge='".$Img."'","id=".$id);
          $_SESSION['alert_msg'] .= "<div class='msg_success'>instructor updated successfully.</div>";
          header("location:instructors.php");
          exit;  
        }
        else{
        echo "<script>alert('Image is not formeted');history.back();</script>";
        exit;           
        }
      }
      $_SESSION['alert_msg'] .= "<div class='msg_success'>instructor updated successfully.</div>";
      header("location:instructors.php");
      exit;  
  } else {
    echo "<script>alert('Please select the category');history.back();</script>";
    exit; } 
  }  
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $res = $qm->getRecord("instructor","*","id=".$id);
    if(mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_array($res);
    } else {
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
      header("location:instructors.php");
      exit;
    } 
  } else {
    $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
    header("location:instructors.php");
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
                  <a href="instructors.php" style="text-decoration: none;color: black;">instructors&nbsp;</a>
                  <i class="fa fa-chevron-right"></i> Update instructor
                </h5>
                <a href="instructors.php" class="btn btn-primary"
                  style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <?php include("include/loder.php"); ?>
              <div class="card">
                  <div class="card-body">
                    <form id="ins_form" class="form-sample" action="" method="Post" enctype="multipart/form-data"> 
                      <p class="card-description"><b><CENTER>Update instructor</CENTER></p>
                      <input type="hidden" name="id" class="txtField" value="<?php echo $id; ?>">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group row">
                            <div class="col-sm-12">
                              <center><img src="<?php echo $row["Instructor_iamge"]=='' ? PROFILE_URL.'noimg.png' : (file_exists(UPLOAD_PROFILE_URL.$row["Instructor_iamge"]) ? PROFILE_URL.$row["Instructor_iamge"] :  PROFILE_URL.'noimg.png'); ?>" style="width:40%"></center>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 mt-3 col-form-label">Image</label>
                              <div class="col-sm-9">
                                <input type="file" class="form-control" name="image" id="image" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 mt-3 col-form-label">instructor Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="iname" value="<?php echo $row['Instructor_name']; ?>" required />
                              </div>
                            </div>
                          </div>
                         
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3  col-form-label">instructor Designation</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="idesi" value="<?php echo $row['Instructor_designation']; ?>" required />
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                              <!-- <label class="col-sm-12 mt-3 col-form-label">instructor Description</label> -->
                              <div class="col-sm-12 mt-3">
                                <textarea class="form-control" id="desc"  name="desc" style=" float: left;width: 100%;min-height: 75px;outline: none; resize: none;"><?php echo $row['Instructor_description']; ?></textarea>
                              </div>
                            </div>
                          </div>
                      </div>
                      <center><br/><button type="submit" name="update"  class="btn btn-primary">Update</button>
                      <button type="submit" name="reset"  class="btn btn-danger">Reset</button>
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
                alert('Instructor description is required.');
            }
        });
  </script>
  </body>
</html> 