<?php include("include/secureConfig.php");
    $page_title = "notification";
    if(isset($_GET['id']))
    {
      if($_GET['id']!='') {
        if(is_numeric($_GET['id'])) {
          $res=$qm->getRecord("notification","*","id=".$_GET['id']);
          if(mysqli_num_rows($res)>0) {
            $qm->deleteRecord("notification","id=".$_GET['id']);
            $result=mysqli_fetch_array($res);
            $_SESSION['alert_msg'] .= "<div class='msg_success'>Notification deleated successfully.</div>";
            header("location:notification.php"); 
            exit;
        }else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
          header("location:notification.php");
          exit;
        }
        } else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
          header("location:notification.php");
          exit;
        }
      } else  {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
        header("location:notification.php");
        exit;
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // for course publish update
      if(isset($_POST['isChecked']) && isset($_POST['notificationId'])) {
        $isChecked = $_POST['isChecked'];
        $notificationId = $_POST['notificationId'];
    
        $res = $qm->updateRecord(
          "notification",
          "n_is_send='". $isChecked."'",
          "id=".$notificationId
        );
        
        $_SESSION['alert_msg'] .= "<div class='msg_success'>Notification Send successfully.</div>";
        echo json_encode(['status' => 'success', 'message' => 'Notification Send successfully']);
        // header("location: notification.php");
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
<?php include ("include/alert_msg.php"); ?>
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Notification Detail 
                    <a href="notification_add.php" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i></a>
                  </h3>
                  <div class="table-responsive">
                    <table id="customer_table" class="table table-striped" >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Notification Thumbnail</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Created_at</th>
                          <th>Updated_at</th>
                          <th><center>Action</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $result = $qm->getRecord("notification");
                        if (mysqli_num_rows($result) > 0) {
                          $i=0;
                          while   ($row = mysqli_fetch_array($result)) { 
                            $i++;?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['n_thumbnill']; ?></td>
                                <td><?php echo $row['n_title']; ?></td>
                                <td><?php echo $row['n_decription']; ?></td>
                                <td><?php
                                    $is_sent = $row['n_is_send'];
                                    if ($is_sent === 'true') {
                                      ?>
                                      <span style="font-weight: bold; color: green;">Sent<i class="menu-icon tf-icons bx bx-check" style="font-weight :bold; font-size:24px;"></i></span>
                                      <?php
                                    } else {
                                        ?>
                                        <div class="custom-control custom-switch toggle-switch">
                                            <input type="checkbox" class="custom-control-input" id="publishToggle_<?php echo $row['id']; ?>" <?php echo ($row['n_is_send'] == 'true') ? 'checked' : ''; ?>>
                                            <label class="custom-control-label" for="publishToggle_<?php echo $row['id']; ?>"></label>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row['n_created_at']; ?></td>
                                <td><?php echo $row['n_updated_at'];?></td>
                                <td>
                                    <a class="btn btn-primary width" href="notification_update.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger width" href="notification.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure');"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                          <?php } 
                        } else { ?>
                          <tr>
                            <td colspan="12"><center><b>No Record Found</b></center></td>
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
    $(document).ready( function () {
      $('#customer_table').DataTable({
        "pageLength": 10, // Initial number of entries per page
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], // Control number of entries per page
      });
    });
  </script>

  <!-- for update notification Send status using ajax -->
  <script>
      $(document).ready(function() {
          $('input[type="checkbox"]').change(function() {
              // var isChecked = $(this).prop("checked") ? 1 : 0;
              var notificationId = $(this).attr("id").split("_")[1];
              var isChecked = $(this).is(':checked');
              var sendValue = isChecked ? 'true' : 'false';

              $.ajax({
                  url: '<?php echo $_SERVER['PHP_SELF']; ?>',
                  method: 'POST',
                  data: { isChecked: sendValue, notificationId: notificationId },
                  success: function(response) {
                    var responseData = JSON.parse(response);
                    console.log("res---", responseData);
                    if (responseData.status === 'success') {
                        location.reload(); 
                    } else {
                      location.reload();
                    }
                  },
                  error: function(xhr, status, error) {
                      console.error("error",xhr.responseText);
                  }
              });
          });
      });
    </script>
</body>
</html>
