<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
  $page_title = "course";
  if (isset($_POST['add']))
  {

    $c_title=$_POST['c_title'];
    $c_date=$_POST['c_date'];
    $c_time=$_POST['timerange'];
    $instructor=$_POST['instructor'];
    $description=$_POST['description'];
    // $c_thumbnail = $_POST['c_thumbnail'];

    $is_free = $_POST['is_free'];
    $c_m_price = $_POST['c_m_price'];
    $c_nm_price = $_POST['c_nm_price'];

    $c_metting_link = $_POST['c_metting_link'];
    $c_metting_id = $_POST['c_metting_id'];
    $c_metting_pass = $_POST['c_metting_pass'];

    $c_title = addslashes($c_title); 
    $c_date = addslashes($c_date); 
    $c_time = addslashes($c_time); 
    $description = addslashes($description);
    // $c_thumbnail = addslashes($c_thumbnail); 

    $is_free = addslashes($is_free); 
    $c_m_price = addslashes($c_m_price); 
    $c_nm_price = addslashes($c_nm_price);
    
    $c_metting_link = addslashes($c_metting_link); 
    $c_metting_id = addslashes($c_metting_id); 
    $c_metting_pass = addslashes($c_metting_pass); 
    $image = $_FILES['image']['name'];

    $instructor = implode(",", $instructor);
    if (!empty($_FILES['image']['tmp_name'])) {
        $insert=$qm->insertRecordReturn("course","instructor_id, c_title, c_date,c_time, c_description, c_thumbnail, c_is_free, c_withoutmembership_price, c_membership_price, c_metting_link, c_metting_id, c_metting_pass, created_at","'".$instructor."','".$c_title."','".$c_date."','".$c_time."','".$description."','".$c_thumbnail."','".$is_free."','".$c_nm_price."','".$c_m_price."','".$c_metting_link."','".$c_metting_id."','".$c_metting_pass."','".$getDt."'");
    }
    if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
        $supported_image = array('gif', 'jpg', 'jpeg', 'png');
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $Img = time() . "." . $ext;
  
        if (in_array($ext, $supported_image)) {
          $update = $qm->updateRecordReturn("course", "c_thumbnail='" . $Img . "'", "id=" . $insert);
          move_uploaded_file($_FILES["image"]["tmp_name"], UPLOAD_COURSE_URL . $Img);
          $_SESSION['alert_msg'] .= "<div class='msg_success'>Course added successfully.</div>";
          header("location:course.php");
  
        } else {
          echo "<script>alert('Image is not formeted');history.back();</script>";
          exit;
        }
      }  
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
                                    <i class="fa fa-chevron-right"></i> Add Course
                                </h5>
                                <a href="course.php" class="btn btn-primary" style="margin-left: auto !important;">Back</a>
                            </div>
                        </div>
                    </div>
                    <?php include("include/loder.php"); ?>
                    <div class="card">
                        <div class="card-body">
                            <form id="course_form" class="form-sample" action="" method="Post" enctype="multipart/form-data">
                                <p class="card-description"><b> <CENTER>Add Course</CENTER> </p>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control wizard-required" id="c_title" name="c_title" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Select Instructor</label>
                                            <?php 
                                                $result = $qm->getRecord("instructor", "id, Instructor_name");

                                                if (mysqli_num_rows($result) > 0) {
                                                ?>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" id="instructor" name="instructor[]" multiple required>
                                                            <?php
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                ?>
                                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['Instructor_name']; ?></option>
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
                                                <input class="form-control" placeholder="Course Date" id="c_date" name="c_date" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Time</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="timerange" class="form-control" id="time-range" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Course Thumbnail</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="c_thumbnail" name="image" />
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">Description</label>
                                            <div class="col-sm-12">
                                            <textarea id="description" class="form-control" name="description" placeholder="Description*"></textarea><br><br>
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
                                                <input type="checkbox" id="is_free" name="is_free" onchange="togglePriceInputs()">
                                                <label for="is_free"></label>
                                            </div>
                                            <input type="hidden" id="is_free_hidden" name="is_free" value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="priceInputs">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Price for Member User</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control price-input" id="c_m_price" name="c_m_price" required >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Price for Non Member User</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control price-input" id="c_nm_price" name="c_nm_price" required>
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
                                                <input type="text" class="form-control" id="c_metting_link" name="c_metting_link" pattern="https?://.+" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Metting Id</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="c_metting_id" name="c_metting_id" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Metting Pass</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="c_metting_pass" name="c_metting_pass" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <center><br /><button type="submit" name="add"
                                                class="btn btn-primary">Add</button>
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
    // $("#c_date").daterangepicker();
        $(function() {
            $('input[name="c_date"]').daterangepicker({
                opens: 'center',
                timePicker: false,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'DD-MM-YYYY'
                }
            });
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