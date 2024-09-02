<!DOCTYPE html>
  <?php include("include/secureConfig.php");
    $page_title = "event";
    if(isset($_GET['id']))
    {
      if($_GET['id']!='') {
        if(is_numeric($_GET['id'])) {
          $res=$qm->getRecord("events","*","id=".$_GET['id']);
          if(mysqli_num_rows($res)>0) {
            $qm->deleteRecord("events","id=".$_GET['id']);
            $result=mysqli_fetch_array($res);
            $_SESSION['alert_msg'] .= "<div class='msg_success'>Event deleated successfully.</div>";
            header("location:events.php"); 
            exit;
        }else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
          header("location:events.php");
          exit;
        }
        } else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
          header("location:events.php");
          exit;
        }
      } else  {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
        header("location:events.php");
        exit;
      }
    }
      ?>
<html lang="en">
<head>
  <?php include("include/head.php"); ?>
  <style>
      .c-img{
        width : 80px !important;
        height : 50px  !important;
      }
    </style>
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

                <?php include ("include/alert_msg.php"); ?>
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Event Detail 
                    <a href="event_add.php" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i></a>
                  </h3>
                  <div class="table-responsive">
                    <table id="events_table" class="table table-striped" >
                      
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Category</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Link</th>
                          <th>Date</th>
                          <th><center>Action</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $result = $qm->getRecord("events","*","","ORDER BY id DESC");
                        if (mysqli_num_rows($result) > 0) {
                          $i=0;
                          while($row = mysqli_fetch_array($result)) { 
                            $i++;?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $row['event_category']; ?></td>
                              <td><?php echo $row['title']; ?></td>
                              <td><div><img src="<?php echo $row["img"]=='' ? EVENTS_URL.'noimg.png' : (file_exists(UPLOAD_EVENTS_URL.$row["img"]) ? EVENTS_URL.$row["img"] : EVENTS_URL.'noimg.png'); ?>" class="border c-img" /></div></td>
                              
                              <td><?php echo $row['link']; ?></td>
                              <td><?php echo $row['created_at']; ?></td>
                              <td>
                                <a class="btn btn-primary width" href="event_update.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger width" href="events.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure');"><i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                          <?php } 
                        } else { ?>
                          <tr>
                            <td colspan="6"><center><b>No Record Found</b></center></td>
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
      $('#events_table').DataTable({
        "pageLength": 10, // Initial number of entries per page
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], // Control number of entries per page
      });
    });
  </script>
</body>
</html>
