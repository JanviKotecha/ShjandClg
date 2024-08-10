<?php 
include("include/secureConfig.php");
    $page_title = "payment-method";

    if (isset($_POST['submit'])) {
        $merchantId = $_POST["merchantId"];
        $apiKey = $_POST["apiKey"];
        $methodId = $_POST["methodId"];
    
        $res = $qm->updateRecord(
            "payment_methods",
            "merchantId='". $merchantId."',
            apiKey='".$apiKey."' ","id=".$methodId
          );
        
        $_SESSION['alert_msg'] .= "<div class='msg_success'>Data updated successfully.</div>";
        header("location:payment_method.php"); 
        exit;
    } 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // for course publish update
        if(isset($_POST['isChecked']) && isset($_POST['methodId'])) {
          $isChecked = $_POST['isChecked'];
          $methodId = $_POST['methodId'];
      
          $res = $qm->updateRecord(
            "payment_methods",
            "method_is_publish='". $isChecked."'",
            "id=".$methodId
          );
          
          $_SESSION['alert_msg'] .= "<div class='msg_success'>Payment Method updated successfully.</div>";
          echo json_encode(['status' => 'success', 'message' => 'Payment Method  updated successfully']);
        //   header("location: payment_method.php");
          exit;
  
        }
      }
  
    
?>

<html lang="en">

<head>
    <?php include("include/head.php"); ?>

    <style>
        .switch-rotet{
            transform : rotate(90deg);
        }

        .pm-crd{
            display : flex;
            flex-direction : row;
            justify-content : space-between;
            align-items : center;
        }

        @media(max-width : 370px){
            .switch-rotet{
            transform : rotate(0deg);
            }

            .pm-crd{
                flex-direction : column;
            }
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
                            <?php include("include/loder.php"); ?>
                            <?php include ("include/alert_msg.php"); ?>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Payment Methods
                                        <!-- <a href="membership_pricing_add.php" class="btn btn-primary"
                                            style="float: right;"><i class="fa fa-plus"></i></a> -->
                                    </h3>
                                    <div class="row mt-5">
                                        <?php 
                                            $result = $qm->getRecord("payment_methods");
                                            if (mysqli_num_rows($result) > 0) {
                                            $i = 0;
                                                while($row = mysqli_fetch_array($result)) {
                                                $i++; 
                                                ?>
                                        <div class="col-md-5 my-1">
                                            <div class="card px-1 py-4">
                                                <div class="crd-top pm-crd">
                                                    <div
                                                        class="method-1 my-1 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="../images/paymentmethods/PhonePe-Logo.png" width=130
                                                            height=100 alt="img">
                                                        <p><?php echo $row['method_name']; ?></p>
                                                    </div>
                                                    <div class="method-2 my-1">
                                                        <button type="button" class="btn btn-primary px-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal_<?php echo $row['id']; ?>"
                                                            data-bs-whatever="@getbootstrap"><i
                                                                class="fa fa-gear me-1"></i>Setting</button>

                                                        <div class="modal fade"
                                                            id="exampleModal_<?php echo $row['id']; ?>" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel_<?php echo $row['id']; ?>"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel_<?php echo $row['id']; ?>">
                                                                            Configuration</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="" method="POST"
                                                                            enctype="multipart/form-data">
                                                                            <div class="mb-3">
                                                                                <input type="hidden"
                                                                                    class="form-control" name="methodId"
                                                                                    value="<?php echo $row['id'] ?>"
                                                                                    id="methodid">
                                                                                <label for="merchantId"
                                                                                    class="col-form-label">MerchantId:</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="merchantId"
                                                                                    id="merchantId_<?php echo $row['id']; ?>"
                                                                                    value="<?php echo $row['merchantId'] ?>">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="apiKey"
                                                                                    class="col-form-label">ApiKey:</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="apiKey"
                                                                                    id="apiKey_<?php echo $row['id']; ?>"
                                                                                    value="<?php echo $row['apiKey'] ?>">
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit" name="submit"
                                                                                    class="btn btn-primary">Update</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="method-3 my-1">
                                                        <div class="custom-control custom-switch toggle-switch switch-rotet">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="publishToggle_<?php echo $row['id']; ?>"
                                                                <?php echo ($row['method_is_publish'] == 'true') ? 'checked' : ''; ?>>
                                                            <label class="custom-control-label"
                                                                for="publishToggle_<?php echo $row['id']; ?>"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } 
                                            } else { ?>

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
    
<!-- for update publish status using ajax -->
<script>
      $(document).ready(function() {
          $('input[type="checkbox"]').change(function() {
              var methodId = $(this).attr("id").split("_")[1];
              var isChecked = $(this).is(':checked');
              var sendValue = isChecked ? 'true' : 'false';

              $.ajax({
                  url: '<?php echo $_SERVER['PHP_SELF']; ?>',
                  method: 'POST',
                  data: { isChecked: sendValue, methodId: methodId },
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

</body>

</html>