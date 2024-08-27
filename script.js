//DOM elements

const DOMstrings = {
  stepsBtnClass: "multisteps-form__progress-btn",
  stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
  stepsBar: document.querySelector(".multisteps-form__progress"),
  stepsForm: document.querySelector(".multisteps-form__form"),
  stepsFormTextareas: document.querySelectorAll(".multisteps-form__textarea"),
  stepFormPanelClass: "multisteps-form__panel",
  stepFormPanels: document.querySelectorAll(".multisteps-form__panel"),
  stepPrevBtnClass: "js-btn-prev",
  stepNextBtnClass: "js-btn-next",
};

//remove class from a set of items
const removeClasses = (elemSet, className) => {
  elemSet.forEach((elem) => {
    elem.classList.remove(className);
  });
};

//return exect parent node of the element
const findParent = (elem, parentClass) => {
  let currentNode = elem;

  while (!currentNode.classList.contains(parentClass)) {
    currentNode = currentNode.parentNode;
  }

  return currentNode;
};

//get active button step number
const getActiveStep = (elem) => {
  return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

//set all steps before clicked (and clicked too) to active
const setActiveStep = (activeStepNum) => {
  //remove active state from all the state
  removeClasses(DOMstrings.stepsBtns, "js-active");

  //set picked items to active
  DOMstrings.stepsBtns.forEach((elem, index) => {
    if (index <= activeStepNum) {
      elem.classList.add("js-active");
    }
  });
};

//get active panel
const getActivePanel = () => {
  let activePanel;

  DOMstrings.stepFormPanels.forEach((elem) => {
    if (elem.classList.contains("js-active")) {
      activePanel = elem;
    }
  });

  return activePanel;
};

//open active panel (and close unactive panels)
const setActivePanel = (activePanelNum) => {
  //remove active class from all the panels
  removeClasses(DOMstrings.stepFormPanels, "js-active");

  //show active panel
  DOMstrings.stepFormPanels.forEach((elem, index) => {
    if (index === activePanelNum) {
      elem.classList.add("js-active");

      setFormHeight(elem);
    }
  });
};

//set form height equal to current panel height
const formHeight = (activePanel) => {
  const activePanelHeight = activePanel.offsetHeight;

  DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
};

const setFormHeight = () => {
  const activePanel = getActivePanel();

  formHeight(activePanel);
};

// function check(){
//   alert("oh");
// }

//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener("click", (e) => {
  const eventTarget = e.target;

  //check if we clicked on `PREV` or NEXT` buttons
  if (
    !(
      eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) ||
      eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)
    )
  ) {
    return;
  }

  //find active panel
  const activePanel = findParent(
    eventTarget,
    `${DOMstrings.stepFormPanelClass}`
  );

  let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(
    activePanel
  );

  // Validation for Step 1
  if (activePanelNum === 0) {
    let courseType = document.getElementById("course_type").value;
    let applicationNo = document.getElementById("application_no").value;
    let applicantName = document.getElementById("applicant_name").value;
    let birthDate = document.getElementById("birth_date").value;
    let email = document.getElementById("email").value;
    let mobileNo = document.getElementById("mobile_no").value;
    let fathersName = document.getElementById("fathers_name").value;
    let mothersName = document.getElementById("mothers_name").value;
    let parentsMobileNo = document.getElementById("parents_mobile_no").value;
    let noOfSiblings = document.getElementById("no_of_siblings").value;
    let category = document.getElementById("category").value;
    let gender = document.getElementById("gender").value;
    let disability = document.getElementById("disability").value;
    let disabilityPercentage = document.getElementById(
      "disability_percentage"
    ).value;
    let disabilityCertificate = document.getElementById(
      "disability_certificate"
    ).value;
    let nationality = document.getElementById("nationality").value;
    let locality = document.querySelector('input[name="locality"]:checked');
    let aadharNumber = document.getElementById("aadhar_number").value;
    let religion = document.getElementById("religion").value;
    let isMinority = document.getElementById("is_minority").checked;
    let profilePhoto = document.getElementById("profile_photo").value;
    let signaturePhoto = document.getElementById("signature_photo").value;

    var filter = /^[a-z0-9](\.?[a-z0-9]){1,}@gmail\.com/;
    var phoneno = /^\d{10}$/;

    if (courseType == "") {
      alert("Please Select Course Type");
    } else if (applicationNo == "") {
      alert("Please Enter Application Number");
    } else if (applicantName == "") {
      alert("Please Enter Applicant's Name");
    } else if (birthDate == "") {
      alert("Please Enter Birth Date");
    } else if (email == "") {
      alert("Please Enter Email");
    } else if (!filter.test(email)) {
      alert("Invalid Email");
    } else if (mobileNo == "") {
      alert("Please Enter Mobile Number");
    } else if (!phoneno.test(mobileNo)) {
      alert("Invalid Mobile Number");
    } else if (fathersName == "") {
      alert("Please Enter Father's Name");
    } else if (mothersName == "") {
      alert("Please Enter Mother's Name");
    } else if (parentsMobileNo == "") {
      alert("Please Enter Parent's Mobile Number");
    } else if (!phoneno.test(parentsMobileNo)) {
      alert("Invalid Parent's Mobile Number");
    } else if (noOfSiblings == "") {
      alert("Please Enter Number of Siblings");
    } else if (category == "") {
      alert("Please Select Category");
    } else if (gender == "") {
      alert("Please Select Gender");
    } else if (disability == "") {
      alert("Please Select Disability Status");
    } else if (disability === "Yes" && disabilityPercentage == "") {
      alert("Please Enter Disability Percentage");
    } else if (disability === "Yes" && disabilityCertificate == "") {
      alert("Please Upload Disability Certificate");
    } else if (nationality == "") {
      alert("Please Select Nationality");
    } else if (!locality) {
      alert("Please Select Locality");
    } else if (aadharNumber == "") {
      alert("Please Enter Aadhar Number");
    } else if (religion == "") {
      alert("Please Select Religion");
    } else if (profilePhoto == "") {
      alert("Please Upload Profile Photo");
    } else if (signaturePhoto == "") {
      alert("Please Upload Signature Photo");
    } else {
      activePanelNum++;
    }
  } else if (activePanelNum === 1) {
    let presentAddress = document.getElementById("present_address").value;
    let presentState = document.getElementById("present_state").value;
    let presentDistrict = document.getElementById("present_district").value;
    let presentTaluka = document.getElementById("present_taluka").value;
    let presentPincode = document.getElementById("present_pincode").value;
    let permanentAddress = document.getElementById("permanent_address").value;
    let permanentState = document.getElementById("permanent_state").value;
    let permanentDistrict = document.getElementById("permanent_district").value;
    let permanentTaluka = document.getElementById("permanent_taluka").value;
    let permanentPincode = document.getElementById("permanent_pincode").value;

    if (presentAddress === "") {
      alert("Please enter Present Address.");
    } else if (presentState === "") {
      alert("Please enter Present State.");
    } else if (presentDistrict === "") {
      alert("Please enter Present District.");
    } else if (presentTaluka === "") {
      alert("Please enter Present Taluka.");
    } else if (presentPincode === "") {
      alert("Please enter Present Pincode.");
    } else if (permanentAddress === "") {
      alert("Please enter Permanent Address.");
    } else if (permanentState === "") {
      alert("Please enter Permanent State.");
    } else if (permanentDistrict === "") {
      alert("Please enter Permanent District.");
    } else if (permanentTaluka === "") {
      alert("Please enter Permanent Taluka.");
    } else if (permanentPincode === "") {
      alert("Please enter Permanent Pincode.");
    } else {
      activePanelNum++;
    }
  } else if (activePanelNum === 2) {
    // H.S.C. / Diploma (Equivalent) Details
    let hscDiploma = document.querySelector(
      'input[name="hsc_diploma"]:checked'
    );
    let hscBoard = document.getElementById("hsc_board").value;
    let hscPassingYear = document.getElementById("hsc_passing_year").value;
    let hscSeatNo = document.getElementById("hsc_seat_no").value;
    let hscPercentage = document.getElementById("hsc_percentage").value;
    let hscMarksheet = document.getElementById("hsc_marksheet").value;

    // S.S.C. Details
    let sscBoard = document.getElementById("ssc_board").value;
    let sscPassingYear = document.getElementById("ssc_passing_year").value;
    let sscSeatNo = document.getElementById("ssc_seat_no").value;
    let sscPercentage = document.getElementById("ssc_percentage").value;
    let sscMarksheet = document.getElementById("ssc_marksheet").value;

    // Validation for H.S.C. / Diploma (Equivalent) Details
    if (!hscDiploma) {
      alert("Please select H.S.C. or Diploma (Equivalent).");
    } else if (hscBoard === "") {
      alert("Please enter H.S.C. / Diploma (Equivalent) Exam Board.");
    } else if (hscPassingYear === "") {
      alert("Please enter H.S.C. / Diploma (Equivalent) Passing Year.");
    } else if (hscSeatNo === "") {
      alert("Please enter H.S.C. / Diploma (Equivalent) Seat No.");
    } else if (hscPercentage === "") {
      alert("Please enter H.S.C. / Diploma (Equivalent) Percentage.");
    } else if (hscMarksheet === "") {
      alert("Please upload H.S.C. / Diploma (Equivalent) Marksheet.");
    }
    // Validation for S.S.C. Details
    else if (sscBoard === "") {
      alert("Please enter S.S.C. Exam Board.");
    } else if (sscPassingYear === "") {
      alert("Please enter S.S.C. Passing Year.");
    } else if (sscSeatNo === "") {
      alert("Please enter S.S.C. Seat No.");
    } else if (sscPercentage === "") {
      alert("Please enter S.S.C. Percentage.");
    } else if (sscMarksheet === "") {
      alert("Please upload S.S.C. Marksheet.");
    } else {
      activePanelNum++;
    }
  } else if (activePanelNum === 3) {
    let agreeCheckbox = document.getElementById("agree");

    if (!agreeCheckbox.checked) {
      alert("Please agree to the terms and conditions before submitting.");
      event.preventDefault();
    } else {
      activePanelNum++;
    }
  }

  if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
    activePanelNum--;
  }

  setActiveStep(activePanelNum);
  setActivePanel(activePanelNum);
});

//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener("load", setFormHeight, false);

//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener("resize", setFormHeight, false);

//changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

const setAnimationType = (newType) => {
  DOMstrings.stepFormPanels.forEach((elem) => {
    elem.dataset.animation = newType;
  });
};

//selector onchange - changing animation
const animationSelect = document.querySelector(".pick-animation__select");

// animationSelect.addEventListener('change', () => {
//   const newAnimationType = animationSelect.value;

//   setAnimationType(newAnimationType);
// });
