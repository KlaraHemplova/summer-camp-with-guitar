
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



// APPLICATION BIRTH DATE

// placeholder
var dateBirth = document.getElementById("birth-date");

dateBirth.onchange = function() {
    if(dateBirth.value === "") {
        dateBirth.classList.add("empty");
    } else {
        dateBirth.classList.remove("empty");
    }
}

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