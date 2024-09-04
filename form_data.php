<?php 
include 'include/config.php'; 
require('fpdf/fpdf.php');

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
    
    $profile_photo1;
    // File upload handling
    if(isset($_FILES['profile_photo']['tmp_name']) && !empty($_FILES['profile_photo']['tmp_name'])){
        $supported_image = array('jpg','jpeg','png');  
        $ext = strtolower(pathinfo($profile_photo, PATHINFO_EXTENSION));
        $Img = time().".".$ext;
        $profile_photo1 =$Img;  
        if (in_array($ext, $supported_image) ) {
          $qm->UpdateRecord("admission","profile_photo='".$Img."'","id=".$insert);
          move_uploaded_file($_FILES["profile_photo"]["tmp_name"],UPLOAD_PROFILE_URL.$Img);	
        }
        else{
          echo "<script>alert('Profile Photo is not formeted');history.back();</script>";
          exit;
        } 
    } 

    $signature_photo1;
    if(isset($_FILES['signature_photo']['tmp_name']) && !empty($_FILES['signature_photo']['tmp_name'])){
      $supported_image = array('jpg','jpeg','png');  
      $ext = strtolower(pathinfo($signaturePhoto, PATHINFO_EXTENSION));
      $Img = time().".".$ext;
      $signature_photo1 = $Img;
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

    // header('Location: index.php');
    // exit();
    // After the form data is inserted and files are handled, generate the PDF
    class PDF extends FPDF {
      function AddDetails($details) {
        $this->SetFont('Arial', 'B', 12);
        foreach ($details as $label => $value) {
            $this->Cell(50, 10, $label, 0, 0);
            $this->SetFont('Arial', '', 12);
            $this->Cell(0, 10, $value, 0, 1);
            $this->SetFont('Arial', 'B', 12);
        }
        $this->Ln(5);
      }
      // Page header
      function Header() {
        // Set the path to the logo image
        $logoPath = 'assets/images/logo/logo.png'; // Ensure you have a valid path to the logo image
        
        // Add the logo to the left side
        if (file_exists($logoPath)) {
            $this->Image($logoPath, 10, 10, 20); // (x=10, y=10, width=30)
        }
    
        // Move to the right
        $this->SetFont('Arial', 'B', 18); // Set font to Arial bold with size 18 for the college name
        $this->Cell(0, 15, 'Sahjanand College - Gondal', 0, 1, 'C'); // College name centered
        
        // Subtitle below the college name
        $this->SetFont('Arial', '', 12); // Set font to Arial regular with size 12 for the subtitle
        $this->Cell(0, 10, 'Under Graduate Application Form', 0, 1, 'C'); // Subtitle centered
        $this->Ln(5);
        $this->SetDrawColor(0, 0, 0); // Set draw color to black for underline
        $this->Line($this->GetX(), $this->GetY(), $this->GetX() + 190, $this->GetY()); // Draw the underline
        $currentYear = date('Y'); // Get the current year
        $nextYear = $currentYear + 1; // Calculate the next year
        $academicYear = $currentYear . '-' . $nextYear; // Format the academic year

        // Display the academic year
        $this->SetFont('Arial', '', 12); // Set font to Arial regular with size 12
        $this->Cell(0, 10, 'Academic Year: ' . $academicYear, 0, 1, 'L');

        // Line break
        $this->Ln(10);
      }

      // Page footer
      function Footer() {
          // Position at 1.5 cm from bottom
          $this->SetY(-15);
          // Set font
          $this->SetFont('Arial', 'I', 8);
          // Page number
          $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
      }

      // Function to add a heading with underline
      function AddHeading($text) {
        $this->SetFont('Arial', 'B', 14); // Set font to bold and size 14
        $this->Cell(0, 10, $text, 0, 1, 'L'); // Add the heading text
        $this->SetDrawColor(0, 0, 0); // Set draw color to black for underline
        $this->Line($this->GetX(), $this->GetY(), $this->GetX() + 190, $this->GetY()); // Draw the underline
        $this->Ln(3); // Line break after the underline
    }  
  }

  // Create a new PDF document
  $pdf = new PDF();
  $pdf->AddPage();

  // Add the profile photo
  if (file_exists(UPLOAD_PROFILE_URL . $profile_photo1)) {
      $pdf->Image(UPLOAD_PROFILE_URL . $profile_photo1,  150, 63, 40); // Adjust the position and size as needed
  }

  $personalDetails = [
    'Applicant Name: ' => $applicantName,
    'Date of Birth: ' => $dob,
    'Email: ' => $email,
    'Mobile No: ' => $mobileNo,
    'Father\'s Name: ' => $fathersName,
    'Mother\'s Name: ' => $mothersName,
    'Parents\' Mobile No: ' => $parentsMobileNo,
    'No. of Siblings: ' => $noOfSiblings,
    'Category: ' => $category,
    'Gender: ' => $gender,
    'Disability: ' => $disability,
    'Disability Percentage: ' => $disabilityPercentage,
    'Nationality: ' => $nationality,
    'Locality: ' => $locality,
    'Aadhar Number: ' => $aadharNumber,
    'Religion: ' => $religion,
    'Minority Status: ' => $isMinority ? 'Yes' : 'No',
    "Course for Admission:" => $courseType,
  ];

  // Set the font for content
  $pdf->SetFont('Arial', '', 12);
  $pdf->SetXY(10, 50); 
  // Personal Details Section
  $pdf->AddHeading('Personal Details');
  $pdf->AddDetails($personalDetails);
  // (Add more fields as needed...)

  // Add Present Address Section
  $presentAddress = [
    'Present Address: ' => $presentAddress,
    'State: ' => $presentState,
    'District: ' => $presentDistrict,
    'Taluka: ' => $presentTaluka,
    'Pincode: ' => $presentPincode
  ];
  $pdf->Ln(10); // Line break
  $pdf->AddHeading('Present Address');
  $pdf->AddDetails($presentAddress);

  // Add Permanent Address Section
  $permanentAddress = [
    'Permanent Address: ' => $permanentAddress,
    'State: ' => $permanentState,
    'District: ' => $permanentDistrict,
    'Taluka: ' => $permanentTaluka,
    'Pincode: ' => $permanentPincode
  ];
  $pdf->Ln(10); // Line break
  $pdf->AddHeading('Permanent Address');
  $pdf->AddDetails($permanentAddress);

  // HSC Details Section
  $pdf->Ln(10); // Line break
  $hscDetails = [
    'HSC / Diploma: ' => $hscDiploma,
    'Board: ' => $hscBoard,
    'Passing Year: ' => $hscPassingYear,
    'Seat No: ' => $hscSeatNo,
    'Percentage: ' => $hscPercentage
  ];
  $pdf->AddHeading('HSC Details');
  $pdf->AddDetails($hscDetails);

  // Add SSC details section
  $sscDetails = [
    'Board: ' => $sscBoard,
    'Passing Year: ' => $sscPassingYear,
    'Seat No: ' => $sscSeatNo,
    'Percentage: ' => $sscPercentage
  ];

  $pdf->AddHeading('SSC Details');
  $pdf->AddDetails($sscDetails);

  // Declaration Paragraph
  $pdf->Ln(10); // Add some space before the paragraph
  $pdf->SetFont('Arial', '', 12); // Set font for the paragraph
  $pdf->MultiCell(0, 10, "I hereby declare that the information provided in this application form is true and accurate to the best of my knowledge. I understand that any misrepresentation or omission of facts in this application may lead to my disqualification or dismissal from the college. I agree to abide by the rules and regulations of the college, including those pertaining to academic integrity, attendance, and conduct.", 0, 'L');

  // Signature Photo and Applicant Name
  if (file_exists(UPLOAD_SIGNATURE_URL . $signature_photo1)) {
      $pdf->Image(UPLOAD_SIGNATURE_URL . $signature_photo1, 150, $pdf->GetY() + 10, 40); // Place the signature photo on the right
  }
  
  $pdf->SetXY(150, $pdf->GetY() + 45); // Set position below the signature photo
  $pdf->Cell(50, 10, 'Signature: ' . $applicantName, 0, 1, 'R'); // Add applicant's name below the signature

  $filename = 'admission_application_' . date('Ymd_His') . '.pdf';
  $filePath = 'images/admissionPdfs/' . $filename;

  // Save the PDF to a file
  $pdf->Output('F', $filePath);
  $qm->UpdateRecord("admission", "pdf_url='$filename'", "id=$insert");

  // Output the PDF
  // $pdf->Output('I', 'admission_application.pdf');
  // exit();  
  header("Location: success.php?file=$filename");
  exit();
}

?>