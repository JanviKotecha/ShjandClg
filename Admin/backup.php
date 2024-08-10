<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
  $page_title = "backup";
     
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
                                    <i class="fa fa-chevron-right"></i> Course Backup Update
                                </h5>
                                <!-- <a href="course.php" class="btn btn-primary" style="margin-left: auto !important;">Back</a> -->
                            </div>
                        </div>
                    </div>
                    <?php include("include/loder.php"); ?>
                    <div class="card">
                        <div class="card-body">
                            <form class="form-sample" action="" method="Post" enctype="multipart/form-data">
                                <p class="card-description"><b> <CENTER>Backup Update</CENTER> </p>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Select Course</label>
                                            <?php 
                                                $result = $qm->getRecord("course");

                                                if (mysqli_num_rows($result) > 0) {
                                                ?>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" id="course" name="course_id" required>
                                                            <option value="" selected disabled>Select Course</option>

                                                            <?php
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                ?>
                                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['c_title']; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                <?php
                                                } else {
                                                    ?>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" id="course" name="course_id" required>
                                                            <option value="" disabled>No Course Found</option>
                                                        </select>
                                                    </div>
                                                    <?php  
                                                }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Course Video</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="c_backup" name="c_backup_v" />
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

</body>

</html>