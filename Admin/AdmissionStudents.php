<?php include("include/secureConfig.php");
$page_title = "a_students";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // for course publish update
    if(isset($_POST['isChecked']) && isset($_POST['a_id'])) {
        $isChecked = $_POST['isChecked'];
        $a_id = $_POST['a_id'];

        $res = $qm->updateRecord(
            "admission",
            "status='". $isChecked."'",
            "id=".$a_id
        );

        $_SESSION['alert_msg'] .= "<div class='msg_success'>Admission Approved successfully.</div>";
        echo json_encode(['status' => 'success', 'message' => 'Admission Approved successfully']);
        exit;
    }
}

if (isset($_GET['id'])) {
    if ($_GET['id'] != '') {
        if (is_numeric($_GET['id'])) {
            $res = $qm->getRecord("admission", "*", "id=" . $_GET['id']);
            if (mysqli_num_rows($res) > 0) {
                $qm->deleteRecord("admission", "id=" . $_GET['id']);
                $result = mysqli_fetch_array($res);
                $_SESSION['alert_msg'] .= "<div class='msg_success'>Admission deleated successfully.</div>";
                header("location:AdmissionStudents.php");
                exit;
            } else {
                $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
                header("location:AdmissionStudents.php");
                exit;
            }
        } else {
            $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
            header("location:AdmissionStudents.php");
            exit;
        }
    } else {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
        header("location:AdmissionStudents.php");
        exit;
    }
}
?>
<html lang="en">

<head>
    <?php include("include/head.php"); ?>

</head>

<body onload="hideLoader()">
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include("include/sidebar.php") ?>
            <!-- / Menu -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php include("include/navbar.php") ?><br>
                <div class="content-wrapper px-4">
                    <div class="row page-title-header ">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <?php include("include/loder.php"); ?>
                            <?php include("include/alert_msg.php"); ?>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Admission Detail</h3>
                                    <div class="table-responsive">
                                        <table id="topers_table" class="table table-striped ">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Course</th>
                                                    <th>Mobile</th>
                                                    <th>Address</th>
                                                    <th>Admission Status</th>
                                                    <th>CreatedAt</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $result = $qm->getRecord("admission","*","status=0", "ORDER BY id DESC");
                                                if (mysqli_num_rows($result) > 0) {
                                                    $i = 0;
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        $i++; ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $i; ?>
                                                    </td>
                                                    <td>
                                                        <div class="avatar me-3">
                                                            <img src="<?php echo $row["profile_photo"]=='' ? PROFILE_URL.'noimg.png' : (file_exists(UPLOAD_PROFILE_URL.$row["profile_photo"]) ? PROFILE_URL.$row["profile_photo"] : PROFILE_URL.'noimg.png'); ?>"
                                                                class="rounded-circle">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['applicant_name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['course_type']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['mobile_no']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['present_address'], " - ", $row['present_taluka']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-switch toggle-switch">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="publishToggle_<?php echo $row['id']; ?>"
                                                                <?php echo ($row['status'] == 1) ? 'checked' : ''; ?>>
                                                            <label class="custom-control-label"
                                                                for="publishToggle_<?php echo $row['id']; ?>"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['createdAt']; ?>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary width"
                                                            href="admissionView.php?id=<?php echo $row['id']; ?>"><i
                                                                class="fa fa-eye"></i></a>
                                                        <a class="btn btn-danger width"
                                                            href="AdmissionStudents.php?id=<?php echo $row['id']; ?>"
                                                            onclick="return confirm('Are you sure');"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php }
                                                } else { ?>
                                                <tr>
                                                    <td colspan="12">
                                                        <center><b>No Record Found</b></center>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include("include/footer.php"); ?>
            </div>
        </div>
    </div>
    <?php include("include/footer-script.php"); ?>
    <!-- Initialize DataTables -->

    <!-- for update publish status using ajax -->
    <script>
    $(document).ready(function() {
        $('input[type="checkbox"]').change(function() {
            var isChecked = $(this).prop("checked") ? 1 : 0;
            var a_id = $(this).attr("id").split("_")[1];

            // Display a confirmation dialog
            var confirmation = confirm("Are you sure you want to approve this admission?");

            // If the user clicks "Yes", send the AJAX request
            if (confirmation) {
                $.ajax({
                    url: '<?php echo $_SERVER['PHP_SELF']; ?>',
                    method: 'POST',
                    data: {
                        isChecked: isChecked,
                        a_id: a_id
                    },
                    success: function(response) {
                        var responseData = JSON.parse(response);
                        console.log("response", responseData);
                        if (responseData.status === 'success') {
                            location.reload();
                        } else {
                            location.reload();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("error", xhr.responseText);
                    }
                });
            } else {
                // If the user clicks "No", revert the checkbox to its original state
                $(this).prop("checked", !isChecked);
            }
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#topers_table').DataTable({
            "pageLength": 10, // Initial number of entries per page
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ], // Control number of entries per page
        });
    });
    </script>
</body>

</html>