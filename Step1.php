<div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
    <h3 class="multisteps-form__title" style="padding-left:18px;">BASIC INFORMATION</h3>
    <div class="multisteps-form__content">
        <div class="form-row mt-4">
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Course Type (For Admission) <sup style="color:#9194A0">*</sup></p>
                <select class="multisteps-form__select form-control" name="course_type" id="course_type" required>
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
                <input class="multisteps-form__input form-control" type="text" name="application_no" id="application_no"
                    value="<?php echo isset($_POST['submit']) ? $application_no : ''; ?>">
                <small id="error-application_no" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Applicant's Name <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="text" name="applicant_name" id="applicant_name"
                    value="<?php echo isset($_POST['submit']) ? $applicant_name : ''; ?>">
                <small id="error-applicant_name" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Birth Date <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="date" name="birth_date" id="birth_date"
                    value="<?php echo isset($_POST['submit']) ? $birth_date : ''; ?>">
                <small id="error-birth_date" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Email <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="email" name="email" id="email"
                    value="<?php echo isset($_POST['submit']) ? $email : ''; ?>">
                <small id="error-email" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Mobile No. <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="number" name="mobile_no" id="mobile_no"
                    value="<?php echo isset($_POST['submit']) ? $mobile_no : ''; ?>">
                <small id="error-mobile_no" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Father's Name <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="text" name="fathers_name" id="fathers_name"
                    value="<?php echo isset($_POST['submit']) ? $fathers_name : ''; ?>">
                <small id="error-fathers_name" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Mother's Name <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="text" name="mothers_name" id="mothers_name"
                    value="<?php echo isset($_POST['submit']) ? $mothers_name : ''; ?>">
                <small id="error-mothers_name" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Parent's Mobile No. <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="number" name="parents_mobile_no"
                    id="parents_mobile_no" value="<?php echo isset($_POST['submit']) ? $parents_mobile_no : ''; ?>">
                <small id="error-parents_mobile_no" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>No. of Siblings <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="number" name="no_of_siblings"
                    id="no_of_siblings" value="<?php echo isset($_POST['submit']) ? $no_of_siblings : ''; ?>">
                <small id="error-no_of_siblings" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Category <sup style="color:#9194A0">*</sup></p>
                <select class="multisteps-form__select form-control" name="category" id="category">
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
                <select class="multisteps-form__select form-control" name="gender" id="gender">
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <small id="error-gender" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Disability <sup style="color:#9194A0">*</sup></p>
                <select class="multisteps-form__select form-control" name="disability" id="disability">
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <small id="error-disability" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1" id="disability_percentage_container" style="display: none;">
                <p>Disability Percentage <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="number" name="disability_percentage"
                    id="disability_percentage"
                    value="<?php echo isset($_POST['submit']) ? $disability_percentage : ''; ?>">
                <small id="error-disability_percentage" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1" id="disability_certificate_container" style="display: none;">
                <p>Disability Certificate <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="file" name="disability_certificate"
                    id="disability_certificate">
                <small id="error-disability_certificate" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Nationality <sup style="color:#9194A0">*</sup></p>
                <select class="multisteps-form__select form-control" name="nationality" id="nationality">
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
                <input class="multisteps-form__input form-control" type="number" name="aadhar_number" id="aadhar_number"
                    value="<?php echo isset($_POST['submit']) ? $aadhar_number : ''; ?>">
                <small id="error-aadhar_number" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Religion <sup style="color:#9194A0">*</sup></p>
                <select class="multisteps-form__select form-control" name="religion" id="religion">
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
                <p>Is Minority</p>
                <input class="form-check-input" type="checkbox" name="is_minority" id="is_minority">
                <small id="error-is_minority" class="text-danger"></small>
            </div>
        </div>
        <div class="form-row mt-4">
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Profile Photo <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="file" name="profile_photo" id="profile_photo">
                <small id="error-profile_photo" class="text-danger"></small>
            </div>
            <div class="col-12 col-md-4 col-sm-6 px-1">
                <p>Signature Photo <sup style="color:#9194A0">*</sup></p>
                <input class="multisteps-form__input form-control" type="file" name="signature_photo" id="signature_photo">
                <small id="error-signature_photo" class="text-danger"></small>
            </div>
        </div>
        <div class="button-row d-flex mt-4">
            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
        </div>
    </div>
</div>