<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
  id="layout-navbar">
  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
      <i class="bx bx-menu bx-sm"></i>
    </a>
  </div>

  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
    <!-- Search -->
    <div class="navbar-nav align-items-center">
      <div class="nav-item d-flex align-items-center">
        <p class="mb-0 nav-title">Welcome to Sahjanand College Admin Panel ! 👋</p>
      </div>
    </div>
    <!-- /Search -->
    <?php
      // @include("include/secureConfig.php");
      // for user
      $res = $qm->getRecord("user");
      $users = mysqli_num_rows($res);

      // for member user
      $resn = $qm->getRecord("user", "*", "is_member='Yes'");
      $m_users = mysqli_num_rows($resn);

      $notificationCount = 0;
			$result = $qm->getRecord("notification_count");

      while ($row2 = mysqli_fetch_array($result)) {
        $old_users = $row2['user'];
        $old_m_user = $row2['member_user'];
      }

      // for user
      if ($users > $old_users) {
        for ($i = 1; $i <= ($users - $old_users); $i++) {
          $notificationCount++;
        }
      }

      // for member user
      if ($m_users > $old_m_user) {
        for ($i = 1; $i <= ($m_users - $old_m_user); $i++) {
          $notificationCount++;
        }
      }

    ?>
    <ul class="navbar-nav flex-row align-items-center ms-auto">
      <!-- Place this tag where you want the button to render. -->
      <li class="nav-item lh-1 me-1">
        <a class="dropdown-item notification-icon-container" href="notification_history.php"  onclick="setNotification();">
          <i class="bx bx-bell me-2"></i>
          <span id="notificationCount" class="badge bg-danger"><?php echo $notificationCount; ?></span>
        </a>
      </li>
      <li class="nav-item lh-1 me-1">
        <a class="dropdown-item" href="logout.php">
          <i class="bx bx-power-off me-2"></i>
          <span class="align-middle">Log Out</span>
        </a>
      </li>
    </ul>

    <script>
					function setNotification() {
						$.ajax({
							type: "POST",
							url: "notification_ajax.php",
							data: {
								setNotification: "setNotification",
							},
						});
					}
				</script>
  </div>
</nav>