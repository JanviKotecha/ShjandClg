<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
  $page_title = "course";
  if (isset($_POST['add']))
  {
    $id=$_POST['id'];
    $c_title=$_POST['c_title'];
    $c_date=$_POST['c_date'];
    $c_time=$_POST['timerange'];
    $instructor=$_POST['instructor'];
    $description=$_POST['description'];
    $c_thumbnail = $_POST['c_thumbnail'];

    $is_free = $_POST['is_free'];
    $c_m_price = $_POST['c_m_price'];
    $c_nm_price = $_POST['c_nm_price'];

    $c_metting_link = $_POST['c_metting_link'];
    $c_metting_id = $_POST['c_metting_id'];
    $c_metting_pass = $_POST['c_metting_pass'];

    if ($is_free == 1) {
        $c_nm_price = "";
        $c_m_price = "";
    } else {
        $c_nm_price = $_POST['c_nm_price'];
        $c_m_price = $_POST['c_m_price'];
    }
    
    $c_title = addslashes($c_title); 
    $c_date = addslashes($c_date); 
    $c_time = addslashes($c_time); 
    $description = addslashes($description);
    $c_thumbnail = addslashes($c_thumbnail); 

    $is_free = addslashes($is_free); 
    $c_m_price = addslashes($c_m_price); 
    $c_nm_price = addslashes($c_nm_price);
    
    $c_metting_link = addslashes($c_metting_link); 
    $c_metting_id = addslashes($c_metting_id); 
    $c_metting_pass = addslashes($c_metting_pass); 

    $instructor = implode(",", $instructor);

    $update = $qm->updateRecord(
        "course",
        "instructor_id='".$instructor."', ".
        "c_title='".$c_title."', ".
        "c_date='".$c_date."', ".
        "c_time='".$c_time."', ".
        "c_description='".$description."', ".
        "c_thumbnail='".$c_thumbnail."', ".
        "c_is_free='".$is_free."', ".
        "c_withoutmembership_price='".$c_nm_price."', ".
        "c_membership_price='".$c_m_price."', ".
        "c_metting_link='".$c_metting_link."', ".
        "c_metting_id='".$c_metting_id."', ".
        "c_metting_pass='".$c_metting_pass."', ".
        "updated_at='".$getDt."'",
        "id=".$id
    );
    if(isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])){
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $allowd = array("jpg","png","jpeg","gif");
        $Img = time().".".$ext;
        if(in_array($ext,$allowd)) {
          $sel=$qm->getRecord("course","c_thumbnail","id=".$id);
          if(mysqli_num_rows($sel) > 0){
            $result=mysqli_fetch_array($sel);
            unlink(UPLOAD_COURSE_URL.$result['c_thumbnail']);
          }
          move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_COURSE_URL.$Img);
          $qm->updateRecord("course","c_thumbnail='".$Img."'","id=".$id);
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
      window.location="course.php";
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
                                <a href="course.php" class="btn btn-primary" style="margin-left: auto !important;">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form id="course_form" class="form-sample" action="" method="Post" enctype="multipart/form-data">
                                <p class="card-description"><b> <CENTER>Update Course</CENTER> </p>
                                <input type="hidden" name="id" class="txtField" value="<?php echo $id; ?>">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control wizard-required" id="c_title" name="c_title" required value="<?php echo $row['c_title']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Select Instructor</label>
                                            <?php 
                                            $result = $qm->getRecord("instructor", "id, Instructor_name");

                                            if (mysqli_num_rows($result) > 0) {
                                                $selectedInstructors = explode(",", $row['instructor_id']); 
                                                ?>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="instructor" name="instructor[]" multiple required>
                                                        <?php
                                                        while ($instructor_row = mysqli_fetch_array($result)) {
                                                            $selected = in_array($instructor_row['id'], $selectedInstructors) ? "selected" : ""; 
                                                            ?>
                                                            <option value="<?php echo $instructor_row['id']; ?>" <?php echo $selected; ?>><?php echo $instructor_row['Instructor_name']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <?php
                                            } else {
                                                ?>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="instructor" name="instructor[]" multiple required>
                                                        <option value="" disabled>No Instructors Found</option>
                                                    </select>
                                                </div>
                                                <?php  
                                            }
                                            ?>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Date</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" placeholder="Course Date" id="c_date" name="c_date" required value="<?php echo $row['c_date']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Time</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="timerange" class="form-control" id="time-range" required value="<?php echo $row['c_time']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Course Thumbnail</label>
                                            <div class="col-md-4">
                                                <img src="<?php echo $row["c_thumbnail"]=='' ? COURSE_URL.'noimg.png' : (file_exists(UPLOAD_COURSE_URL.$row["c_thumbnail"]) ? COURSE_URL.$row["c_thumbnail"] :  COURSE_URL.'noimg.png'); ?>" style="width:20%">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Choose Thumbnail</label>
                                            <div class="col-md-4">
                                                <input type="file" class="form-control" id="image" name="image" />
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">Description</label>
                                            <div class="col-sm-12">
                                            <textarea id="description" class="form-control" name="description" placeholder="Description*"><?php echo $row['c_description']; ?></textarea><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">This Course is Free</label>
                                            <div class="col-sm-9 toggle-switch">
                                                <input type="checkbox" id="is_free" name="is_free" onchange="togglePriceInputs()" value="1" <?php echo ($row['c_is_free'] == 1) ? 'checked' : ''; ?> >
                                                <label for="is_free"></label>
                                            </div>
                                            <input type="hidden" id="is_free_hidden" name="is_free" value="<?php echo $row['c_is_free']; ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="priceInputs">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Price for Member User</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control price-input" id="c_m_price" name="c_m_price" required value="<?php echo $row['c_membership_price']; ?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Price for Non Member User</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control price-input" id="c_nm_price" name="c_nm_price" required value="<?php echo $row['c_withoutmembership_price']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Metting Link</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="c_metting_link" name="c_metting_link" pattern="https?://.+" required value="<?php echo $row['c_metting_link']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Metting Id</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="c_metting_id" name="c_metting_id" required value="<?php echo $row['c_metting_id']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Metting Pass</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="c_metting_pass" name="c_metting_pass" required value="<?php echo $row['c_metting_pass']; ?>">
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