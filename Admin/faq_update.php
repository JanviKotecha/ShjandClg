<!DOCTYPE html>
<html lang="en">
<?php @include("include/secureConfig.php");
    $page_title = "faq";
    if (isset($_POST['update'])) {
        $id=$_POST['id'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];

        $question = addslashes($question);
        $answer = addslashes($answer);

        $insert = $qm->updateRecord("faq", "question='".$question."',answer='".$answer."',updated_at='".$getDt."'","id=".$id);
        $_SESSION['alert_msg'] .= "<div class='msg_success'> FAQ Update successfully</div>";
        header("location:faq.php");
        exit;
    }

    if(isset($_GET['id']))
    {
        if($_GET['id']!='')
        {
        if(is_numeric($_GET['id']))
        {
            $id=$_GET['id'];
            $res = $qm->getRecord("faq","*","id=".$id);
            if(mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_array($res);
            } 
            else {
            $_SESSION['alert_msg'] .= "<div class='msg_error'>Data can't be found.</div>";
            header("location:faq.php");
            exit;
            } 
        }
        else {
            $_SESSION['alert_msg'] .= "<div class='msg_error'>Only numeric value required.</div>";
            header("location:faq.php");
            exit;
        }
        }
        else{
        $_SESSION['alert_msg'] .= "<div class='msg_error'>Id can't be empty.</div>";
        header("location:faq.php");
        exit;
        }
    }
    else { ?>
        <script type="text/javascript">
        alert("somthing wrong");
        window.location="faq.php";
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
                  <a href="faq.php" style="text-decoration: none;color: black;">FAQ&nbsp;</a>
                  <i class="fa fa-chevron-right"></i> Update FAQ
                </h5>
                <a href="faq.php" class="btn btn-primary"
                  style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
              <?php include("include/loder.php"); ?>
              <div class="card">
                <div class="card-body">
                  <form id="faq_form" class="form-sample" action="" method="Post" enctype="multipart/form-data">
                    <p class="card-description"><b>
                        <CENTER>Update FAQ</CENTER>
                    </p>
                    <input type="hidden" name="id" class="txtField" value="<?php echo $id; ?>">
                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Question</label>
                          <div class="col-sm-12">
                            <textarea name="question" class="form-control" id="question" cols="30" rows="2" required><?php echo $row['question'] ?></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 mb-3">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Answer</label>
                          <div class="col-sm-12">
                            <textarea name="answer" class="form-control" id="answer" required><?php echo $row['answer'] ?></textarea>
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