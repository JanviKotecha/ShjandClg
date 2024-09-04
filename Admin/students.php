<?php include("include/secureConfig.php");
$page_title = "students";

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
                                    <h3 class="card-title">Students Detail</h3>
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
                                                $result = $qm->getRecord("admission","*","status=1","ORDER BY id DESC");
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