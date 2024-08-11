<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo justify-content-center">
    <a href="dashbord" style="text-align: center;">
      <img src="assets/logo.png" alt="" class="size">
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
      <span class="menu-header-text">Faculty Managment</span>
    </li>
    <!-- Pages -->
    <li class="menu-item <?php echo $page_title =='faculty' ? 'active' : '' ;?>">
      <a href="faculty.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-book-reader"></i>
        <div data-i18n="Account Settings">Faculty</div>
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
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Gallery / Event Management</span>
    </li>
    <li class="menu-item <?php echo $page_title =='event' ? 'active' : '' ;?>">
      <a href="events.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-calendar-event"></i>
        <div data-i18n="Account Settings">Events & Activity</div>
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
      <span class="menu-header-text">College Topers Management</span>
    </li>
    <li class="menu-item <?php echo $page_title =='event' ? 'active' : '' ;?>">
      <a href="events.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-calendar-event"></i>
        <div data-i18n="Account Settings">College Topers</div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">PROMINENT Alumni Management</span>
    </li>
    <li class="menu-item <?php echo $page_title =='event' ? 'active' : '' ;?>">
      <a href="events.php" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-graduation"></i>
        <div data-i18n="Account Settings">Alumni Students</div>
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
      <span class="menu-header-text">Contact Management</span>
    </li>
    <li class="menu-item <?php echo $page_title =='contact' ? 'active' : '' ;?>">
      <a href="contact.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-envelope"></i>
        <div data-i18n="Account Settings">Contact Us </div>
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

  
  </ul>
</aside>