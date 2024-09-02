<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
  $page_title = "course";
  if (isset($_POST['add']))
  {

    $c_name = addslashes($_POST['c_name']);
    $c_subtitle = addslashes($_POST['c_subtitle']);
    $duration = addslashes($_POST['c_duration']);
    $eligibility = addslashes($_POST['c_eligibility']);
    $medium = addslashes($_POST['c_medium']);
    $objective = addslashes($_POST['c_objective']);
    $after_graduation = addslashes($_POST['c_after_graduation']);

    $image = $_FILES['image']['name'];

    if (!empty($_FILES['image']['tmp_name'])) {
        $insert = $qm->insertRecordReturn(
            "course",
            "c_img, c_name, c_subtitle, duration, eligibility, medium, objective, after_graduation, created_at",
            "'$Img', '$c_name', '$c_subtitle', '$duration', '$eligibility', '$medium', '$objective', '$after_graduation', '$getDt'"
        );    }
    if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
        $supported_image = array('gif', 'jpg', 'jpeg', 'png');
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $Img = time() . "." . $ext;
  
        if (in_array($ext, $supported_image)) {
          $update = $qm->updateRecordReturn("course", "c_img='" . $Img . "'", "id=" . $insert);
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
                                <a href="course.php" class="btn btn-primary"
                                    style="margin-left: auto !important;">Back</a>
                            </div>
                        </div>
                    </div>
                    <?php include("include/loder.php"); ?>
                    <div class="card">
                        <div class="card-body">
                            <form id="course_form" class="form-sample" action="" method="post"
                                enctype="multipart/form-data">
                                <p class="card-description"><b>
                                        <center>Add Course</center>
                                    </b></p>

                                <div class="row">
                                    <!-- Course Image -->
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Course Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="image" name="image"
                                                    accept=".jpg, .jpeg, .png, .svg" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Course Name -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="c_name" name="c_name"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Course Subtitle -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Course Subtitle</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="c_subtitle"
                                                    name="c_subtitle" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Duration -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Duration</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="c_duration"
                                                    name="c_duration" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Medium -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Medium</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="c_medium" name="c_medium" required>
                                                    <option value="">Select Medium</option>
                                                    <option value="English">English</option>
                                                    <option value="Gujarati">Gujarati</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Eligibility -->
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Eligibility</label>
                                            <div class="col-sm-10">
                                                <textarea id="c_eligibility" class="form-control" name="c_eligibility"
                                                    placeholder="Eligibility" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Objective of the Course -->
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Objective of the Course</label>
                                            <div class="col-sm-10">
                                                <textarea id="c_objective" class="form-control" name="c_objective"
                                                    placeholder="Objective of the Course" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- After Graduation -->
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">After Graduation</label>
                                            <div class="col-sm-10">
                                                <textarea id="c_after_graduation" class="form-control"
                                                    name="c_after_graduation" placeholder="After Graduation"
                                                    required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <!-- Submit and Reset Buttons -->
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