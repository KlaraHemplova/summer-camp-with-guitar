const radioSeminar = document.getElementById("seminar");
const radioCamp = document.getElementById("camp");

const dropdownMenu = document.getElementById("dropdown-menu");
const dropdownSelect = document.getElementById("dropdown-select");
const dropdownList = document.getElementById("dropdown-items");

const selectedSeminar = document.getElementById("seminar-date");

const documentSection = document.getElementById("documents");
const stornoConditions = document.getElementById("storno");

let requiredInputs;



// CAMP || SEMINAR SWITCH
function campSeminarSwitch(event) {
    if(event.target.value === "seminar") {
        dropdownMenu.style.display = "block";
        documentSection.style.display = "none";
        stornoConditions.style.display = "none";
        selectedSeminar.required = true;
    } 
    else if(event.target.value === "camp") {
        dropdownMenu.style.display = "none";
        documentSection.style.display = "block";
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
    }
});



// VALIDATION
function onSubmit() {
    requiredInputs = document.querySelectorAll("input[required]");

    // sends respondent to the top of the application
    function scrollToApplication() {
        const headerHeight = document.getElementById("header").clientHeight;

        document.body.scrollTop = headerHeight; // Safari
        document.documentElement.scrollTop = headerHeight; // Chrome, Firefox, IE, Opera
    }

    // marks all invalid inputs in pink border
    for (let i = 0; i < requiredInputs.length; i++) {

        if(!requiredInputs[i].checkValidity()) {
            requiredInputs[i].classList.add("invalid");
            scrollToApplication();
        }
        else {
            requiredInputs[i].classList.remove("invalid");
        }
    }

    // marks empty dropdown menu in pink border
    if(!selectedSeminar.checkValidity()) {
        dropdownMenu.classList.add("invalid");
        scrollToApplication();
    }
    else {
        dropdownMenu.classList.remove("invalid");
    }
    
    return false;
}