<?php
@include("include/secureConfig.php");


// for user
$res = $qm->getRecord("user");
$users = mysqli_num_rows($res);

// for member user
$resn = $qm->getRecord("user", "*", "is_member='Yes'");
$m_users = mysqli_num_rows($resn);


if (isset($_POST['setNotification'])) {
    $result = $qm->updateRecord("notification_count", "user='" . $users . "' , member_user='" . $m_users . "' ", "");
}
