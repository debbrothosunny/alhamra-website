//  slider

//  slider  emd

const header = document.querySelector(".header-body");

window.addEventListener("scroll", () => {
  header.classList.toggle("header-body-scroll", window.scrollY > 0);
});

//

const mBtn = document.querySelectorAll(".m-btn");
const mContent = document.querySelectorAll(".m-content");
const mChild = document.querySelectorAll("#arrow-icon");

for (let i = 0; i < mBtn.length; i++) {
  mBtn[i].addEventListener("click", () => {
    mContent[i].classList.toggle("active");
    mBtn[i].classList.toggle("active");
    mChild[i].classList.toggle("active");
  });

  // document.addEventListener("click", function (event) {
  //   if (event.target !== mBtn[i] && event.target !== mContent[i]) {
  //     mContent[i].classList.remove("active");
  //     mBtn[i].classList.remove("active");
  //   }
  // });
}

// img popup

$(document).ready(function () {
  // required elements
  var imgPopup = $(".img-popup");
  var imgCont = $(".gallery-img");
  var popupImage = $(".img-popup img");
  var closeBtn = $(".close-btn");
  var eyeImg = $(".eye-open");

  // handle events
  eyeImg.on("click", function () {
    var img_src = $(imgCont).children("img").attr("src");
    imgPopup.children("img").attr("src", img_src);
    imgPopup.addClass("opened");
  });

  $(imgPopup, closeBtn).on("click", function () {
    imgPopup.removeClass("opened");
    imgPopup.children("img").attr("src", "");
  });

  popupImage.on("click", function (e) {
    e.stopPropagation();
  });
});

// nav

const menuBtn = document.querySelector("#menu-btn");
const menuContent = document.querySelector(".mobile-header");
const menuClose = document.querySelector("#menu-close");

menuBtn.addEventListener("click", () => {
  menuContent.classList.toggle("active");
});

menuClose.addEventListener("click", () => {
  menuContent.classList.remove("active");
});

document.addEventListener("click", function (event) {
  if (event.target !== menuContent && event.target !== menuBtn) {
    menuContent.classList.remove("active");
  }
});


// our portfolio page filter script



