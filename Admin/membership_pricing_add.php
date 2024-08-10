<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
$page_title = "member_pricing";
if (isset($_POST['add'])) {

    $membership_start_date = addslashes($_POST['membership_start_date']);
    $membership_new_price = addslashes($_POST['membership_new_price']);
    $membership_renew_price = addslashes($_POST['membership_renew_price']);
    $membership_description = addslashes($_POST['membership_description']);
    $membership_privileges = addslashes($_POST['membership_privileges']);
    $membership_email = addslashes($_POST['membership_email']);
    $membership_term_condition_id = isset($_POST['membership_term_condition_id']) ? 'true' : 'false';
    $membership_term_condition_id = addslashes($membership_term_condition_id);

    $insert = $qm->insertRecord("membership_pricing", "membership_start_date,membership_new_price,membership_renew_price,membership_description,membership_privileges,membership_email,membership_term_condition_id,created_at","'" . $membership_start_date . "','" . $membership_new_price . "','" . $membership_renew_price . "','" . $membership_description . "','".$membership_privileges."','".$membership_email."','".$membership_term_condition_id."','" . $getDt . "'");
    $_SESSION['alert_msg'] .= "<div class='msg_success'>membership Pricing added successfully</div>";
    header("location:membership_pricing.php");
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
                  <a href="membership_pricing.php" style="text-decoration: none;color: black;">Membership Pricing&nbsp;</a>
                  <i class="fa fa-chevron-right"></i> Add Membership Pricing
                </h5>
                <a href="membership_pricing.php" class="btn btn-primary"
                  style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <div class="card">
                <div class="card-body">
                  <form id="membershipForm" class="form-sample" action="" method="Post" enctype="multipart/form-data">
                    <p class="card-description"><b>
                        <CENTER>Add Membership Pricing</CENTER>
                    </p>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Membership Date</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="membership_start_date" required />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Membership New Price</label>
                          <div class="col-sm-9">
                            <input type="number" name="membership_new_price" class="form-control" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Membership Renew Price</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="membership_renew_price" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Membership Description</label>
                          <div class="col-sm-12">
                            <textarea id="membership_description" name="membership_description" class="form-control" required></textarea>
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Membership Privileges</label>
                                <div class="col-sm-12">
                                    <textarea id="membership_privileges" name="membership_privileges" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Membership Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" name="membership_email" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Please enter a valid email address" />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Membership Term & Condition Apply</label>
                          <div class="col-sm-2">
                            <div class="form-check">
                                  <input class="form-check-input mt-2" type="checkbox" name="membership_term_condition_id" id="membership_term_condition_id">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <center><br /><button type="submit" name="add" class="btn btn-primary">Add</button>
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
            $('input[name="membership_start_date"]').daterangepicker({
                opens: 'center',
                timePicker: false,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'DD-MM-YYYY'
                }
            });
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