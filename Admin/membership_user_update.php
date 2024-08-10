<DOCTYPE html>
<?php @include("include/secureConfig.php"); 
  $page_title = "membership";
  if(isset($_POST['update'])){

    $id=$_POST['id'];
    $u_occupation = addslashes($_POST['u_occupation']);
    $u_profession = addslashes($_POST['u_profession']);
    $u_city = addslashes($_POST['u_city']);
    $u_pincode = addslashes($_POST['u_pincode']);

    $u_birthdate = addslashes($_POST['u_birthdate']);
    $u_about_fip = addslashes($_POST['u_about_fip']);
    $u_instroctor_frd_name = addslashes($_POST['u_instroctor_frd_name']);
    $u_instroctor_phone = addslashes($_POST['u_instroctor_phone']);

    $u_term_condition = $_POST['u_term_condition'];
    $u_payment_id = addslashes($_POST['u_payment_id']);
    $u_membership_date = $_POST['u_membership_date'];
    $u_membership_exp_date = $_POST['u_membership_exp_date'];
    $u_membership_number = addslashes($_POST['u_membership_number']);
    $u_membership_renew = $_POST['u_membership_renew'];

    $res=$qm->updateRecord("u_membership",
        "u_occupation='".$u_occupation."',
        u_profession='".$u_profession."',
        u_city='".$u_city."',
        u_pincode='".$u_pincode."',
        u_birthdate='".$u_birthdate."',
        u_about_fip='".$u_about_fip."',
        u_instroctor_frd_name='".$u_instroctor_frd_name."',
        u_instroctor_phone='".$u_instroctor_phone."',
        u_term_condition='".$u_term_condition."',
        u_payment_id='".$u_payment_id."',
        u_membership_date='".$u_membership_date."',
        u_membership_exp_date='".$u_membership_exp_date."',
        u_membership_number='".$u_membership_number."',
        u_membership_renew='".$u_membership_renew."',
        updated_at='".$getDt."'",
        "id=".$id);

    $_SESSION['alert_msg'] .= "<div class='msg_success'>Membership User updated successfully.</div>";
    header("location:membership_user.php"); 
    exit;  
  }
  if(isset($_GET['id']))
  {
    if($_GET['id']!='')
    {
      if(is_numeric($_GET['id']))
      {
        $id=$_GET['id'];
        $res = $qm->getRecord("u_membership","*","id=".$id);
        if(mysqli_num_rows($res) > 0) {
          $row = mysqli_fetch_array($res);

            $user_id = $row['user_id']; 
            // Fetch user details from the 'user' table based on 'user_id'
            $user_info = $qm->getRecord("user", "*", "id=" . $row['user_id']);
            $user_row = mysqli_fetch_array($user_info);
        } 
        else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
          header("location:membership_user.php");
          exit;
        } 
      }
      else {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
        header("location:membership_user.php");
        exit;
      }
      }
    else{
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
      header("location:membership_user.php");
      exit;
    }
  }
  else { ?>
    <script type="text/javascript">
      alert("somthing wrong");
      window.location="membership_user.php";
    </script>
  <?php exit;
    }
 ?>
<html>
  <head>
    <?php include("include/head.php");?>
  </head>
  <body onload="hideLoader()">
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php include("include/sidebar.php");?>
        <div class="layout-page">
        <?php include("include/navbar.php") ?><br>  
          <div class="content-wrapper px-4">
            <div class="row">
              <div class="col-12">
              <div class="page-title-header " style="display:flex">
                <h5><a href="membership_user.php" style="text-decoration: none;color: black;">Membership User&nbsp;</a> <i class="fa fa-chevron-right"></i> Update Membership User</h5>
                <a href="membership_user.php" class="btn btn-primary" style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <?php include("include/loder.php"); ?>
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" action="" method="Post" enctype="multipart/form-data"> 
                      <p class="card-description"><b><CENTER>Update Membership User</CENTER></p>
                      <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
                      
                      <div class="row">
                          <h5>User Details:</h5>
                        <div class="col-md-6">
                            <p>User Name: <?php echo isset($user_row['nm']) ? $user_row['nm'] : ''; ?></p>
                        </div>
                        <div class="col-md-6">
                            <p>User Email: <?php echo isset($user_row['eml']) ? $user_row['eml'] : ''; ?></p>
                        </div>
                        <div class="col-md-6">
                            <p>User Mobile: <?php echo isset($user_row['mob']) ? $user_row['mob'] : ''; ?></p>
                        </div>
                        <div class="col-md-6">
                            <p>User Address: <?php echo isset($user_row['addr']) ? $user_row['addr'] : ''; ?></p>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-md-6 mt-3">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">User Occupation</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="u_occupation" required>
                                        <option value="Job" <?php if($row['u_occupation'] == 'Job') echo 'selected'; ?>>Job</option>
                                        <option value="Practice" <?php if($row['u_occupation'] == 'Practice') echo 'selected'; ?>>Practice</option>
                                        <option value="Student" <?php if($row['u_occupation'] == 'Student') echo 'selected'; ?>>Student</option>
                                        <option value="Other" <?php if($row['u_occupation'] == 'Other') echo 'selected'; ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">User Profession</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="u_profession" required>
                                        <option value="Chartered Accountant" <?php if($row['u_profession'] == 'Chartered Accountant') echo 'selected'; ?>>Chartered Accountant</option>
                                        <option value="Company Secretary" <?php if($row['u_profession'] == 'Company Secretary') echo 'selected'; ?>>Company Secretary</option>
                                        <option value="Cost Accountant" <?php if($row['u_profession'] == 'Cost Accountant') echo 'selected'; ?>>Cost Accountant</option>
                                        <option value="Doctor" <?php if($row['u_profession'] == 'Doctor') echo 'selected'; ?>>Doctor</option>
                                        <option value="Advocate" <?php if($row['u_profession'] == 'Advocate') echo 'selected'; ?>>Advocate</option>
                                        <option value="Other" <?php if($row['u_profession'] == 'Other') echo 'selected'; ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User City</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="u_city" value="<?php echo $row['u_city']; ?>" required />
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Pincode</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="u_pincode" value="<?php echo $row['u_pincode']; ?>" required pattern="[0-9]{6}" title="Please enter a valid pincode (6 digits)." />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Birthdate</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="u_birthdate" value="<?php echo $row['u_birthdate']; ?>" required />
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6 mt-3">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">User About Fip</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="u_about_fip" required>
                                        <option value="Facebook" <?php if($row['u_about_fip'] == 'Facebook') echo 'selected'; ?>>Facebook</option>
                                        <option value="LinkedIn" <?php if($row['u_about_fip'] == 'LinkedIn') echo 'selected'; ?>>LinkedIn</option>
                                        <option value="Twitter" <?php if($row['u_about_fip'] == 'Twitter') echo 'selected'; ?>>Twitter</option>
                                        <option value="WhatsApp" <?php if($row['u_about_fip'] == 'WhatsApp') echo 'selected'; ?>>WhatsApp</option>
                                        <option value="Introducer Friend" <?php if($row['u_about_fip'] == 'Introducer Friend') echo 'selected'; ?>>Introducer Friend (Mention his name in next question)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Instructor Frd_name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="u_instroctor_frd_name" value="<?php echo $row['u_instroctor_frd_name']; ?>" required />
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Instructor Phone</label>
                            <div class="col-sm-9">
                                <input type="mobile" class="form-control" name="u_instroctor_phone" pattern="[0-9]{10}" title="Mobile number should be 10 digits"  value="<?php echo $row['u_instroctor_phone']; ?>" required />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mt-3">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">User Terms & Condition</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="u_term_condition" required>
                                        <option value="Yes" <?php if ($row['u_term_condition'] == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($row['u_term_condition'] == 'No') echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User PaymentId</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="u_payment_id" value="<?php echo $row['u_payment_id']; ?>" required />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Membership Date</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="u_membership_date" value="<?php echo $row['u_membership_date']; ?>" required />
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Membership Expire Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="u_membership_exp_date" value="<?php echo $row['u_membership_exp_date']; ?>" required />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Membership Number</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="u_membership_number" value="<?php echo $row['u_membership_number']; ?>" required />
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6 mt-3">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Membership Renew</label>
                            <div class="col-sm-9">
                                    <select class="form-control" name="u_membership_renew" required>
                                        <option value="Yes" <?php if ($row['u_membership_renew'] == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($row['u_membership_renew'] == 'No') echo 'selected'; ?>>No</option>
                                    </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <center><br/><button type="submit" name="update"  class="btn btn-primary">Update</button>
                          <input type="reset" name="reset"  class="btn btn-danger" value="Reset">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php @include("include/footer.php");?>
        </div>
      </div>
    </div>
    <?php @include("include/footer-script.php");?>
  </body>
</html> 