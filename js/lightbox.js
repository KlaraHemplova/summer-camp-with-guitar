const galleryImg = document.getElementsByClassName("gallery-img");
let currentImg;
let currentImgIndex;

const lightboxBackground = document.getElementById("lightbox-background");
const lightboxPhoto = document.querySelector("#lightbox-photo > img");

const caption = document.getElementById("lightbox-caption");

const previousButton = document.getElementById("lightbox-previous");
const nextButton = document.getElementById("lightbox-next");



// SET IMG PROPERTIES
function imgProperties() {

    // get attributes SRC, ALT, DATA-TITLE
    let imgSRC = currentImg.getAttribute("src");
    let imgALT = currentImg.getAttribute("alt");
    let imgCaption = currentImg.getAttribute("data-title");

    // set new attributes SRC, ALT, DATA-TITLE
    lightboxPhoto.setAttribute("src", imgSRC.replace("/img/gallery/preview/", "/img/gallery/"));
    lightboxPhoto.setAttribute("alt", imgALT)
    lightboxPhoto.setAttribute("data-title", imgCaption);

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
for (let i = 0; i < galleryImg.length; i++) {
    galleryImg[i].addEventListener("click", openLightbox);
}

function openLightbox(event) {

    // set clicked IMG
    for (let i = 0; i < galleryImg.length; i++) {
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