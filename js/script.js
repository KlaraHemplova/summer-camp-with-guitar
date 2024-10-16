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



// SCROLL-TO-TOP BUTTON
var scrollButton = document.getElementById("scroll-to-top");

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



// APPLICATION DROPDOWN MENU
var radioSeminar = document.getElementById("seminar");
var radioCamp = document.getElementById("camp");

var dropdownMenu = document.getElementById("dropdown-menu");
var dropdownSelect = document.getElementById("dropdown-select");
var dropdownList = document.getElementById("dropdown-items");

var selectedSeminar = document.getElementById("seminar-date");

var documentSection = document.getElementById("documents");

// dropdown & documents visibility
function dropdownVisibility(event) {
    if(event.target.value === "seminar") {
        dropdownMenu.style.display = "block";
        documentSection.style.display = "none"
    }
    else {
        dropdownMenu.style.display = "none";
        documentSection.style.display = "block";

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