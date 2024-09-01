<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
$page_title = "event";
if (isset($_POST['add'])) {
    $id=$_POST['id'];
  $image = $_FILES['image']['name'];
  $title = $_POST['title'];
  $link = $_POST['link'];
  $event_category = $_POST['event_category'];

  $title = addslashes($title);
  $link = addslashes($link);
  $event_category = addslashes($event_category);

  $qm->updateRecord("events","event_category='".$event_category."',title='".$title."',link='".$link."',updated_at='".$getDt."'","id=".$id);

  if(isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])){
    $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    $allowd = array("jpg","png","jpeg","gif");
    $Img = time().".".$ext;
    if(in_array($ext,$allowd)) {
      $sel=$qm->getRecord("events","img","id=".$id);
      if(mysqli_num_rows($sel) > 0){
        $result=mysqli_fetch_array($sel);
        unlink(UPLOAD_EVENTS_URL.$result['img']);
      }
      move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_EVENTS_URL.$Img);
      $qm->updateRecord("events","img='".$Img."'","id=".$id);
      $_SESSION['alert_msg'] .= "<div class='msg_success'>Event updated successfully.</div>";
      header("location:events.php");
      exit;  
    }
    else{
    echo "<script>alert('Image is not formeted');history.back();</script>";
    exit;           
    }
  }
  $_SESSION['alert_msg'] .= "<div class='msg_success'>Event updated successfully.</div>";
  header("location:events.php");
  exit;  
}

if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $res = $qm->getRecord("events","*","id=".$id);
    if(mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_array($res);
    } else {
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
      header("location:events.php");
      exit;
    } 
  } else {
    $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
    header("location:events.php");
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
                                    <a href="events.php" style="text-decoration: none;color: black;">Events&nbsp;</a>
                                    <i class="fa fa-chevron-right"></i> Add Event
                                </h5>
                                <a href="events.php" class="btn btn-primary"
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
                                            <!-- <div class="col-md-6">
                        Note* : This is compulsory prefix for url, after prefix url add Video Id <br> 'https://www.youtube.com/embed/'
                          <p>Example :- https://www.youtube.com/embed/b5ccGgvEkns</p>
                      </div> -->
                                        </div>
                                        <br>
                                        <div class="row">
                                            <input type="hidden" name="id" class="txtField"
                                                value="<?php echo $row['id']; ?>">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Event Category</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="event_category" required>
                                                            <option value="">Select Category</option>
                                                            <option value="General"
                                                                <?php echo ($row['event_category'] == 'General') ? 'selected' : ''; ?>>
                                                                General</option>
                                                            <option value="College Activity"
                                                                <?php echo ($row['event_category'] == 'College Activity') ? 'selected' : ''; ?>>
                                                                College Activity</option>
                                                            <option value="College Celebration"
                                                                <?php echo ($row['event_category'] == 'College Celebration') ? 'selected' : ''; ?>>
                                                                College Celebration</option>
                                                            <option value="Newspaper Highlights"
                                                                <?php echo ($row['event_category'] == 'Newspaper Highlights') ? 'selected' : ''; ?>>
                                                                Newspaper Highlights</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="title"
                                                            value="<?php echo $row['title']; ?>" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Link</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="link"
                                                            value="<?php echo $row['link'] ?>" pattern="https?://.+" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Img</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" name="image" id="image"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <center><img
                                                                src="<?php echo $row["img"]=='' ? EVENTS_URL.'noimg.png' : (file_exists(UPLOAD_EVENTS_URL.$row["img"]) ? EVENTS_URL.$row["img"] : EVENTS_URL.'noimg.png'); ?>"
                                                                style="width : 40%;" /></center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <center><br /><button type="submit" name="add"
                                                        class="btn btn-primary">Update</button>
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