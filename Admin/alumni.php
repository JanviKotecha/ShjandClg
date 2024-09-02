<?php include("include/secureConfig.php");
$page_title = "alumni";


if (isset($_GET['id'])) {
    if ($_GET['id'] != '') {
        if (is_numeric($_GET['id'])) {
            $res = $qm->getRecord("alumni", "*", "id=" . $_GET['id']);
            if (mysqli_num_rows($res) > 0) {
                $qm->deleteRecord("alumni", "id=" . $_GET['id']);
                $result = mysqli_fetch_array($res);
                $_SESSION['alert_msg'] .= "<div class='msg_success'>Prominent Alumni deleated successfully.</div>";
                header("location:alumni.php");
                exit;
            } else {
                $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
                header("location:alumni.php");
                exit;
            }
        } else {
            $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
            header("location:alumni.php");
            exit;
        }
    } else {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
        header("location:alumni.php");
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
                                    <h3 class="card-title">Prominent Alumni Detail
                                        <a href="alumni_add.php" class="btn btn-primary" style="float: right;"><i
                                                class="fa fa-plus"></i></a>
                                    </h3>
                                    <div class="table-responsive">
                                        <table id="alumni_table" class="table table-striped ">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Job Position</th>
                                                    <th>Company/ Firm Logo</th>
                                                    <th>Company/ Firm Name</th>
                                                    <th>CreatedAt</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $result = $qm->getRecord("alumni");
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
                                                            <img src="<?php echo $row["img"]=='' ? ALUMNIPROFILE_URL.'noimg.png' : (file_exists(UPLOAD_ALUMNIPROFILE_URL.$row["img"]) ? ALUMNIPROFILE_URL.$row["img"] : ALUMNIPROFILE_URL.'noimg.png'); ?>"
                                                                class="rounded-circle">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['jobPosition']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="avatar me-3">
                                                            <img src="<?php echo $row["c_logo"]=='' ? ALUMNILOGO_URL.'noimg.png' : (file_exists(UPLOAD_ALUMNILOGO_URL.$row["c_logo"]) ? ALUMNILOGO_URL.$row["c_logo"] : ALUMNILOGO_URL.'noimg.png'); ?>"
                                                                class="rounded-circle">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['c_name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['created_at']; ?>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary width"
                                                            href="alumni_update.php?id=<?php echo $row['id']; ?>"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a class="btn btn-danger width"
                                                            href="alumni.php?id=<?php echo $row['id']; ?>"
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
            var courseId = $(this).attr("id").split("_")[1];

            $.ajax({
                url: '<?php echo $_SERVER['PHP_SELF']; ?>',
                method: 'POST',
                data: {
                    isChecked: isChecked,
                    courseId: courseId
                },
                success: function(response) {
                    var responseData = JSON.parse(response);
                    console.log("resposne", responseData);
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
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#alumni_table').DataTable({
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