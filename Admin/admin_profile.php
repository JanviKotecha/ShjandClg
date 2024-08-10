<!DOCTYPE html>
  <?php include("include/secureConfig.php");
    $page_title = "admin_acc";
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
                  <h3 class="card-title">Admin Detail </h3>
                  <div class="row mt-5">
                  <?php 
                        $result = $qm->getRecord("login");
                        if (mysqli_num_rows($result) > 0) {
                          $i = 0;
                            while($row = mysqli_fetch_array($result)) {
                              $i++; 
                            ?>
                            <div class="col-md-12 my-1">
                              <div class="card px-3 py-4">
                                <div class="crd-top d-flex justify-content-end">
                                    <a class="btn btn-primary mx-1 my-1 width" href="admin_profile_update.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a>
                                    <!-- <a class="btn btn-danger mx-1 my-1" href="faq.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure');"><i class="fa fa-trash"></i></a> -->
                                 </div>
                                <p><b>Username :</b> <?php echo $row['username']; ?></p>
                                <p><b>Email :</b> <?php echo $row['email']; ?></p>
                                <p><b>Phone :</b> <?php echo $row['phone']; ?></p>
                                <p><b>Created_at :</b> <?php echo $row['dt']; ?></p>
                                <p><b>Updated_at :</b> <?php echo $row['updated_at']; ?></p>
                              </div> 
                            </div>
                          <?php } 
                        } else { ?>
                          <tr>
                            <td colspan="12"><center><b>No Record Found</b></center></td>
                          </tr>
                        <?php } ?>
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
      $('#admin_table').DataTable({
        "pageLength": 10, // Initial number of entries per page
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], // Control number of entries per page
      });
    });
  </script>
</body>
</html>
