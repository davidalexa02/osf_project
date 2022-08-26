$(document).on('click', '#dropdownmenu', function (e) {
    e.stopPropagation();
});

// Dropdown for header

var h1 = document.getElementById('submenuh1');
var h2 = document.getElementById('submenuh2');
var h3 = document.getElementById('submenuh3');
var h4 = document.getElementById('submenuh4');

function showMenuH1() {
    if (h1.style.display === "none") {
        h1.style.display = "block";
        h2.style.display = "block";
        h3.style.display = "block";
    }
    else {
        h1.style.display = "none";
        h2.style.display = "none";
        h3.style.display = "none";
    }
}

function showMenuH2() {
    if (h4.style.display === "none") {
        h4.style.display = "block";
    }
    else {
        h4.style.display = "none";
    }
}

function myFunction1(este1) {
    if (este1.matches) { // If media query matches
        h1.style.display = "block";
        h2.style.display = "block";
        h3.style.display = "block";
        h4.style.display = "block";
    } else {
        h1.style.display = "none";
        h2.style.display = "none";
        h3.style.display = "none";
        h4.style.display = "none";
    }
}
var este1 = window.matchMedia("(min-width: 768px)")
myFunction1(este1) // Call listener function at run time
este1.addListener(myFunction1) // Attach listener function on state changes

// Dropdown for footer

var f1 = document.getElementById('submenuf1');
var f2 = document.getElementById('submenuf2');
var f3 = document.getElementById('submenuf3');
var f4 = document.getElementById('submenuf4');
var f5 = document.getElementById('submenuf5');

function showMenuF1() {
    if (f1.style.display === "none") {
        f1.style.display = "block";
    }
    else {
        f1.style.display = "none";
    }
}

function showMenuF2() {
    if (f2.style.display === "none") {
        f2.style.display = "block";
        f3.style.display = "block";
        f4.style.display = "block";
    }
    else {
        f2.style.display = "none";
        f3.style.display = "none";
        f4.style.display = "none";
    }
}

function showMenuF3() {
    if (f5.style.display === "none") {
        f5.style.display = "block";
    }
    else {
        f5.style.display = "none";
    }
}

function myFunction2(este2) {
    if (este2.matches) { // If media query matches
        f1.style.display = "block";
        f2.style.display = "block";
        f3.style.display = "block";
        f4.style.display = "block";
        f5.style.display = "block";
    } else {
        f1.style.display = "none";
        f2.style.display = "none";
        f3.style.display = "none";
        f4.style.display = "none";
        f5.style.display = "none";
    }
}

var este2 = window.matchMedia("(min-width: 768px)")
myFunction2(este2) // Call listener function at run time
este2.addListener(myFunction2) // Attach listener function on state changes

// $(document).on('click', '.dropdown-menu', function (e) {
//     e.stopPropagation();
// });

// if ($(window).width() < 768) {
//     $('.dropdown-menu a').click(function (e) {
//         e.preventDefault();
//         if ($(this).next('.submenu').length) {
//             $(this).next('.submenu').toggle();
//         }
//         $('.dropdown').on('hide.bs.dropdown', function () {
//             $(this).find('.submenu').hide();
//         })
//     });
// }





const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("active");
    }
}, 1000);



const mobileCar = document.querySelector("#mobileCar");

function mobileCarousel(resoluc) {
    if (resoluc.matches) { // If media query matches
        mobileCar.classList.add("carousel");
    } else {
        mobileCar.classList.remove("carousel");
    }
}
var resoluc= window.matchMedia("(max-width: 767px)")
mobileCarousel(resoluc) // Call listener function at run time
resoluc.addListener(mobileCarousel) // Attach listener function on state changes



// scroll to top button
//Get the button:
mybutton = document.getElementById("myBtn");

window.scrollY(0,0)

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}