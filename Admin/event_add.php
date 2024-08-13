<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
$page_title = "event";
if (isset($_POST['add'])) {
  $image = $_FILES['image']['name'];
  $title = $_POST['title'];
  $link = $_POST['link'];

  $title = addslashes($title);
  $link = addslashes($link);

 
  if (!empty($_FILES['image']['tmp_name'])) {
    $insert = $qm->insertRecordReturn("events", "title,link,created_at", "'" . $title . "','" . $link . "','" . $getDt . "'");
    }
  if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
    $supported_image = array('gif', 'jpg', 'jpeg', 'png');
    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $Img = time() . "." . $ext;

    if (in_array($ext, $supported_image)) {
      $update = $qm->updateRecordReturn("events", "img='" . $Img . "'", "id=" . $insert);
      move_uploaded_file($_FILES["image"]["tmp_name"], UPLOAD_EVENTS_URL . $Img);
      $_SESSION['alert_msg'] .= "<div class='msg_success'>Events added successfully.</div>";
      header("location:events.php");

    } else {
      echo "<script>alert('Image is not formeted');history.back();</script>";
      exit;
    }
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
                  <a href="event.php" style="text-decoration: none;color: black;">Events&nbsp;</a>
                  <i class="fa fa-chevron-right"></i> Add Event
                </h5>
                <a href="event.php" class="btn btn-primary"
                  style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <div class="card">
                <div class="card-body">
                  <form class="form-sample" action="" method="Post" enctype="multipart/form-data">
                    <p class="card-description"><b>
                        <CENTER>Add Event</CENTER>
                    </p>
                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6">
                        Note* : This is compulsory prefix for url, after prefix url add Video Id <br> 'https://www.youtube.com/embed/'
                          <p>Example :- https://www.youtube.com/embed/b5ccGgvEkns</p>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" required />
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Link</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="link" pattern="https?://.+" required />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Img</label>
                          <div class="col-sm-9">
                            <input type="file" name="image" id="image"  class="form-control" required />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
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
        <?php @include("include/footer.php"); ?>
      </div>
    </div>

  </div>
  <?php @include("include/footer-script.php"); ?>
</body>

</html>