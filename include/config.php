<?php
  include ("masterConfig.php");
  $con = mysqli_connect($host,$username,$password,$db);
  if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }
  include ("class/queryMaster.php");
  $qm = new queryMaster();

  include ("rootMaster.php");
  include ("cusFunction.php");

  define("UPLOAD_IMAGE_URL","images/");
  define("UPLOAD_PROFILE_URL", UPLOAD_IMAGE_URL."a_profilePhoto/");
  define("UPLOAD_SIGNATURE_URL", UPLOAD_IMAGE_URL."a_signaturePhoto/");
  define("UPLOAD_DISABILITYCERTIFICATE_URL", UPLOAD_IMAGE_URL."a_disabilityCertificate/");
  define("UPLOAD_HSCRESULT_URL", UPLOAD_IMAGE_URL."a_hscResult/");
  define("UPLOAD_SSCRESULT_URL", UPLOAD_IMAGE_URL."a_sscResult/");

  date_default_timezone_set("Asia/Kolkata");
  $getDt = date("Y-m-d H:i:s");

  //mysqli_query($con,"set name utf8");
  mysqli_set_charset($con,'utf8');

  header ('Content-Type: text/html; charset=utf-8');

  // $result=$qm->getRecord("profile","*","id=1");   
  // $row_con_info = $result->fetch_assoc();
  $page='index';
  
?>