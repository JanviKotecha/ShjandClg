<?php 
include 'include/config.php'; 

if (isset($_POST['submit'])) {
    // Personal Details
    $courseType = $_POST['course_type'];
    $applicantName = $_POST['applicant_name'];
    $dob = $_POST['birth_date'];
    $email = $_POST['email'];
    $mobileNo = $_POST['mobile_no'];
    $fathersName = $_POST['fathers_name'];
    $mothersName = $_POST['mothers_name'];
    $parentsMobileNo = $_POST['parents_mobile_no'];
    $noOfSiblings = $_POST['no_of_siblings'];
    $category = $_POST['category'];
    $gender = $_POST['gender'];
    $disability = $_POST['disability'];
    $disabilityPercentage = $_POST['disability_percentage'];
    $disabilityCertificate = $_FILES['disability_certificate']['name']; 
    $nationality = $_POST['nationality'];
    $locality = $_POST['locality'];
    $aadharNumber = $_POST['aadhar_number'];
    $religion = $_POST['religion'];
    $isMinority = isset($_POST['is_minority']) ? 1 : 0;
    $profile_photo = $_FILES['profile_photo']['name'];
    $signaturePhoto = $_FILES['signature_photo']['name']; 

    // Present Address
    $presentAddress = $_POST['present_address'];
    $presentState = $_POST['present_state'];
    $presentDistrict = $_POST['present_district'];
    $presentTaluka = $_POST['present_taluka'];
    $presentPincode = $_POST['present_pincode'];

    // Permanent Address
    $permanentAddress = $_POST['permanent_address'];
    $permanentState = $_POST['permanent_state'];
    $permanentDistrict = $_POST['permanent_district'];
    $permanentTaluka = $_POST['permanent_taluka'];
    $permanentPincode = $_POST['permanent_pincode'];

    // HSC Details
    $hscDiploma = $_POST['hsc_diploma'];
    $hscBoard = $_POST['hsc_board'];
    $hscPassingYear = $_POST['hsc_passing_year'];
    $hscSeatNo = $_POST['hsc_seat_no'];
    $hscPercentage = $_POST['hsc_percentage'];
    $hscMarksheet = $_FILES['hsc_marksheet']['name']; 

    // SSC Details
    $sscBoard = $_POST['ssc_board'];
    $sscPassingYear = $_POST['ssc_passing_year'];
    $sscSeatNo = $_POST['ssc_seat_no'];
    $sscPercentage = $_POST['ssc_percentage'];
    $sscMarksheet = $_FILES['ssc_marksheet']['name'];

    // Agree to Terms
    $agreeTerms = isset($_POST['agree']) ? 1 : 0;

    // Default Status
    $status = 0;
    $applicationNo = str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);

    // Insert query
    $insert = $qm->insertRecordReturn(
        "admission", 
        "course_type, application_no, applicant_name, birthdate, email, mobile_no, fathers_name, mothers_name, parents_mobile_no, no_of_siblings, category, gender, disability, disability_percentage, disability_certificate, nationality, locality, aadhar_number, religion, is_minority, signature_photo, present_address, present_state, present_district, present_taluka, present_pincode, permanent_address, permanent_state, permanent_district, permanent_taluka, permanent_pincode, hsc_diploma, hsc_board, hsc_passing_year, hsc_seat_no, hsc_percentage, hsc_marksheet, ssc_board, ssc_passing_year, ssc_seat_no, ssc_percentage, ssc_marksheet, agree_terms, status",  
        "'$courseType', '$applicationNo', '$applicantName', '$dob', '$email', '$mobileNo', '$fathersName', '$mothersName', '$parentsMobileNo', '$noOfSiblings', '$category', '$gender', '$disability', '$disabilityPercentage', '$disabilityCertificate', '$nationality', '$locality', '$aadharNumber', '$religion', '$isMinority', '$signaturePhoto', '$presentAddress', '$presentState', '$presentDistrict', '$presentTaluka', '$presentPincode', '$permanentAddress', '$permanentState', '$permanentDistrict', '$permanentTaluka', '$permanentPincode', '$hscDiploma', '$hscBoard', '$hscPassingYear', '$hscSeatNo', '$hscPercentage', '$hscMarksheet', '$sscBoard', '$sscPassingYear', '$sscSeatNo', '$sscPercentage', '$sscMarksheet', '$agreeTerms', '$status'"
    );
    
    // File upload handling
    if(isset($_FILES['profile_photo']['tmp_name']) && !empty($_FILES['profile_photo']['tmp_name'])){
        $supported_image = array('jpg','jpeg','png');  
        $ext = strtolower(pathinfo($profile_photo, PATHINFO_EXTENSION));
        $Img = time().".".$ext;
        if (in_array($ext, $supported_image) ) {
          $qm->UpdateRecord("admission","profile_photo='".$Img."'","id=".$insert);
          move_uploaded_file($_FILES["profile_photo"]["tmp_name"],UPLOAD_PROFILE_URL.$Img);	
        }
        else{
          echo "<script>alert('Profile Photo is not formeted');history.back();</script>";
          exit;
        } 
    } 

    if(isset($_FILES['signature_photo']['tmp_name']) && !empty($_FILES['signature_photo']['tmp_name'])){
      $supported_image = array('jpg','jpeg','png');  
      $ext = strtolower(pathinfo($signaturePhoto, PATHINFO_EXTENSION));
      $Img = time().".".$ext;
      if (in_array($ext, $supported_image) ) {
        $qm->UpdateRecord("admission","signature_photo='".$Img."'","id=".$insert);
        move_uploaded_file($_FILES["signature_photo"]["tmp_name"],UPLOAD_SIGNATURE_URL.$Img);	
      }
      else{
        echo "<script>alert('Signature Photo is not formeted');history.back();</script>";
        exit;
      } 
    } 

    if(isset($_FILES['disability_certificate']['tmp_name']) && !empty($_FILES['disability_certificate']['tmp_name'])){
      $supported_image = array('pdf', 'doc', 'docx');  
      $ext = strtolower(pathinfo($disabilityCertificate, PATHINFO_EXTENSION));
      $Img = time().".".$ext;
      if (in_array($ext, $supported_image) ) {
        $qm->UpdateRecord("admission","disability_certificate='".$Img."'","id=".$insert);
        move_uploaded_file($_FILES["disability_certificate"]["tmp_name"],UPLOAD_DISABILITYCERTIFICATE_URL.$Img);	
      }
      else{
        echo "<script>alert('File format not supported. Please upload a PDF or DOC file.');history.back();</script>";
        exit;
      } 
    } 

    if(isset($_FILES['hsc_marksheet']['tmp_name']) && !empty($_FILES['hsc_marksheet']['tmp_name'])){
      $supported_image = array('pdf', 'doc', 'docx');  
      $ext = strtolower(pathinfo($hscMarksheet, PATHINFO_EXTENSION));
      $Img = time().".".$ext;
      if (in_array($ext, $supported_image) ) {
        $qm->UpdateRecord("admission","hsc_marksheet='".$Img."'","id=".$insert);
        move_uploaded_file($_FILES["hsc_marksheet"]["tmp_name"],UPLOAD_HSCRESULT_URL.$Img);	
      }
      else{
        echo "<script>alert('File format not supported. Please upload a PDF or DOC file.');history.back();</script>";
        exit;
      } 
    } 

    if(isset($_FILES['ssc_marksheet']['tmp_name']) && !empty($_FILES['ssc_marksheet']['tmp_name'])){
      $supported_image = array('pdf', 'doc', 'docx');  
      $ext = strtolower(pathinfo($sscMarksheet, PATHINFO_EXTENSION));
      $Img = time().".".$ext;
      if (in_array($ext, $supported_image) ) {
        $qm->UpdateRecord("admission","ssc_marksheet='".$Img."'","id=".$insert);
        move_uploaded_file($_FILES["ssc_marksheet"]["tmp_name"],UPLOAD_SSCRESULT_URL.$Img);	
      }
      else{
        echo "<script>alert('File format not supported. Please upload a PDF or DOC file.');history.back();</script>";
        exit;
      } 
    } 

    header('Location: index.php');
    exit();
}

?>