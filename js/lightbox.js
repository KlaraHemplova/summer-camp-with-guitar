var galleryIMG = document.getElementsByClassName("gallery-img");

var lightboxBackground = document.getElementById("lightbox-background");

var closeButton = document.getElementById("close-lightbox");



// OPENS LIGHTBOX GALLERY
function openLightbox() {
    document.body.classList.toggle("no-scrollbar");
    lightboxBackground.style.display = "block";
    closeButton.style.display = "block";
}



// CLOSES LIGHTBOX GALLERY
function closeLightbox() {
    document.body.classList.remove("no-scrollbar");
    lightboxBackground.style.display = "none";
    closeButton.style.display = "none";
}