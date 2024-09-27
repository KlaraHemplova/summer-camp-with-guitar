
// HAMBURGER MENU
function toggleMenu(mobileButton) {

    // změna podoby tlačítka hamburger-menu při kliknutí
    mobileButton.classList.toggle("hamburger-clicked");

    // animace vysunutí navigačního menu v mobilní verzi
    let navBar = document.getElementById("nav");
    navBar?.classList.toggle("JS-active");

    if(navBar.classList?.contains("JS-active")) {
        navBar.animate([{transform: "translateY(0%)"}], {duration: 600, fill: 'forwards'});
    } else {
        navBar.animate([{transform: "translateY(-100%)"}], {duration: 600, fill: 'forwards'});
    }
}



// ZKOPÍROVÁNÍ ČÍSLA ÚČTU PO KLIKNUTÍ
document.getElementById("accountNumberToCopy")?.addEventListener('click', function() {

    var accountNumber = this.innerText;

    navigator.clipboard.writeText(accountNumber).then(function() {
        document.getElementById("copied").innerText = "Číslo účtu zkopírováno do schráky.";
    }).catch(function(err) {
        console.error('Něco se pokazilo', err);
    });
})



// AUTOMATICKÁ VÝŠKA PATIČKY
function setFooterPadding() {

    let footerHeight = document.getElementById("footer").clientHeight;
    document.getElementById("main").style.paddingBottom  = footerHeight + "px";
}

addEventListener("resize", setFooterPadding);
setFooterPadding();