<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
$page_title = "faq";
if (isset($_POST['add'])) {
  $question = $_POST['question'];
  $answer = $_POST['answer'];

  $question = addslashes($question);
  $answer = addslashes($answer);

  $insert = $qm->insertRecord("faq", "question,answer,created_at", "'" . $question . "','" . $answer . "','" . $getDt . "'");
  $_SESSION['alert_msg'] .= "<div class='msg_success'> FAQ added successfully</div>";
  header("location:faq.php");
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
                  <a href="faq.php" style="text-decoration: none;color: black;">FAQ&nbsp;</a>
                  <i class="fa fa-chevron-right"></i> Add FAQ
                </h5>
                <a href="faq.php" class="btn btn-primary"
                  style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <div class="card">
                <div class="card-body">
                  <form id="faq_form" class="form-sample" action="" method="Post" enctype="multipart/form-data">
                    <p class="card-description"><b>
                        <CENTER>Add FAQ</CENTER>
                    </p>
                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Question</label>
                          <div class="col-sm-12">
                            <textarea name="question" class="form-control" id="question" cols="30" rows="2" required></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Answer</label>
                          <div class="col-sm-12">
                            <textarea name="answer" class="form-control" id="answer" required></textarea>
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

  <script>
    // <!-- for editor -->
    CKEDITOR.replace('answer', {
        placeholder: 'Answer'
    });

    // <!-- Form submission validation for description editor -->
    document.getElementById('faq_form').addEventListener('submit', function(event) {
            var descriptionValue = CKEDITOR.instances['answer'].getData().trim();
            if (!descriptionValue) {
                event.preventDefault();
                alert('Answer is required.');
            }
        });
    </script>
</body>

</html>