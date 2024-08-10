<!DOCTYPE html>
<?php include("include/config.php");?>
<html lang="en">
  <head>
  <?php @include("include/head.php");?> 
  </head>
  <body>
    <?php include("include/loder.php"); ?>
<?php include ("include/alert_msg.php"); ?>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <img src="assets/FIPLOGO.png" alt="" class="logosize">
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to FIP! 👋</h4>
              <p class="mb-4">Please sign-in to your account and start the Admin Panel</p>

              <form id="formAuthentication" class="mb-3" method="Post" action="loginAuth.php">
                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email or username"
                    autofocus
                    required />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
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
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="loggedin" value="Login" class="btn btn-primary submit-btn btn-block d-grid w-100">  
                  </div>
              </form>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
    <?php @include("include/footer-script.php");?>
  </body>
</html>
