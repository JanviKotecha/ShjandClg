<DOCTYPE html>
<?php @include("include/secureConfig.php"); 
  $page_title = "change_pass";
  
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
                <h5><a href="admin_profile.php" style="text-decoration: none;color: black;">Admin Account&nbsp;</a> <i class="fa fa-chevron-right"></i> Update Admin Password</h5>
                <a href="admin_profile.php" class="btn btn-primary" style="margin-left: auto !important;margin-bottom:20px">Back</a>
              </div>
                <div class="card">
                  <div class="card-body">
                      <p class="card-description"><b><CENTER>Update Admin Password</CENTER></p>
                    <form class="form-sample" action="" method="Post" enctype="multipart/form-data"> 
                      <div class="row justify-content-center">
                        <div class="col-md-6 mt-3">
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Old Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="pass"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" 
                                    required/>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">New Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="oldpass"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" 
                                    required/>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Confirm Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="newpass"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" 
                                    required/>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
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