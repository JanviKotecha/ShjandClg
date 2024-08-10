<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
$page_title = "notification";
if (isset($_POST['add'])) {
    $n_title = $_POST['n_title'];
    $n_decription = $_POST['n_decription'];
    $n_is_send = 'false';
    $users=$_POST['users'];
  
    $n_title = addslashes($n_title);
    $n_decription = addslashes($n_decription);
    $n_is_send = addslashes($n_is_send);
  
    $users = implode(",", $users);

    $insert = $qm->insertRecord("notification", "n_u_id,n_title,n_decription,n_is_send,n_created_at", "'".$users."','" . $n_title . "','" . $n_decription . "','" . $n_is_send . "','" . $getDt . "'");
    $_SESSION['alert_msg'] .= "<div class='msg_success'>Notification added successfully</div>";
    header("location:notification.php");
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
                                    <a href="notification.php"
                                        style="text-decoration: none;color: black;">Notification&nbsp;</a>
                                    <i class="fa fa-chevron-right"></i> Add Notification
                                </h5>
                                <a href="notification.php" class="btn btn-primary"
                                    style="margin-left: auto !important;margin-bottom:20px">Back</a>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-sample" action="" method="Post" enctype="multipart/form-data">
                                        <p class="card-description"><b>
                                                <CENTER>Add Notification</CENTER>
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Notification
                                                        Thumbnail</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="n_thumbnill"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3"></div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="n_title" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Select Users</label>
                                                    <?php 
                                                        $result = $qm->getRecord("user", "id,nm,is_member");

                                                        if (mysqli_num_rows($result) > 0) {
                                                    ?>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" id="users" name="users[]" multiple required>
                                                            <?php
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                $memberLabel = $row['is_member'] == 'Yes' ? ' (Member user)' : '';

                                                                ?>
                                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['nm'] . $memberLabel; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <?php
                                                        } else {
                                                    ?>
                                                    <?php  
                                                        }
                                                    ?>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Description</label>
                                                    <div class="col-sm-12">
                                                        <textarea name="n_decription" id="n_decription"
                                                            class="form-control" required></textarea>
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
                    </div>
                </div>
                <?php @include("include/footer.php"); ?>
            </div>
        </div>

    </div>
    <?php @include("include/footer-script.php"); ?>

    <!-- Users select multiple -->
    <script>
        $(document).ready(function() {
            $('#users').select2({
                placeholder: 'Select Users',
                allowClear: true
            });
        });
    </script>


</body>

</html>