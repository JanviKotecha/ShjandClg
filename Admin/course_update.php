<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
  $page_title = "course";
  if (isset($_POST['add']))
  {
    $id=$_POST['id'];
    $c_name = addslashes($_POST['c_name']);
    $c_subtitle = addslashes($_POST['c_subtitle']);
    $duration = addslashes($_POST['duration']);
    $eligibility = addslashes($_POST['eligibility']);
    $medium = addslashes($_POST['medium']);
    $objective = addslashes($_POST['objective']);
    $after_graduation = addslashes($_POST['after_graduation']);

    $update = $qm->updateRecord(
        "course",
        "c_name='".$c_name."', ".
        "c_subtitle='".$c_subtitle."', ".
        "duration='" . $duration . "', " .
        "eligibility='" . $eligibility . "', " .
        "medium='" . $medium . "', " .
        "objective='" . $objective . "', " .
        "after_graduation='" . $after_graduation . "', " .
        "updated_at='".$getDt."'",
        "id=".$id
    );
    if(isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])){
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $allowd = array("jpg","png","jpeg","gif");
        $Img = time().".".$ext;
        if(in_array($ext,$allowd)) {
          $sel=$qm->getRecord("course","c_img","id=".$id);
          if(mysqli_num_rows($sel) > 0){
            $result=mysqli_fetch_array($sel);
            unlink(UPLOAD_COURSE_URL.$result['c_img']);
          }
          move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_COURSE_URL.$Img);
          $qm->updateRecord("course","c_img='".$Img."'","id=".$id);
          $_SESSION['alert_msg'] .= "<div class='msg_success'>Course updated successfully.</div>";
          header("location:course.php");
          exit;  
        }
        else{
        echo "<script>alert('Image is not formeted');history.back();</script>";
        exit;           
        }
      }
    $_SESSION['alert_msg'] .= "<div class='msg_success'>Course Update successfully</div>";
    header("location:course.php"); 
    exit;  
  }   
  
  if(isset($_GET['id']))
  {
    if($_GET['id']!='')
    {
      if(is_numeric($_GET['id']))
      {
        $id=$_GET['id'];
        $res = $qm->getRecord("course","*","id=".$id);
        if(mysqli_num_rows($res) > 0) {
          $row = mysqli_fetch_array($res);
        } 
        else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
          header("location:course.php");
          exit;
        } 
      }
      else {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
        header("location:course.php");
        exit;
      }
      }
    else{
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
      header("location:course.php");
      exit;
    }
  }
  else { ?>
<script type="text/javascript">
alert("somthing wrong");
window.location = "course.php";
</script>
<?php exit;
    }
?>

<head>
    <?php include("include/head.php");?>
</head>

<body onload="hideLoader()">
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include("include/sidebar.php");?>
            <div class="layout-page">
                <?php include("include/navbar.php") ?><br>
                <div class="content-wrapper px-4">
                    <div class="row page-title-header mb-2">
                        <div class="col-12">
                            <div class="page-header d-flex align-items-center">
                                <h5 class="mb-0">
                                    <a href="course.php" style="text-decoration: none;color: black;">Course&nbsp;</a>
                                    <i class="fa fa-chevron-right"></i> Update Course
                                </h5>
                                <a href="course.php" class="btn btn-primary"
                                    style="margin-left: auto !important;">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form id="course_form" class="form-sample" action="" method="Post"
                                enctype="multipart/form-data">
                                <p class="card-description"><b>
                                        <CENTER>Update Course</CENTER>
                                </p>
                                <input type="hidden" name="id" class="txtField" value="<?php echo $id; ?>">

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Course Thumbnail</label>
                                            <div class="col-md-4">
                                                <img src="<?php echo $row["c_img"]=='' ? COURSE_URL.'noimg.png' : (file_exists(UPLOAD_COURSE_URL.$row["c_img"]) ? COURSE_URL.$row["c_img"] :  COURSE_URL.'noimg.png'); ?>"
                                                    style="width:20%">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Choose Thumbnail</label>
                                            <div class="col-md-4">
                                                <input type="file" class="form-control" id="image" name="image" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="c_name" name="c_name"
                                                    value="<?php echo $row['c_name'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Subtitle</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="c_subtitle"
                                                    value="<?php echo $row['c_subtitle'] ?>" name="c_subtitle" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Duration</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="duration" name="duration"
                                                    value="<?php echo $row['duration'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Medium</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="medium" name="medium" required>
                                                    <option value="English"
                                                        <?php echo ($row['medium'] == 'English') ? 'selected' : ''; ?>>
                                                        English</option>
                                                    <option value="Gujarati"
                                                        <?php echo ($row['medium'] == 'Gujarati') ? 'selected' : ''; ?>>
                                                        Gujarati</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Eligibility</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="eligibility" name="eligibility"
                                                    rows="4" required><?php echo $row['eligibility'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Objective of the Course</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="objective" name="objective" rows="4"
                                                    required><?php echo $row['objective'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">After Graduation</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="after_graduation"
                                                    name="after_graduation" rows="4"
                                                    required><?php echo $row['after_graduation'] ?></textarea>
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
                <?php @include("include/footer.php");?>
            </div>
        </div>

    </div>
    <?php @include("include/footer-script.php");?>

    <!-- for instructor -->
    <script>
    $(document).ready(function() {
        $('#instructor').select2({
            placeholder: 'Select Instructor*',
            allowClear: true
        });
    });
    </script>

    <!-- for editor -->
    <script>
    CKEDITOR.replace('description', {
        placeholder: 'Description*'
    });
    </script>

    <!-- for date picker -->
    <script>
    $(function() {
        // Get the initial date from PHP
        var initialDate = '<?php echo $row['c_date']; ?>';
        var dateRange = initialDate.split(' - ');

        var startDateString = dateRange[0].trim();
        var endDateString = dateRange[1].trim();

        // Parse the start date using Moment.js
        var parsedStartDate = moment(startDateString, 'DD-MM-YYYY');
        var parsedEndDate = moment(endDateString, 'DD-MM-YYYY');

        // Check if the initial date is valid
        if (parsedStartDate.isValid()) {
            var formattedStartDate = parsedStartDate.format('DD-MM-YYYY');
            var formattedEndDate = parsedEndDate.format('DD-MM-YYYY');

            // Initialize the date range picker
            $('input[name="c_date"]').daterangepicker({
                opens: 'center',
                timePicker: false,
                startDate: formattedStartDate,
                endDate: formattedEndDate,
                locale: {
                    format: 'DD-MM-YYYY'
                }
            });

        } else {
            // Handle invalid initial date here
            console.error('Invalid initial date:', initialDate);
        }
    });
    </script>

    <!-- for time picker -->
    <script>
    $(function() {
        $('input[name="timerange"]').daterangepicker({
            opens: 'center',
            timePicker: true,
            timePickerIncrement: 5, // Adjust time interval as needed
            timePicker24Hour: false, // Set to false to display AM/PM format
            locale: {
                format: 'hh:mm A' // Use 'hh:mm A' format for AM/PM
            }
        }, function(start, end, label) {
            console.log("A new time selection was made: " + start.format('hh:mm A') + ' to ' + end
                .format('hh:mm A'));
        }).on('show.daterangepicker', function(ev, picker) {
            picker.container.find(".calendar-table").hide();
        });
    });
    </script>

    <!-- FOR PRICE HIDE WHEN COURSE FREE -->
    <script>
    function togglePriceInputs() {
        var isFreeCheckbox = document.getElementById('is_free');
        var priceInputs = document.getElementById('priceInputs');
        var isFreeHidden = document.getElementById('is_free_hidden');

        if (isFreeCheckbox.checked) {
            isFreeHidden.value = "1";
            // If the course is free, hide price inputs and remove the required attribute
            priceInputs.style.display = 'none';
            document.getElementById('c_m_price').removeAttribute('required');
            document.getElementById('c_nm_price').removeAttribute('required');
        } else {
            isFreeHidden.value = "0";
            // If the course is not free, show price inputs and add the required attribute
            priceInputs.style.display = 'flex';
            document.getElementById('c_m_price').setAttribute('required', 'required');
            document.getElementById('c_nm_price').setAttribute('required', 'required');
        }
    }
    window.onload = togglePriceInputs;
    </script>
    <!-- Form submission validation for description editor -->
    <script>
    document.getElementById('course_form').addEventListener('submit', function(event) {
        var descriptionValue = CKEDITOR.instances['description'].getData().trim();
        if (!descriptionValue) {
            event.preventDefault();
            alert('Course description is required.');
        }
    });
    </script>

</body>

</html>