
  <?php include("include/secureConfig.php");
    $page_title = "course";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // for course publish update
      if(isset($_POST['isChecked']) && isset($_POST['courseId'])) {
        $isChecked = $_POST['isChecked'];
        $courseId = $_POST['courseId'];
    
        $res = $qm->updateRecord(
          "course",
          "is_publish='". $isChecked."'",
          "id=".$courseId
        );
        
        $_SESSION['alert_msg'] .= "<div class='msg_success'>Course updated successfully.</div>";
        echo json_encode(['status' => 'success', 'message' => 'Course updated successfully']);
        // header("location: course.php");
        exit;

      }
    }

    //  for course delete
    if(isset($_GET['id']))
    {
      if($_GET['id']!='') {
        if(is_numeric($_GET['id'])) {
          $res=$qm->getRecord("course","*","id=".$_GET['id']);
          if(mysqli_num_rows($res)>0) {
            $qm->deleteRecord("course","id=".$_GET['id']);
            $result=mysqli_fetch_array($res);
            $_SESSION['alert_msg'] .= "<div class='msg_success'>Course deleated successfully.</div>";
            header("location:course.php"); 
            exit;
        }else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
          header("location:course.php");
          exit;
        }
        } else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
          header("location:course.php");
          exit;
        }
      } else  {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
        header("location:course.php");
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
          <div class="content-wrapper">
            <div class="row page-title-header container-xxl">
              <div class="col-lg-12 grid-margin stretch-card">
              <?php include("include/loder.php"); ?>
                <?php include("include/loder.php"); ?>
                <?php include ("include/alert_msg.php"); ?>
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Course Detail 
                      <a href="course_add.php" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i></a>
                    </h3>
                    <div class="table-responsive">
                      <table id="course_table" class="table table-striped dt-responsive" >
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Course Thumbnail</th>
                            <th>Course Title</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Is Free?</th>
                            <th>Member Price</th>
                            <th>Non Member Price</th>
                            <th>Enroll Student</th>
                            <th>Instructor</th>
                            <th>Course Description</th>
                            <th>Metting Link</th>
                            <th>Metting Id</th>
                            <th>Metting Pass</th>
                            <th>Is Publish?</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $result=$qm->getRecord("course");
                          if (mysqli_num_rows($result)>0) {
                            $i=0;
                            while ($row=mysqli_fetch_array($result)) { 
                              $i++;?>
                              <tr>
                                <td>&nbsp;&nbsp;&nbsp;<?php echo $i; ?></td>
                                <td><img src="<?php echo $row["c_thumbnail"]=='' ? COURSE_URL.'noimg.png' : (file_exists(UPLOAD_COURSE_URL.$row["c_thumbnail"]) ? COURSE_URL.$row["c_thumbnail"] : COURSE_URL.'noimg.png'); ?>" 
                                  class="border c-img">
                                </td>
                                
                                <td><?php echo $row['c_title']; ?></td>
                                <td><?php echo $row['c_date']; ?></td>
                                <td><?php echo $row['c_time']; ?></td>
                                <td><?php echo ($row['c_is_free'] == 1) ? 'Yes' : 'No'; ?></td>
                                <td><span class="badge bg-label-primary me-1 p-2"><b><?php echo $row['c_membership_price'] !== "" ? $row['c_membership_price'] : '--'; ?></b></span></td>
                                <td><span class="badge bg-label-info me-1 p-2"><b><?php echo $row['c_withoutmembership_price'] !== "" ? $row['c_withoutmembership_price'] : '--'; ?></b></span></td>
                                <td><span class="badge bg-label-primary me-1 p-2"><b><?php echo $row['enroll_stud']; ?></b></span></td>
                                <td>
                                    <?php 
                                        $instructor_ids = explode(',', $row['instructor_id']); 
                                        $instructor_names = array();
                                        foreach ($instructor_ids as $instructor_id) {
                                            $instructor_result = $qm->getRecord("instructor", "*", "id = $instructor_id");
                                            $instructor_row = mysqli_fetch_array($instructor_result);
                                            $instructor_names[] = $instructor_row['Instructor_name'];
                                        }
                                        echo implode(', ', $instructor_names);
                                    ?>
                                </td>
                                <td><div class="course-description-card">
                                      <?php echo $row['c_description']; ?>
                                    </div>
                                </td>
                                <td><?php echo $row['c_metting_link']; ?></td>
                                <td><?php echo $row['c_metting_id']; ?></td>
                                <td><?php echo $row['c_metting_pass']; ?></td>
                                
                                <td>
                                    <div class="custom-control custom-switch toggle-switch">
                                        <input type="checkbox" class="custom-control-input" id="publishToggle_<?php echo $row['id']; ?>" <?php echo ($row['is_publish'] == 1) ? 'checked' : ''; ?>>
                                        <label class="custom-control-label" for="publishToggle_<?php echo $row['id']; ?>"></label>
                                    </div>
                                </td>
                                <td><?php echo $row['created_at']; ?></td>
                                <td><?php echo $row['updated_at']; ?></td>
                                <td>
                                    <a class="btn btn-primary width" href="course_update.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger width" href="course.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure');"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                            <?php } 
                          } else  { ?>
                        <tr>
                          <td colspan="9"><center><b>No Record Found</b></center></td>
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

    <!-- for update publish status using ajax -->
    <script>
      $(document).ready(function() {
          $('input[type="checkbox"]').change(function() {
              var isChecked = $(this).prop("checked") ? 1 : 0;
              var courseId = $(this).attr("id").split("_")[1];

              $.ajax({
                  url: '<?php echo $_SERVER['PHP_SELF']; ?>',
                  method: 'POST',
                  data: { isChecked: isChecked, courseId: courseId },
                  success: function(response) {
                    var responseData = JSON.parse(response);
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

    <!-- for data table with pagination -->
    <script>
        $(document).ready( function () {
          $('#course_table').DataTable({
            "pageLength": 10, // Initial number of entries per page
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], // Control number of entries per page
          });
        });
        
    </script>
  </body>
</html>


 
