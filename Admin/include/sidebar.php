<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="dashbord.php" style=" text-align: center;">
      <img src="assets/FIPLOGO.png" alt="" class="size">
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item <?php echo $page_title =='Home' ? 'active' : '' ;?>">
      <a href="dashbord.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Dashboards">Dashboards</div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">User Managment</span>
    </li>
    <!-- Pages -->
    <li class="menu-item <?php echo $page_title =='info' ? 'active' : '' ;?>">
      <a href="customer.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Account Settings">Users</div>
      </a>
    </li>
    <li class="menu-item <?php echo $page_title =='membership' ? 'active' : '' ;?>">
      <a href="membership_user.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user-check"></i>
        <div data-i18n="Account Settings">Membership User</div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Manage Instructors</span>
    </li>
    <li class="menu-item <?php echo $page_title =='instructors' ? 'active' : '' ;?>">
      <a href="instructors.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-chalkboard"></i>
        <div data-i18n="Account Settings">Instructors</div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Course Managment</span>
    </li>
    <li class="menu-item <?php echo $page_title =='course' ? 'active' : '' ;?>">
      <a href="course.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-book"></i>
        <div data-i18n="Account Settings">Course</div>
      </a>
    </li> 
    <li class="menu-item <?php echo $page_title =='backup' ? 'active' : '' ;?>">
      <a href="backup.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-cloud-download"></i>
        <div data-i18n="Account Settings">Backup</div>
      </a>
    </li> 

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Certificate Managment</span>
    </li>
    <li class="menu-item <?php echo $page_title =='cerificate' ? 'active' : '' ;?>">
      <a href="certificate.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-certification"></i>
        <div data-i18n="Account Settings">Certificate</div>
      </a>
    </li> 
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Pricing Management</span>
    </li>
    <li class="menu-item <?php echo $page_title =='member_pricing' ? 'active' : '' ;?>">
      <a href="membership_pricing.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-dollar"></i>
        <div data-i18n="Account Settings">Membership Price </div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">FAQ Management</span>
    </li>
    <li class="menu-item <?php echo $page_title =='faq' ? 'active' : '' ;?>">
      <a href="faq.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-question-mark"></i>
        <div data-i18n="Account Settings">FAQ </div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">CMS Management</span>
    </li>
    <li class="menu-item <?php echo $page_title =='termsC' ? 'active' : '' ;?>">
      <a href="terms_condition_page.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-briefcase"></i>
        <div data-i18n="Account Settings">Terms & Condition</div>
      </a>
    </li>
    <li class="menu-item <?php echo $page_title =='privacy' ? 'active' : '' ;?>">
      <a href="privacy_page.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-lock"></i>
        <div data-i18n="Account Settings">Privacy Policy</div>
      </a>
    </li>
    <li class="menu-item <?php echo $page_title =='about' ? 'active' : '' ;?>">
      <a href="about.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-info-circle"></i>
        <div data-i18n="Account Settings">About Us</div>
      </a>
    </li>
    <li class="menu-item <?php echo $page_title =='testimonial' ? 'active' : '' ;?>">
      <a href="testimonial.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-chat"></i>
        <div data-i18n="Account Settings">Testimonial</div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Notification Management</span>
    </li>
    <li class="menu-item <?php echo $page_title =='notification' ? 'active' : '' ;?>">
      <a href="notification.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-bell"></i>
        <div data-i18n="Account Settings">Notification</div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Contact Management</span>
    </li>
    <li class="menu-item <?php echo $page_title =='contact' ? 'active' : '' ;?>">
      <a href="contact.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-envelope"></i>
        <div data-i18n="Account Settings">Contact Us </div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Payment Gateway</span>
    </li>
    <li class="menu-item <?php echo $page_title =='payment-method' ? 'active' : '' ;?>">
      <a href="payment_method.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-credit-card"></i>
        <div data-i18n="Account Settings">Payment Methods </div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Admin Management</span>
    </li>
    <li class="menu-item <?php echo $page_title =='admin_acc' ? 'active' : '' ;?>">
      <a href="admin_profile.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user-pin"></i>
        <div data-i18n="Account Settings">My Account</div>
      </a>
    </li>
    <li class="menu-item <?php echo $page_title =='change_pass' ? 'active' : '' ;?>">
      <a href="change_pass.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-key"></i>
        <div data-i18n="Account Settings">Change Password</div>
      </a>
    </li>
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
        <div data-i18n="Authentications">Authentications</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="auth-login-basic.html" class="menu-link" target="_blank">
            <div data-i18n="Basic">Login</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="auth-register-basic.html" class="menu-link" target="_blank">
            <div data-i18n="Basic">Register</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
            <div data-i18n="Basic">Forgot Password</div>
          </a>
        </li>
      </ul>
    </li> -->

  
  </ul>
</aside>