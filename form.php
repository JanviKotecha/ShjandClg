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
                        <li class="breadcrumb-item "><a href="index.html">Home</a></li>
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
                            <button class="multisteps-form__progress-btn js-active" type="button">Step 1</button>
                            <button class="multisteps-form__progress-btn" type="button">Step 2</button>
                            <button class="multisteps-form__progress-btn" type="button">Step 3</button>
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
                                <h3 class="multisteps-form__title" style="padding-left:18px;">PERSONAL INFORMATION</h3>
                                <div class="multisteps-form__content">
                                    <div class="form-row mt-4">
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>First Name <sup style="color:#9194A0">*</sup> </p>
                                            <input class="multisteps-form__input form-control" type="text"
                                                placeholder="" name="fnm" id="fnm"
                                                value="<?php echo  isset($_POST['submit']) ?  $fnm : '' ?>">
                                            <small id="error-fnm" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Last Name <sup style="color:#9194A0">*</sup> </p>
                                            <input class="multisteps-form__input form-control" type="text"
                                                placeholder="" name="lnm" id="lnm"
                                                value="<?php echo  isset($_POST['submit']) ?  $lnm : '' ?>">
                                                <small id="error-lnm" class="text-danger"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-6 px-1">
                                            <p>Date Of Birth <sup style="color:#9194A0">*</sup> </p>
                                            <input class="multisteps-form__input form-control" type="text"
                                                placeholder="Date of Birth" onfocus="(this.type='date')" name="dob"
                                                id="dob" value="<?php echo  isset($_POST['submit']) ? $dof :'' ?>" />
                                                <small id="error-dob" class="text-danger"></small>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                            title="Next">Next Step</button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel 2 -->
                            <!--single form panel 3 -->
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white " data-animation="scaleIn">
                                <h3 class="multisteps-form__title" style="padding-left:18px;">BILL TO</h3>
                                <div class="multisteps-form__content">
                                    <div class="form-row mt-4">
                                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                            <p>Bill To </p>
                                            <select class="multisteps-form__select form-control" name="billto" id="billto">
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
                            <!--single form panel 4 -->
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
                            <!--single form panel 5 -->
                            <!--single form panel 6 -->
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