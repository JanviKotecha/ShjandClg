<?php
  session_start();
  include ("../include/masterConfig.php");

  $con = mysqli_connect($host,$username,$password,$db);
  if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }

  include ("../include/class/queryMaster.php");
  $qm = new queryMaster();

//  mysqli_query($con,"set name utf8");
  mysqli_set_charset($con,'utf8');

  header ('Content-Type: text/html; charset=utf-8');

  include ("../include/rootMaster.php");
  include ("../include/cusFunction.php");

  define("UPLOAD_HOST_URL","../");
  define("UPLOAD_IMAGE_URL", UPLOAD_HOST_URL."images/");

  define("UPLOAD_FACULTY_URL", UPLOAD_IMAGE_URL."faculty/");
  define("UPLOAD_COURSE_URL", UPLOAD_IMAGE_URL."courseimage/");
  define("UPLOAD_EVENTS_URL", UPLOAD_IMAGE_URL."events/");

  date_default_timezone_set("Asia/Kolkata");
  $getDt = date("Y-m-d H:i:s");

  $page_title = "Home";
?>