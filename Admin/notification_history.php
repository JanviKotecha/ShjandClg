<!DOCTYPE html>
<?php include("include/secureConfig.php"); 
    if (isset($_GET['id'])) {
        if ($_GET['id'] != '') {
            if (is_numeric($_GET['id'])) {
                $id=$_GET['id'];
                $res = $qm->getRecord("notificationhistory", "*", "id=" . $_GET['id']);
                if (mysqli_num_rows($res) > 0) {
                    // delete notification
                    $result = $qm->deleteRecord("notificationhistory", "id='" . $id . "'");
                    $result = mysqli_fetch_array($res);
                    $_SESSION['alert_msg'] .= "<div class='msg_success'>Notification deleated successfully.</div>";
                    header("location:notification_history.php"); 
                    exit;
                }
            }
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
                            <?php include ("include/alert_msg.php"); ?>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Notification History</h3>
                                    <div class="row mt-5">
                                        <table class="notificationListTable w-100 table table-striped" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Message</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th class="text-center pl-0 ">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                            $result = $qm->getRecord("notificationhistory", "*", "", "ORDER BY id DESC");

                                            if (mysqli_num_rows($result) > 0) {
                                                $count = 1;
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $url;
                                                    switch ($row['type']) {
                                                        case "user":
                                                            $url="customer.php";
                                                            break;
                                                        case "member_user":
                                                            $url="membership_user.php";
                                                            break;
                                                        default:
                                                            $url= "dashbord.php";
                                                    }
                                            ?>

                                                <tr>
                                                    <td onclick="redirectTo('<?php echo $url; ?>')">
                                                        <?php echo $count++; ?></td>
                                                    <td onclick="redirectTo('<?php echo $url; ?>')">
                                                        <?php echo $row['msg']; ?>
                                                    </td>
                                                    <td onclick="redirectTo('<?php echo $url; ?>')">
                                                        <?php echo $row['date']; ?>
                                                    </td>
                                                    <td onclick="redirectTo('<?php echo $url; ?>')">
                                                        <?php echo $row['time']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-danger"
                                                            href="notification_history.php?id=<?php echo $row['id']; ?>"
                                                            onclick="return confirm('Are you sure');">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>

                                                </tr>
                                                <?php
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>

                                        <script>
                                        function redirectTo(url) {
                                            window.location.href = `${url}`;
                                        }
                                        </script>
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

</body>

</html>