<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
$page_title = "a_students";

if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $res = $qm->getRecord("admission","*","id=".$id);
    if(mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_array($res);
    } else {
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
      header("location:AdmissionStudents.php");
      exit;
    } 
  } else {
    $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
    header("location:AdmissionStudents.php");
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
                                    <a href="AdmissionStudents.php"
                                        style="text-decoration: none;color: black;">Students&nbsp;</a>
                                    <i class="fa fa-chevron-right"></i> Student Details
                                </h5>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="topDetails d-flex justify-content-between">
                                        <div class="left">
                                            <span class="badge bg-label-success me-1 my-1 p-2"><b>Application No. -
                                                    <?php echo htmlspecialchars($row['application_no']); ?></b></span>
                                            <br><span class="badge bg-label-success me-1 my-1 p-2"><b>Admission For -
                                                    <?php echo htmlspecialchars($row['course_type']); ?></b></span>

                                        </div>
                                        <div class="right">
                                            <?php
                                                $status = $row['status'];
                                                        
                                                if ($status == 1) {
                                                    $statusText = "Approved";
                                                    $statusClass = "bg-label-success";
                                                } else {
                                                    $statusText = "Pending";
                                                    $statusClass = "bg-label-warning"; 
                                                }
                                            ?>
                                            <span
                                                class="badge <?php echo $statusClass; ?> me-1 p-2"><b><?php echo $statusText; ?></b></span>

                                            <p class="mt-1">
                                                <a href="<?php echo ADMISSIONPDF . $row['pdf_url']; ?>" target="_blank"
                                                    class="btn btn-primary">View Application PDF</a>
                                            </p>
                                        </div>
                                    </div>

                                    <hr>
                                    <h5 class="card-iription"><b>
                                            <CENTER>Personal Details</CENTER>

                                    </h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><b>Applicant Name:</b>
                                                <?php echo htmlspecialchars($row['applicant_name']); ?></p>
                                            <p><b>Date of Birth:</b>
                                                <?php echo htmlspecialchars($row['birthdate']); ?></p>
                                            <p><b>Father's Name:</b>
                                                <?php echo htmlspecialchars($row['fathers_name']); ?></p>
                                            <p><b>Parents' Mobile No:</b>
                                                <?php echo htmlspecialchars($row['parents_mobile_no']); ?></p>
                                            <p><b>Category:</b> <?php echo htmlspecialchars($row['category']); ?></p>
                                            <p><b>Nationality:</b> <?php echo htmlspecialchars($row['nationality']); ?>
                                            </p>
                                            <p><b>Locality:</b> <?php echo htmlspecialchars($row['locality']); ?></p>
                                            <p><b>Religion:</b> <?php echo htmlspecialchars($row['religion']); ?></p>
                                            <p><b>Aadhar Number:</b>
                                                <?php echo htmlspecialchars($row['aadhar_number']); ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><b>Email:</b> <?php echo htmlspecialchars($row['email']); ?></p>
                                            <p><b>Mobile No:</b>
                                                <?php echo htmlspecialchars($row['mobile_no']); ?></p>
                                            <p><b>Mother's Name:</b>
                                                <?php echo htmlspecialchars($row['mothers_name']); ?></p>
                                            <p><b>Number of Siblings:</b>
                                                <?php echo htmlspecialchars($row['no_of_siblings']); ?></p>
                                            <p><b>Gender:</b> <?php echo htmlspecialchars($row['gender']); ?></p>
                                            <p><b>Disability:</b> <?php echo htmlspecialchars($row['disability']); ?>
                                            </p>
                                            <?php if (strtolower($row['disability']) === 'yes') : ?>
                                            <p><b>Disability Percentage:</b>
                                                <?php echo htmlspecialchars($row['disability_percentage']); ?></p>
                                            <?php if (!empty($row['disability_certificate'])): ?>
                                            <p><b>Disability Certificate:</b> <a
                                                    href="<?php echo DISABILITYCERTIFICATE_URL . htmlspecialchars($row['disability_certificate']); ?>"
                                                    target="_blank" class="btn btn-primary">View Disability
                                                    Certificate</a>
                                            </p>
                                            <?php endif; ?>
                                            <?php endif; ?>
                                            <p><b>Minority:</b> <?php echo $row['is_minority'] ? 'Yes' : 'No'; ?></p>
                                        </div>
                                    </div>

                                    <hr>
                                    <h5 class="card-iription"><b>
                                            <CENTER>Address Details</CENTER>
                                    </h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="card-iription"><b>Present Address</b> </h6>
                                            <p><b>Address:</b>
                                                <?php echo htmlspecialchars($row['present_address']); ?></p>
                                            <p><b>State:</b>
                                                <?php echo htmlspecialchars($row['present_state']); ?></p>
                                            <p><b>District:</b>
                                                <?php echo htmlspecialchars($row['present_district']); ?></p>
                                            <p><b>Taluka:</b>
                                                <?php echo htmlspecialchars($row['present_taluka']); ?></p>
                                            <p><b>Pincode:</b>
                                                <?php echo htmlspecialchars($row['present_pincode']); ?></p>

                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="card-iription"><b>Permanent Address</b> </h6>
                                            <p><b>Address:</b>
                                                <?php echo htmlspecialchars($row['permanent_address']); ?></p>
                                            <p><b>State:</b>
                                                <?php echo htmlspecialchars($row['permanent_state']); ?></p>
                                            <p><b>District:</b>
                                                <?php echo htmlspecialchars($row['permanent_district']); ?></p>
                                            <p><b>Taluka:</b>
                                                <?php echo htmlspecialchars($row['permanent_taluka']); ?></p>
                                            <p><b>Pincode:</b>
                                                <?php echo htmlspecialchars($row['permanent_pincode']); ?></p>

                                        </div>
                                    </div>

                                    <hr>
                                    <h5 class="card-iription"><b>
                                            <CENTER>Academic Details</CENTER>
                                    </h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="card-iription"><b>HSC / Diploma Details</b> </h6>
                                            <p><b>HSC Diploma:</b> <?php echo htmlspecialchars($row['hsc_diploma']); ?>
                                            </p>
                                            <p><b>HSC Board:</b> <?php echo htmlspecialchars($row['hsc_board']); ?></p>
                                            <p><b>HSC Passing Year:</b>
                                                <?php echo htmlspecialchars($row['hsc_passing_year']); ?></p>
                                            <p><b>HSC Seat No:</b> <?php echo htmlspecialchars($row['hsc_seat_no']); ?>
                                            </p>
                                            <p><b>HSC Percentage:</b>
                                                <?php echo htmlspecialchars($row['hsc_percentage']); ?></p>
                                            <p><b>HSC Marksheet:</b> <a
                                                    href="<?php echo HSCRESULT_URL . $row['hsc_marksheet']; ?>"
                                                    target="_blank" class="btn btn-primary">View HSC Marksheet</a></p>

                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="card-iription"><b>SSC Details</b> </h6>
                                            <p><b>SSC Board:</b> <?php echo htmlspecialchars($row['ssc_board']); ?></p>
                                            <p><b>SSC Passing Year:</b>
                                                <?php echo htmlspecialchars($row['ssc_passing_year']); ?></p>
                                            <p><b>SSC Seat No:</b> <?php echo htmlspecialchars($row['ssc_seat_no']); ?>
                                            </p>
                                            <p><b>SSC Percentage:</b>
                                                <?php echo htmlspecialchars($row['ssc_percentage']); ?></p>
                                            <p><b>SSC Marksheet:</b> <a
                                                    href="<?php echo SSCRESULT_URL . $row['ssc_marksheet']; ?>"
                                                    target="_blank" class="btn btn-primary">View SSC Marksheet</a></p>

                                        </div>
                                    </div>
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
            alert('topers description is required.');
        }
    });
    </script>
</body>

</html>