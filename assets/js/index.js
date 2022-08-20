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

function myFunction(este) {
    if (este.matches) { // If media query matches
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

var este = window.matchMedia("(min-width: 768px)")
myFunction(este) // Call listener function at run time
este.addListener(myFunction) // Attach listener function on state changes

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