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

  return activePanel;
};

// open active panel (and close inactive panels)
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

// Next Step Button Click Event
DOMstrings.stepsForm.addEventListener("click", (e) => {
  if (e.target.classList.contains(`${DOMstrings.stepNextBtnClass}`)) {
    const activePanel = findParent(e.target, DOMstrings.stepFormPanelClass);
    const activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(
      activePanel
    );
    const nextPanel = activePanelNum + 1;

    if (validateForm()) {
      setActiveStep(nextPanel);
      setActivePanel(nextPanel);
    }
  }
});

// Previous Step Button Click Event
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

function validateForm() {
  let valid = true;

  const fields = [
    { id: "fnm", message: "First Name is required" },
    { id: "lnm", message: "Last Name is required" },
    { id: "dob", message: "Date of Birth is required" },
  ];

  fields.forEach((field) => {
    const input = document.getElementById(field.id);
    const errorElem = document.getElementById(`error-${field.id}`);

    if (!input.value) {
      errorElem.textContent = field.message;
      valid = false;

      input.addEventListener("input", () => {
        errorElem.textContent = "";
      });
    } else {
      errorElem.textContent = "";
    }
  });

  return valid;
}
