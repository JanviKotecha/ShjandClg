<!DOCTYPE html>
  <?php include("include/secureConfig.php");
    $page_title = "membership";
    if(isset($_GET['id']))
    {
      if($_GET['id']!='') {
        if(is_numeric($_GET['id'])) {
          $res=$qm->getRecord("u_membership","*","id=".$_GET['id']);
          if(mysqli_num_rows($res)>0) {
            $qm->deleteRecord("u_membership","id=".$_GET['id']);
            $result=mysqli_fetch_array($res);
            $_SESSION['alert_msg'] .= "<div class='msg_success'>Membership User deleated successfully.</div>";
            header("location:membership_user.php"); 
            exit;
        }else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
          header("location:membership_user.php");
          exit;
        }
        } else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
          header("location:membership_user.php");
          exit;
        }
      } else  {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
        header("location:membership_user.php");
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
                  <h3 class="card-title">Membership User Detail</h3>
                  <div class="table-responsive">
                    <table id="membership_table" class="table table-striped dt-responsive" >
                      
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>User Mobile</th>
                          <th>User Address</th>
                          <th>User Ocupation</th>
                          <th>User Profession</th>
                          <th>User City</th>
                          <th>User Pincode</th>
                          <th>User Birthdate</th>
                          <th>User About Fip</th>
                          <th>User Instructor Friend Name</th>
                          <th>User Instructor Phone</th>
                          <th>User Term Condition</th>
                          <th>User PaymentId</th>
                          <th>User Membership Date</th>
                          <th>User Membership Expire Date</th>
                          <th>User Membership Number</th>
                          <th>User Membership Renew</th>
                          <th>Created_at</th>
                          <th>Updated_at</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $result = $qm->getRecord("u_membership");
                        if (mysqli_num_rows($result) > 0) {
                          $i=0;
                          while($row = mysqli_fetch_array($result)) { 
                            $i++;
                            $user_info = $qm->getRecord("user", "*", "id=" . $row['user_id']);
                            $user_data = mysqli_fetch_array($user_info);
                            ?>

                            <tr>
                              <td>&nbsp;&nbsp;&nbsp;<?php echo $i; ?></td>
                              <td><?php echo $user_data['nm']; ?></td>
                              <td><?php echo $user_data['eml']; ?></td>
                              <td><?php echo $user_data['mob']; ?></td>
                              <td><?php echo $user_data['addr']; ?></td>
                              <td><?php echo $row['u_occupation']; ?></td>
                              <td><?php echo $row['u_profession']; ?></td>
                              <td><?php echo $row['u_city']; ?></td>
                              <td><?php echo $row['u_pincode']; ?></td>
                              <td><?php echo $row['u_birthdate']; ?></td>
                              <td><?php echo $row['u_about_fip'];?></td>
                              <td><?php echo $row['u_instroctor_frd_name']; ?></td>
                              <td><?php echo $row['u_instroctor_phone']; ?></td>
                              <td><?php echo $row['u_term_condition']; ?></td>
                              <td><?php echo $row['u_payment_id']; ?></td>
                              <td><?php echo $row['u_membership_date']; ?></td>
                              <td><?php echo $row['u_membership_exp_date']; ?></td>
                              <td><?php echo $row['u_membership_number'];?></td>
                              <td><?php echo $row['u_membership_renew']; ?></td>
                              <td><?php echo $row['created_at'];?></td>
                              <td><?php echo $row['updated_at']; ?></td>
                              <td>
                                <a class="btn btn-primary width" href="membership_user_update.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger width" href="membership_user.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure');"><i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                          <?php } 
                        } else { ?>
                          <tr>
                            <td colspan="22"><center><b>No Record Found</b></center></td>
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
      $('#membership_table').DataTable({
        "pageLength": 10, // Initial number of entries per page
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]] // Control number of entries per page
      });
    });
  </script>
</body>
</html>
