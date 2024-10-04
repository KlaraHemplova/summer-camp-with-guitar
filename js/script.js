
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