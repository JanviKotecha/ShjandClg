<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
    $page_title = "member_pricing";
    if (isset($_POST['update'])) {

        $id=$_POST['id'];
        $membership_start_date = addslashes($_POST['membership_start_date']);
        $membership_new_price = addslashes($_POST['membership_new_price']);
        $membership_renew_price = addslashes($_POST['membership_renew_price']);
        $membership_description = addslashes($_POST['membership_description']);
        $membership_privileges = addslashes($_POST['membership_privileges']);
        $membership_email = addslashes($_POST['membership_email']);
        $membership_term_condition_id = isset($_POST['membership_term_condition_id']) ? 'true' : 'false';
        $membership_term_condition_id = addslashes($membership_term_condition_id);

        $update = $qm->updateRecord(
            "membership_pricing",
            "membership_start_date='".$membership_start_date."', ".
            "membership_new_price='".$membership_new_price."', ".
            "membership_renew_price='".$membership_renew_price."', ".
            "membership_description='".$membership_description."', ".
            "membership_privileges='".$membership_privileges."', ".
            "membership_email='".$membership_email."', ".
            "membership_term_condition_id='".$membership_term_condition_id."', ".
            "updated_at='".$getDt."'",
            "id=".$id
        );
        $_SESSION['alert_msg'] .= "<div class='msg_success'>Membership Pricing added successfully</div>";
        header("location:membership_pricing.php");
        exit;
    }

    if(isset($_GET['id']))
  {
    if($_GET['id']!='')
    {
      if(is_numeric($_GET['id']))
      {
        $id=$_GET['id'];
        $res = $qm->getRecord("membership_pricing","*","id=".$id);
        if(mysqli_num_rows($res) > 0) {
          $row = mysqli_fetch_array($res);
        } 
        else {
          $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
          header("location:membership_pricing.php");
          exit;
        } 
      }
      else {
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
        header("location:membership_pricing.php");
        exit;
      }
      }
    else{
      $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
      header("location:membership_pricing.php");
      exit;
    }
  }
  else { ?>
    <script type="text/javascript">
      alert("somthing wrong");
      window.location="membership_pricing.php";
    </script>
  <?php exit;
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
                  <a href="membership_pricing.php" style="text-decoration: none;color: black;">Membership Pricing&nbsp;</a>
                  <i class="fa fa-chevron-right"></i> Update Membership Pricing
                </h5>
                <a href="membership_pricing.php" class="btn btn-primary"
                  style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <?php include("include/loder.php"); ?>
              <div class="card">
                <div class="card-body">
                  <form id="membershipForm" class="form-sample" action="" method="Post" enctype="multipart/form-data">
                    <p class="card-description"><b>
                        <CENTER>Update Membership Pricing</CENTER>
                    </p>
                    <div class="row">
                        <input type="hidden" name="id" class="txtField" value="<?php echo $id; ?>">

                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Membership Date</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="membership_start_date" value="<?php echo $row['membership_start_date']; ?>" required />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Membership New Price</label>
                          <div class="col-sm-9">
                            <input type="number" name="membership_new_price" class="form-control" value="<?php echo $row['membership_new_price']; ?>" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Membership Renew Price</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="membership_renew_price" value="<?php echo $row['membership_renew_price']; ?>" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Membership Description</label>
                          <div class="col-sm-12">
                            <textarea id="membership_description" name="membership_description" class="form-control" required><?php echo $row['membership_description']; ?></textarea>
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Membership Privileges</label>
                                <div class="col-sm-12">
                                    <textarea id="membership_privileges" name="membership_privileges" class="form-control" required><?php echo $row['membership_privileges']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Membership Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" name="membership_email" value="<?php echo $row['membership_email']; ?>" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Please enter a valid email address" />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Membership Term & Condition Apply</label>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <input class="form-check-input mt-2" type="checkbox" name="membership_term_condition_id" id="membership_term_condition_id" <?php echo ($row['membership_term_condition_id'] == 'true') ? 'checked' : ''; ?>>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <center><br /><button type="submit" name="update" class="btn btn-primary">Update</button>
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

  <!-- for editor -->
    <script>
        CKEDITOR.replace('membership_description', {
            placeholder: 'Description*'
        });

        CKEDITOR.replace('membership_privileges', {
            placeholder: 'Description*'
        });
    </script>

    <!-- for date picker -->
    <script>
        $(function() {
            // Get the initial date from PHP
            var initialDate = '<?php echo $row['membership_start_date']; ?>';
            var dateRange = initialDate.split(' - ');

            var startDateString = dateRange[0].trim();
            var endDateString = dateRange[1].trim();
            
            // Parse the start date using Moment.js
            var parsedStartDate = moment(startDateString, 'DD-MM-YYYY');
            var parsedEndDate = moment(endDateString, 'DD-MM-YYYY');

            // Check if the initial date is valid
            if (parsedStartDate.isValid()) {
                var formattedStartDate = parsedStartDate.format('DD-MM-YYYY');
                var formattedEndDate = parsedEndDate.format('DD-MM-YYYY');

                // Initialize the date range picker
                $('input[name="membership_start_date"]').daterangepicker({
                    opens: 'center',
                    timePicker: false,
                    startDate: formattedStartDate,
                    endDate: formattedEndDate,
                    locale: {
                        format: 'DD-MM-YYYY'
                    }
                });

            } else {
                // Handle invalid initial date here
                console.error('Invalid initial date:', initialDate);
            }
        });

    </script>

    <!-- Form submission validation for description editor -->
  <script>
        document.getElementById('membershipForm').addEventListener('submit', function(event) {
            var descriptionValue = CKEDITOR.instances['membership_description'].getData().trim();
            var privilegesValue = CKEDITOR.instances['membership_privileges'].getData().trim();

            if (!descriptionValue) {
                event.preventDefault();
                alert('Membership description is required.');
            }

            if (!privilegesValue) {
                event.preventDefault();
                alert('Membership privileges is required.');
            }
        });
  </script>
</body>

</html>