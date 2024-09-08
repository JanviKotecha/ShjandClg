<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Sahjanand College - Gondal</title>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" href="assets/css/form.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

    <!-- ===============>> Preloader start here <<================= -->
    <?php include("include/preloder.php"); ?>
    <!-- ===============>> Preloader end here <<================= -->

    <!-- ===============>> light&dark switch start here <<================= -->
    <div class="lightdark-switch">
        <span class="switch-btn" id="btnSwitch"><img src="assets/images/icon/moon.svg" alt="light-dark-switchbtn"
                class="swtich-icon"></span>
    </div>
    <!-- ===============>> light&dark switch start here <<================= -->

    <!-- ===============>> Header section start here <<================= -->
    <header class="header-section bg-color-3">
        <?php include("include/header.php"); ?>
    </header>
    <!-- ===============>> Header section end here <<================= -->

    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image:url(assets/images/header/1.png)">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Contact Us</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__shape">
                <span class="page-header__shape-item page-header__shape-item--1"><img src="assets/images/header/2.png"
                        alt="shape-icon"></span>
            </div>
        </div>
    </section>
    <!-- ================> Page header end here <================== -->

    <!-- ===============>> Contact section start here <<================= -->
    <div class="contact padding-top padding-bottom">
        <div class="container">
            <div class="contact__wrapper">
                <!--progress bar-->
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto mb-4">
                        <div class="multisteps-form__progress" id="hidden">
                            <button class="multisteps-form__progress-btn js-active" type="button">Personal
                                Detials</button>
                            <button class="multisteps-form__progress-btn" type="button">Address Details</button>
                            <button class="multisteps-form__progress-btn" type="button">Education Details</button>
                            <button class="multisteps-form__progress-btn" type="button">Step 4</button>
                        </div>
                        <br><br>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-12 col-lg-12 m-auto">
                        <form class="multisteps-form__form" action="form_data.php" method="post" name="myform"
                            novalidate>
                            <!--single form panel 1 -->
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                                data-animation="scaleIn">
                                <h3 class="multisteps-form__title" style="padding-left:18px;">BASIC INFORMATION</h3>
                                <div class="multisteps-form__content">
                                    <div class="form-row mt-4">
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Course Type (For Admission) <sup style="color:#9194A0">*</sup></p>
                                            <select class="multisteps-form__select form-control" name="course_type"
                                                id="course_type" required>
                                                <option value="">Select Course</option>
                                                <option value="B.com">B.com</option>
                                                <option value="B.B.A">B.B.A</option>
                                                <option value="B.C.A">B.C.A</option>
                                                <option value="B.Sc">B.Sc</option>
                                            </select>
                                            <small id="error-course_type" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Application No <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="text"
                                                name="application_no" id="application_no"
                                                value="<?php echo isset($_POST['submit']) ? $application_no : ''; ?>" >
                                            <small id="error-application_no" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Applicant's Name <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="text"
                                                name="applicant_name" id="applicant_name" 
                                                value="<?php echo isset($_POST['submit']) ? $applicant_name : ''; ?>">
                                            <small id="error-applicant_name" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Birth Date <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="date"
                                                name="birth_date" id="birth_date"
                                                value="<?php echo isset($_POST['submit']) ? $birth_date : ''; ?>">
                                            <small id="error-birth_date" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Email <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="email" name="email"
                                                id="email" value="<?php echo isset($_POST['submit']) ? $email : ''; ?>">
                                            <small id="error-email" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Mobile No. <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="number"
                                                name="mobile_no" id="mobile_no"
                                                value="<?php echo isset($_POST['submit']) ? $mobile_no : ''; ?>">
                                            <small id="error-mobile_no" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Father's Name <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="text"
                                                name="fathers_name" id="fathers_name"
                                                value="<?php echo isset($_POST['submit']) ? $fathers_name : ''; ?>">
                                            <small id="error-fathers_name" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Mother's Name <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="text"
                                                name="mothers_name" id="mothers_name"
                                                value="<?php echo isset($_POST['submit']) ? $mothers_name : ''; ?>">
                                            <small id="error-mothers_name" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Parent's Mobile No. <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="number"
                                                name="parents_mobile_no" id="parents_mobile_no"
                                                value="<?php echo isset($_POST['submit']) ? $parents_mobile_no : ''; ?>">
                                            <small id="error-parents_mobile_no" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>No. of Siblings <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="number"
                                                name="no_of_siblings" id="no_of_siblings"
                                                value="<?php echo isset($_POST['submit']) ? $no_of_siblings : ''; ?>">
                                            <small id="error-no_of_siblings" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Category <sup style="color:#9194A0">*</sup></p>
                                            <select class="multisteps-form__select form-control" name="category"
                                                id="category">
                                                <option value=""></option>
                                                <option value="General">General</option>
                                                <option value="OBC">OBC</option>
                                                <option value="SC">SC</option>
                                                <option value="ST">ST</option>
                                            </select>
                                            <small id="error-category" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Gender <sup style="color:#9194A0">*</sup></p>
                                            <select class="multisteps-form__select form-control" name="gender"
                                                id="gender">
                                                <option value=""></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <small id="error-gender" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Disability <sup style="color:#9194A0">*</sup></p>
                                            <select class="multisteps-form__select form-control" name="disability"
                                                id="disability">
                                                <option value=""></option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <small id="error-disability" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Disability Percentage <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="number"
                                                name="disability_percentage" id="disability_percentage"
                                                value="<?php echo isset($_POST['submit']) ? $disability_percentage : ''; ?>">
                                            <small id="error-disability_percentage" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Disability Certificate <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="file"
                                                name="disability_certificate" id="disability_certificate">
                                            <small id="error-disability_certificate" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Nationality <sup style="color:#9194A0">*</sup></p>
                                            <select class="multisteps-form__select form-control" name="nationality"
                                                id="nationality">
                                                <option value=""></option>
                                                <option value="Indian">Indian</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <small id="error-nationality" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Locality <sup style="color:#9194A0">*</sup></p>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <input type="radio" name="locality" id="Urban" value="Urban"> Urban
                                                </div>
                                                <div>
                                                    <input type="radio" name="locality" id="Rural" value="Rural"> Rural
                                                </div>
                                            </div>
                                            <small id="error-locality" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Aadhar Number <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="number"
                                                name="aadhar_number" id="aadhar_number"
                                                value="<?php echo isset($_POST['submit']) ? $aadhar_number : ''; ?>">
                                            <small id="error-aadhar_number" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Religion <sup style="color:#9194A0">*</sup></p>
                                            <select class="multisteps-form__select form-control" name="religion"
                                                id="religion">
                                                <option value=""></option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Muslim">Muslim</option>
                                                <option value="Christian">Christian</option>
                                                <option value="Parsi">Parsi</option>
                                                <option value="Jain">Jain</option>
                                                <option value="Shikh">Shikh</option>
                                            </select>
                                            <small id="error-religion" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Is Minority <sup style="color:#9194A0">*</sup></p>
                                            <input class="form-check-input" type="checkbox" name="is_minority"
                                                id="is_minority">
                                            <small id="error-is_minority" class="text-danger"></small>
                                        </div> 
                                    </div>
                                    <div class="form-row mt-4">
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Profile Photo <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="file"
                                                name="profile_photo" id="profile_photo">
                                            <small id="error-profile_photo" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Signature Photo <sup style="color:#9194A0">*</sup></p>
                                            <input class="multisteps-form__input form-control" type="file"
                                                name="signature_photo" id="signature_photo">
                                            <small id="error-signature_photo" class="text-danger"></small>
                                        </div>
                                    </div> 
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                            title="Next">Next Step</button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel 2 -->
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white " data-animation="scaleIn">
                                <h3 class="multisteps-form__title" style="padding-left:18px;">BILL TO</h3>
                                <div class="multisteps-form__content">
                                    <div class="form-row mt-4">
                                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                            <p>Bill To </p>
                                            <select class="multisteps-form__select form-control" name="billto"
                                                id="billto">
                                                <option value=""></option>
                                                <option value="Insurance">Insurance</option>
                                                <option value="Uninsurance">Uninsured</option>
                                                <option value="Patient">Patient</option>
                                                <option value="Provider or Business">Provider or Business</option>
                                            </select>
                                            <small id="error-billto" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <p>Insurance Name </p>
                                            <input class="multisteps-form__input form-control" type="text"
                                                placeholder="" name="insunm" id="insunm" />
                                            <small id="error-insunm" class="text-danger"></small>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev"
                                            style="background: white;color: #0392ce;">Previous Step</button>
                                        <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                            title="Next">Next Step</button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel 3 -->
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white " data-animation="scaleIn">
                                <h3 class="multisteps-form__title" style="padding-left:18px;">SPECIMEN INFORMATION </h3>
                                <div class="multisteps-form__content">
                                    <div class="form-row mt-4">
                                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                            <p>Reason for submission <sup style="color:#9194A0">*</sup> </p>
                                            <select class="multisteps-form__select form-control" name="rfs" id="rfs">
                                                <option valude="Reason for submission">Reason for submission</option>
                                                <option value="Diagnostic">Diagnostic</option>
                                                <option value="Screening">Screening</option>
                                                <option value="Contracted with COVID positive person">Contracted with
                                                    COVID positive person &nbsp;</option>
                                                <option value="Sickness">Sickness</option>
                                                <option value="Travel">Travel</option>
                                                <option class="pr-2" value="Possible Exposure to COVID positive person">
                                                    Possible Exposure to COVID positive person &nbsp;</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <p>Specimen Type </p>
                                            <select class="multisteps-form__select form-control" name="stype">
                                                <option valude="">Specimen Type </option>
                                                <option value="Sterile Container">Sterile Container</option>
                                                <option value="Blood Tube (Plasma, Serum or Whole Blood)">Blood Tube
                                                    (Plasma, Serum or Whole Blood) &nbsp;</option>
                                                <option value="Other (Specify)">Other (Specify)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row mt-4">
                                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                            <p>Specimen Source </p>
                                            <select class="multisteps-form__select form-control" name="speso">
                                                <option value="Specimen Source">Specimen Source </option>
                                                <option value="Nasopharyngeal (NP)">Nasopharyngeal (NP)</option>
                                                <option value="Oral Saliva">Oral Saliva</option>
                                                <option value="Other (Specify)">Other (Specify)</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <p>Test Request <sup style="color:#9194A0">*</sup> </p>
                                            <select class="multisteps-form__select form-control" name="sreq" id="sreq">
                                                <option value="Test Request">Test Request </option>
                                                <option value="SARS CoV-2 Molecular Test (RT-PCR)">SARS CoV-2 Molecular
                                                    Test (RT-PCR) &nbsp;</option>
                                                <option value="SARS CoV-2 Rapid Antigen">SARS CoV-2 Rapid Antigen
                                                </option>
                                                <option
                                                    value="SARS CoV-2 RT-PCR plus FLU (*Physican Referral Required)">
                                                    SARS CoV-2 RT-PCR plus FLU (*Physican Referral Required) &nbsp;
                                                </option>
                                                <option value="COVID-19 IgG / IgM Rapid Test">COVID-19 IgG / IgM Rapid
                                                    Test &nbsp;</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev"
                                            style="background: white;color: #0392ce;">Previous Step</button>
                                        <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                            title="Next">Next Step</button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel 4 -->
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title" style="padding-left:18px;">PATIENT DECLARATION</h3>
                                <div class="multisteps-form__content">
                                    <div class="form-row mt-4">
                                        <div class="col">
                                            <input type="checkbox" id="trm" name="trm">
                                            <label for="trm"
                                                style="font-size: 15px;text-align: justify;color: #0392ce;"> I agree to
                                                the Terms of use and Privacy Policy</label><br>
                                            <p style="font-size: 10px;text-align: justify;color: black;"> With this you
                                                are accepting that Laboratory will furnish to my designated insurance
                                                carrier the information on this form necessary for reimbursement.
                                                <br><br> I hereby authorize service be performed and assign that
                                                benefits be payable to Laboratory.<br><br> I understand that if any
                                                insurer doesn't pay and denies the claim as an uncovered service, I am
                                                responsible for payment. I authorize my insurance benefits to be paid
                                                directly to the laboratory for services I received. The laboratory is
                                                authorized to bill my insurance provider and to receive payment of
                                                benefits for the tests. I further authorize the testing laboratory and
                                                my physician to release to my insurance provider any medical information
                                                necessary to this claim.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-row mt-4">
                                        <div class="col-12 col-sm-6">
                                            <p>Patient Full Name <sup style="color:#9194A0">*</sup> </p>
                                            <input class="multisteps-form__input form-control" type="text"
                                                placeholder="" name="psig" id="psig" />
                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev"
                                            style="background: white;color: #0392ce;">Previous Step</button>
                                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next"
                                            style="background-color:green; border:none;">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn"
                                style="height: 400px;">
                                <center>
                                    <img src="images/icon/ico.png" alt="" style="height: 97px; padding:5px">
                                    <div class="multisteps-form__content">
                                        <div class="form-row mt-4">
                                            <div class="col-12 col-sm-12 mt-4 mt-sm-0">
                                                <h1>Success !</h1>
                                                <h6>Your form has been submitted.</h6>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn  ml-auto" type="submit" title="Send" name="submit"
                                                style="background-color:#0392ce; color:white; margin: 0px 296px; margin-top: 74px; border:none;">Go
                                                To Home</button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="contact__shape">
            <span class="contact__shape-item contact__shape-item--1"><img src="assets/images/contact/4.png"
                    alt="shape-icon"></span>
            <span class="contact__shape-item contact__shape-item--2"> <span></span> </span>
        </div>
    </div>
    <!-- ===============>> Contact section start here <<================= -->

    <script src="assets/js/formScript.js"></script>

    <!-- ===============>> footer start here <<================= -->
    <?php include("include/footer.php"); ?>
    <!-- ===============>> footer end here <<================= -->

    <!-- ===============>> scrollToTop start here <<================= -->
    <?php include("include/footer-script.php"); ?>

</body>

</html>