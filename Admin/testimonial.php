<!DOCTYPE html>
<html lang="en">
<?php @include ("include/secureConfig.php");
$page_title = "testimonial";
if (isset($_GET['id'])) {
  $res = $qm->getRecord("testimonial", "*", "id=" . $_GET['id']);

  if (mysqli_num_rows($res) > 0) {
    $qm->deleteRecord("testimonial", "id=" . $_GET['id']);
    $result = mysqli_fetch_array($res);
    $_SESSION['alert_msg'] .= "<div class='msg_success'>Testimonial deleted successfully.</div>";
    header("location:testimonial.php");
    exit;
  } else {
    $_SESSION['alert_msg'] .= "<div class='msg_error'>Somthing wrong.</div>";
    header("location:dashbord.php");
    exit;
  }
}
?>

<head>
  <?php @include ("include/head.php") ?>
</head>

<body onload="hideLoader()">
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php include ("include/sidebar.php") ?>
      <!-- / Menu -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php include ("include/navbar.php") ?><br>
        <div class="content-wrapper px-4">
          <div class="row page-title-header ">
            <div class="col-lg-12 grid-margin stretch-card">
              <?php include ("include/loder.php"); ?>
              <?php include ("include/alert_msg.php"); ?>
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Testimonial Detail
                    <a href="testimonial_add.php" class="btn btn-primary" style="float: right;"><i
                        class="fa fa-plus"></i></a>
                  </h3>
                  <div class="table-responsive">
                    <table id="instructor_table" class="table table-striped ">
                      <thead>
                        <tr>
                          <th>Profile Picture</th>
                          <th>Name</th>
                          <th>Dasignation</th>
                          <th>Review</th>
                          <th colspan="2" style="text-align:center"> Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $result = $qm->getRecord("testimonial","*","","ORDER BY id DESC");
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                            <td>
                                <div class="avatar me-3">
                                  <img
                                    src="<?php echo $row["img"] == '' ? TESTIMONIAL_URL . 'noimg.png' : (file_exists(UPLOAD_TESTIMONIAL_URL . $row["img"]) ? TESTIMONIAL_URL . $row["img"] : TESTIMONIAL_URL . 'noimg.png'); ?>"
                                    class="rounded-circle">
                                </div>
                              </td>
                              <td>
                                <?php echo $row['nm']; ?>
                              </td>
                              <td>
                                <?php echo $row['desi']; ?>
                              </td>
                              <td>
                                <?php echo $row['rev']; ?>
                              </td>
                              <td><a class="btn btn-primary width" href="testimonial_update.php?id=<?php echo $row['id']; ?>"><i
                                    class="fa fa-edit"></i></a></td>
                              <td><a class="btn btn-danger width" href="testimonial.php?id=<?php echo $row['id']; ?>"
                                  onclick="return confirm('Are you sure');"><i class="fa fa-trash"></i></a></td>
                            </tr>
                          <?php }
                        } else { ?>
                          <tr>
                            <td colspan="5">
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
        <?php @include ("include/footer.php"); ?>
      </div>
    </div>
  </div>
  <?php @include ("include/footer-script.php"); ?>

  <script>
        $(document).ready(function () {
            $('#instructor_table').DataTable({
                "pageLength": 10, // Initial number of entries per page
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], // Control number of entries per page
            });
        });
    </script>
</body>

</html>