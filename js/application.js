const form = document.getElementById("application");

const radioSeminar = document.getElementById("seminar");
const radioCamp = document.getElementById("camp");

const dropdownMenu = document.getElementById("dropdown-menu");
const dropdownSelect = document.getElementById("dropdown-select");
const dropdownList = document.getElementById("dropdown-items");

const selectedSeminar = document.getElementById("seminar-date");

const hiddenDocuments = document.querySelectorAll(".documents-hidden");
const stornoConditions = document.getElementById("storno");

const allInputs = document.querySelectorAll("input");

const errorDate = document.getElementById("error-date");
const errorTel = document.getElementById("error-tel");
const errorMail = document.getElementById("error-mail");
const errorZip = document.getElementById("error-zip-code");



// CAMP || SEMINAR SWITCH
function campSeminarSwitch(event) {
    if(event.target.value === "víkendový seminář") {
        dropdownMenu.style.display = "block";
        hiddenDocuments.forEach(function(element) {
            element.style.display = "none";
        });
        stornoConditions.style.display = "none";
        selectedSeminar.required = true;
    } 
    else if(event.target.value === "letní tábor") {
        dropdownMenu.style.display = "none";
        hiddenDocuments.forEach(function(element) {
            element.style.display = "list-item";
        });
        stornoConditions.style.display = "block";
        selectedSeminar.required = false;

        dropdownSelect.innerText = "vyberte termín semináře"
        dropdownSelect.style.color = "var(--gray1)";
        dropdownSelect.style.fontWeight = 300;

        selectedSeminar.value = "";
    }
}

radioSeminar?.addEventListener("change", campSeminarSwitch);
radioCamp?.addEventListener("change", campSeminarSwitch);



// DROPDOWN MENU SELECT
document.addEventListener("click", function(event) {
    if(!event.target.closest("#dropdown-menu")) {
        dropdownList?.classList.remove("select-show");
    } 
    else if (event.target.id === "dropdown-select") {
        dropdownList.classList.toggle("select-show");
    } 
    else if (event.target.closest("#dropdown-items")) {
        dropdownSelect.innerText = event.target.innerText;
        dropdownSelect.style.color = "var(--black)";
        dropdownSelect.style.fontWeight = 400;
        
        selectedSeminar.value = event.target.getAttribute("data-value");
        dropdownList.classList.remove("select-show");

        validateDropdown(selectedSeminar);
    }
});



// VALIDATION
// dropdown
function validateDropdown(input) {
    if(!input.checkValidity()) {
        dropdownMenu.classList.add("invalid");
        return false;
    }
    else {
        dropdownMenu.classList.remove("invalid");
        return true;
    }
}

// all inputs
function validateInput(input) {

    function addInvalid() {
        input.classList.add("invalid");
        return false;
    }

    function removeInvalid() {
        input.classList.remove("invalid");
        return true;
    }

    // for text field with date
    if(input.type === "text" && input.id === "birth-date") {
        if(input.value === "") {
            return addInvalid();
        }
        else if(input.value !== "" && !input.checkValidity()) {
            errorDate.style.display = "block";
            return addInvalid();
        }
        else {
            errorDate.style.display = "none";
            return removeInvalid();
        }
    }
    // for text field with zip code
    else if(input.type === "text" && input.id === "zip-code") {
        if(input.value === "") {
            return addInvalid();
        }
        else if(input.value !== "" && !input.checkValidity()) {
            errorZip.style.display = "block";
            return addInvalid();
        }
        else {
            errorZip.style.display = "none";
            return removeInvalid();
        }
    }
    // for other text fields
    else if(input.type === "text" && input.id !== "birth-date" && input.id !== "zip-code") {
        if(!input.checkValidity()) {
            return addInvalid();
        } 
        else {
            return removeInvalid();
        }
    }
    // for tel fields
    else if(input.type === "tel") {
        if(input.value === "") {
            return addInvalid();
        }
        else if(input.value !== "" && !input.checkValidity()) {
            errorTel.style.display = "block";
            return addInvalid();
        }
        else {
            errorTel.style.display = "none";
            return removeInvalid();
        }
    }
    // for email field
    else if(input.type === "email") {
        if(input.value === "") {
            return addInvalid();
        }
        else if(input.value !== "" && !input.checkValidity()) {
            errorMail.style.display = "block";
            return addInvalid();
        }
        else {
            errorMail.style.display = "none";
            return removeInvalid();
        }
    }
    // for radio buttons
    else if(input.type === "radio") {
        const radios = document.querySelectorAll('input[name="' + input.name + '"]');
    
        if(!input.checkValidity()) {
            return addInvalid();
        }
        else {
            radios.forEach(function(element) {
                element.classList.remove("invalid")
            });
            return true;
        }
    }
}

// on submit
function onSubmit() {
    const requiredInputs = document.querySelectorAll("input[required]");
    let isValid = true;

    // validate inputs
    for (let i = 0; i < requiredInputs.length; i++) {
        isValid = validateInput(requiredInputs[i]) && isValid;
    }

    // validate dropdown menu
    isValid = validateDropdown(selectedSeminar) && isValid;

    // sends respondent to the top of the application
    if(!isValid) {
        const headerHeight = document.getElementById("header").clientHeight;

        document.body.scrollTop = headerHeight; // Safari
        document.documentElement.scrollTop = headerHeight; // Chrome, Firefox, IE, Opera
    }
    
    return isValid;
}



// REMOVES HIGHLIGHT WHEN FILLED
for (let i = 0; i < allInputs.length; i++) {
    allInputs[i].addEventListener("change", removeHighlight);
}

function removeHighlight(event) {
    validateInput(event.currentTarget)
}


