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
                                        style="text-decoration: none;color: black;">Admission Students&nbsp;</a>
                                    <i class="fa fa-chevron-right"></i> Student Details
                                </h5>
                                <a href="AdmissionStudents.php" class="btn btn-primary"
                                    style="margin-left: auto !important;margin-bottom:20px">Back</a>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="topDetails d-flex justify-content-end">
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

                                    </div>
                                    <hr>
                                    <h5 class="card-iription"><b>
                                            <CENTER>Personal Details</CENTER>
                                    </h5>
                                    <hr>

                                    <hr>
                                    <h5 class="card-iription"><b>
                                            <CENTER>Address Details</CENTER>
                                    </h5>
                                    <hr>

                                    <hr>
                                    <h5 class="card-iription"><b>
                                            <CENTER>Academic Details</CENTER>
                                    </h5>
                                    <hr>
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