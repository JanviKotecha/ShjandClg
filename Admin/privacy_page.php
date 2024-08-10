<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
    $page_title = "privacy";
    if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];

        $title = addslashes($title);
        $description = addslashes($description);

        $insert = $qm->updateRecord("privacy", "title='".$title."',description='".$description."',updated_at='".$getDt."'","");
    
        $_SESSION['alert_msg'] .= "<div class='msg_success'>Privacy update successfully</div>";
        header("location:privacy_page.php");
        exit;
    }

    $res = $qm->getRecord("privacy");
    if(mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_array($res);
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
                  <a href="privacy_page.php" style="text-decoration: none;color: black;">CMS&nbsp;</a>
                  <i class="fa fa-chevron-right"></i> Privacy Policy
                </h5>
                
              </div>
              <?php include("include/loder.php"); ?>
              <?php include ("include/alert_msg.php"); ?>
              <div class="card">
                <div class="card-body">
                  <form id="privacy_form" class="form-sample" action="" method="Post" enctype="multipart/form-data">
                    <p class="card-description"><b>
                        <CENTER>Privacy Policy</CENTER>
                    </p>
                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Title</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" required />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Description</label>
                          <div class="col-sm-12">
                            <textarea name="description" class="form-control" id="description" required><?php echo $row['description']; ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <center><br /><button type="submit" name="update" class="btn btn-primary">Update</button>
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

  <!-- for editor -->
  <script>
    CKEDITOR.replace('description', {
        placeholder: 'Description'
    });
    </script>

    <!-- Form submission validation for description editor -->
    <script>
        document.getElementById('privacy_form').addEventListener('submit', function(event) {
            var descriptionValue = CKEDITOR.instances['description'].getData().trim();
            if (!descriptionValue) {
                event.preventDefault();
                alert('Description is required.');
            }
        });
  </script>
</body>

</html>