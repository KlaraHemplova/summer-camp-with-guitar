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