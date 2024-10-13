var galleryImg = document.getElementsByClassName("gallery-img");
var currentImg;
var currentImgIndex;

var lightboxBackground = document.getElementById("lightbox-background");
var lightboxPhoto = document.querySelector("#lightbox-photo > img");

var caption = document.getElementById("lightbox-caption");

var previousButton = document.getElementById("lightbox-previous");
var nextButton = document.getElementById("lightbox-next");



// SET IMG PROPERTIES
function imgProperties() {

    // get attributes SRC, ALT, DATA-TITLE
    var imgSRC = currentImg.getAttribute("src");
    var imgALT = currentImg.getAttribute("alt");
    var imgCaption = currentImg.getAttribute("data-title");

    // set new attributes SRC, ALT, DATA-TITLE
    lightboxPhoto.setAttribute("src", imgSRC.replace("/img/gallery/preview/", "/img/gallery/"));
    lightboxPhoto.setAttribute("alt", imgALT)
    lightboxPhoto.setAttribute("title", imgCaption);

    // set the value of TITLE attribute into div #LIGHTBOX-CAPTION
    caption.textContent = imgCaption;

    if(currentImgIndex === 0) {
        previousButton.style.display = "none";
    } else {
        previousButton.style.display = "block";
    }

    if(currentImgIndex === galleryImg.length - 1) {
        nextButton.style.display = "none";
    } else {
        nextButton.style.display = "block";
    }
}



// OPEN LIGHTBOX GALLERY
for (var i = 0; i < galleryImg.length; i++) {
    galleryImg[i].addEventListener("click", openLightbox);
}

function openLightbox(event) {

    // set clicked IMG
    for (var i = 0; i < galleryImg.length; i++) {
        if(event.currentTarget === galleryImg[i]) {
            currentImg = galleryImg[i].children[1];
            currentImgIndex = i;
            console.log(currentImg);
        }
    }

    // background
    document.body.classList.add("no-scrollbar");
    lightboxBackground.style.display = "block";

    imgProperties();
}



// PREVIOUS & NEXT BUTTONS
function previousImg() {
    currentImgIndex = (currentImgIndex - 1);

    if(currentImgIndex <= 0) {
        currentImgIndex = 0;
    }

    currentImg = galleryImg[currentImgIndex].children[1];
    imgProperties();
}

function nextImg() {
    currentImgIndex = (currentImgIndex + 1);

    if(currentImgIndex >= galleryImg.length - 1) {
        currentImgIndex = galleryImg.length - 1;
    }

    currentImg = galleryImg[currentImgIndex].children[1];
    imgProperties();
}



// CLOSE LIGHTBOX GALLERY
function closeLightbox() {
    document.body.classList.remove("no-scrollbar");
    lightboxBackground.style.display = "none";
}



// MOBILE SWIPE
var touchStartX = 0;
var touchEndX = 0;

function checkDirection() {
    if(lightboxBackground.style.display === "block") {
        if(touchEndX < touchStartX) {
            nextImg();
        } else if(touchEndX > touchStartX) {
            previousImg();
        }
    }
}

document.addEventListener("touchstart", function(event) {
    touchStartX = event.changedTouches[0].screenX;
})
document.addEventListener("touchend", function(event) {
    touchEndX = event.changedTouches[0].screenX;
    checkDirection();
})