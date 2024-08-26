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

// remove class from a set of items
const removeClasses = (elemSet, className) => {
  elemSet.forEach((elem) => {
    elem.classList.remove(className);
  });
};

// return exact parent node of the element
const findParent = (elem, parentClass) => {
  let currentNode = elem;

  while (!currentNode.classList.contains(parentClass)) {
    currentNode = currentNode.parentNode;
  }

  return currentNode;
};

// get active button step number
const getActiveStep = (elem) => {
  return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

// set all steps before clicked (and clicked too) to active
const setActiveStep = (activeStepNum) => {
  // remove active state from all the steps
  removeClasses(DOMstrings.stepsBtns, "js-active");

  // set picked items to active
  DOMstrings.stepsBtns.forEach((elem, index) => {
    if (index <= activeStepNum) {
      elem.classList.add("js-active");
    }
  });
};

// get active panel
const getActivePanel = () => {
  let activePanel;

  DOMstrings.stepFormPanels.forEach((elem) => {
    if (elem.classList.contains("js-active")) {
      activePanel = elem;
    }
  });
  console.log("activePanel", activePanel);
  return activePanel;
};

const setActivePanel = (activePanelNum) => {
  // remove active class from all the panels
  removeClasses(DOMstrings.stepFormPanels, "js-active");

  // show active panel
  DOMstrings.stepFormPanels.forEach((elem, index) => {
    if (index === activePanelNum) {
      elem.classList.add("js-active");

      setFormHeight(elem);
    }
  });
};

// set form height equal to current panel height
const formHeight = (activePanel) => {
  const activePanelHeight = activePanel.offsetHeight;

  DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
};

const setFormHeight = () => {
  const activePanel = getActivePanel();

  formHeight(activePanel);
};

// Modify the Next Step Button Click Event to pass the active panel number to validateForm
DOMstrings.stepsForm.addEventListener("click", (e) => {
  if (e.target.classList.contains(`${DOMstrings.stepNextBtnClass}`)) {
    const activePanel = findParent(e.target, DOMstrings.stepFormPanelClass);
    const activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(
      activePanel
    );
    const nextPanel = activePanelNum + 1;

    const { valid } = validateForm(activePanelNum);
    if (valid) {
      setActiveStep(nextPanel);
      setActivePanel(nextPanel);
    } else {
      setFormHeight(); // Adjust height if there are validation errors
    }
  }
});

// The Previous Step Button Click Event remains the same
DOMstrings.stepsForm.addEventListener("click", (e) => {
  if (e.target.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
    const activePanel = findParent(e.target, DOMstrings.stepFormPanelClass);
    const activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(
      activePanel
    );
    const prevPanel = activePanelNum - 1;

    setActiveStep(prevPanel);
    setActivePanel(prevPanel);
  }
});

// Set form height on page load
window.addEventListener("load", setFormHeight, false);

// Set form height on window resize
window.addEventListener("resize", setFormHeight, false);

function validateForm(activePanelNum) {
  let valid = true;
  let fields = [];
  let errorFields = [];

  if (activePanelNum === 0) {
    fields = [
      { id: "course_type", message: "Course Type is required" },
      // { id: "application_no", message: "Application No is required" },
      // { id: "applicant_name", message: "Applicant's Name is required" },
      // { id: "birth_date", message: "Birth Date is required" },
      // { id: "email", message: "Email is required" },
      // { id: "mobile_no", message: "Mobile No. is required" },
      // { id: "fathers_name", message: "Father's Name is required" },
      // { id: "mothers_name", message: "Mother's Name is required" },
      // { id: "parents_mobile_no", message: "Parent's Mobile No. is required" },
      // { id: "no_of_siblings", message: "No. of Siblings is required" },
      // { id: "category", message: "Category is required" },
      // { id: "gender", message: "Gender is required" },
      // { id: "disability", message: "Disability status is required" },
      // {
      //   id: "disability_percentage",
      //   message: "Disability Percentage is required",
      // },
      // {
      //   id: "disability_certificate",
      //   message: "Disability Certificate is required",
      // },
      // { id: "nationality", message: "Nationality is required" },
      // { id: "locality", message: "Locality is required", type: "radio" }, // Added type for radio buttons
      // { id: "aadhar_number", message: "Aadhar Number is required" },
      // { id: "religion", message: "Religion is required" },
      // {
      //   id: "is_minority",
      //   message: "Minority status is required",
      //   type: "checkbox",
      // },
      // { id: "profile_photo", message: "Profile Photo is required" },
      // { id: "signature_photo", message: "Signature Photo is required" },
    ];
  } else if (activePanelNum === 1) {
    fields = [
      { id: "billto", message: "Bill To is required" },
      { id: "insunm", message: "Insurance Name is required" },
    ];
  }

  // Perform validation checks
  fields.forEach((field) => {
    if (field.type === "radio") {
      const radios = document.getElementsByName(field.id);
      const errorElem = document.getElementById(`error-${field.id}`);
      let checked = false;

      radios.forEach((radio) => {
        if (radio.checked) {
          checked = true;
        }
        radio.addEventListener("change", () => {
          errorElem.textContent = "";
        });
      });

      if (!checked) {
        errorElem.textContent = field.message;
        valid = false;
        errorFields.push(field.id);
      } else {
        errorElem.textContent = "";
      }
    } else if (field.type === "checkbox") {
      const checkbox = document.getElementById(field.id);
      const errorElem = document.getElementById(`error-${field.id}`);

      if (!checkbox.checked) {
        errorElem.textContent = field.message;
        valid = false;
        errorFields.push(field.id);

        checkbox.addEventListener("change", () => {
          errorElem.textContent = "";
        });
      } else {
        errorElem.textContent = "";
      }
    } else {
      console.log("field values", field, field.id);
      const input = document.getElementById(field.id);
      const errorElem = document.getElementById(`error-${field.id}`);
      console.log("input value", input);
      if (!input.value) {
        errorElem.textContent = field.message;
        valid = false;
        errorFields.push(field.id);

        input.addEventListener("input", () => {
          errorElem.textContent = "";
        });
      } else {
        errorElem.textContent = "";
      }
    }
  });

  return { valid, errorFields };
}
