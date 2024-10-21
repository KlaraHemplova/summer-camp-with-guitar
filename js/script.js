// HAMBURGER MENU
function toggleMenu(mobileButton) {

    // change of hamburger-menu button when clicked
    mobileButton.classList.toggle("hamburger-clicked");

    // animation of navigation menu on mobile screen
    const navBar = document.getElementById("nav");
    navBar?.classList.toggle("JS_active");

    if(navBar.classList?.contains("JS_active")) {
        navBar.animate([{transform: "translateY(0%)"}], {duration: 600, fill: 'forwards'});
    } else {
        navBar.animate([{transform: "translateY(-100%)"}], {duration: 600, fill: 'forwards'});
    }
}



// SCROLL-TO-TOP BUTTON
const scrollButton = document.getElementById("scroll-to-top");

// show the button when the user scrolls down 200px
window.onscroll = function() {
    if(!scrollButton.classList.contains("visible") && (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200)) {
        scrollButton.classList.add("visible");
    } 
    else if(document.body.scrollTop === 0 && document.documentElement.scrollTop === 0) {
        scrollButton.classList.remove("visible");
    }
};

// scroll to the top when clicked
function scrollToTop() {
    document.body.scrollTop = 0; // Safari
    document.documentElement.scrollTop = 0; // Chrome, Firefox, IE, Opera
}



// APPLICATION
const radioSeminar = document.getElementById("seminar");
const radioCamp = document.getElementById("camp");

const dropdownMenu = document.getElementById("dropdown-menu");
const dropdownSelect = document.getElementById("dropdown-select");
const dropdownList = document.getElementById("dropdown-items");

const selectedSeminar = document.getElementById("seminar-date");

const documentSection = document.getElementById("documents");
const stornoConditions = document.getElementById("storno");

// camp || seminar switch
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

// dropdown menu select
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

// validation
function onSubmit() {
    const requiredInputs = document.querySelectorAll("input[required]");
    
    return false;
}



// ACCOUNT NUMBER COPPIED WHEN CLICKED
function accountNumberToCopy() {

    let accountNumber = this.innerText;

    navigator.clipboard.writeText(accountNumber).then(function() {
        document.getElementById("copied").innerText = "Číslo účtu zkopírováno do schráky.";
    }).catch(function(err) {
        console.error('Něco se pokazilo', err);
    });
}

document.getElementById("accountNumberToCopy")?.addEventListener('click', accountNumberToCopy);



// FOOTER AUTO-HEIGHT
function setFooterPadding() {

    const footerHeight = document.getElementById("footer").clientHeight;
    document.getElementById("main").style.paddingBottom  = footerHeight + "px";
}

addEventListener("resize", setFooterPadding);
setFooterPadding();