
// HAMBURGER MENU
function toggleMenu(mobileButton) {

    // change of hamburger-menu button when clicked
    mobileButton.classList.toggle("hamburger-clicked");

    // animation of navigation menu on mobile screen
    let navBar = document.getElementById("nav");
    navBar?.classList.toggle("JS_active");

    if(navBar.classList?.contains("JS_active")) {
        navBar.animate([{transform: "translateY(0%)"}], {duration: 600, fill: 'forwards'});
    } else {
        navBar.animate([{transform: "translateY(-100%)"}], {duration: 600, fill: 'forwards'});
    }
}



// APPLICATION DROPDOWN MENU
var radioSeminar = document.getElementById("seminar");
var radioCamp = document.getElementById("camp");

var dropdownMenu = document.getElementById("dropdown-menu");
var dropdownSelect = document.getElementById("dropdown-select");
var dropdownList = document.getElementById("dropdown-items");

var selectedSeminar = document.getElementById("seminar-date")

// dropdown visibility
function dropdownVisibility(event) {
    if(event.target.value === "seminar") {
        dropdownMenu.style.display = "block";
    } else {
        dropdownMenu.style.display = "none";

        dropdownSelect.innerText = "vyberte termín semináře"
        dropdownSelect.style.color = "var(--gray1)";
        dropdownSelect.style.fontWeight = 300;

        selectedSeminar.value = "";
    }
}

radioSeminar?.addEventListener("change", dropdownVisibility);
radioCamp?.addEventListener("change", dropdownVisibility);

// dropdown select
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



// APPLICATION BIRTH DATE

// placeholder
var dateBirth = document.getElementById("birth-date");

dateBirth?.addEventListener("change", function() {
    if(dateBirth.value === "") {
        dateBirth.classList.add("empty");
    } else {
        dateBirth.classList.remove("empty");
    }
});

// date format
function dateFormat(input) {
    var date = new Date(input.value);

    if(!isNaN(date)) {
        var dateNewFormat = ("0" + date.getDate()).slice(-2) + "." + ("0" + (date.getMonth() + 1)).slice(-2) + "." + date.getFullYear();
        input.type = "text";
        input.value = dateNewFormat;
    } else {
        input.type = "text"
    }
}

function convertToDate(input) {
    var dateParts = input.value.split(".");

    if (dateParts.length === 3) {
        var dateNewFormat = dateParts[2] + '-' + ('0' + dateParts[1]).slice(-2) + '-' + ('0' + dateParts[0]).slice(-2);
        input.type = "date";
        input.value = dateNewFormat;
    } else {
        input.type = "date";
    }
}



// ACCOUNT NUMBER COPPIED WHEN CLICKED
function accountNumberToCopy() {

    var accountNumber = this.innerText;

    navigator.clipboard.writeText(accountNumber).then(function() {
        document.getElementById("copied").innerText = "Číslo účtu zkopírováno do schráky.";
    }).catch(function(err) {
        console.error('Něco se pokazilo', err);
    });
}

document.getElementById("accountNumberToCopy")?.addEventListener('click', accountNumberToCopy);



// FOOTER AUTO-HEIGHT
function setFooterPadding() {

    let footerHeight = document.getElementById("footer").clientHeight;
    document.getElementById("main").style.paddingBottom  = footerHeight + "px";
}

addEventListener("resize", setFooterPadding);
setFooterPadding();