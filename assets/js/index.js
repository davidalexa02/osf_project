
let favouritecount = 0;
document.getElementById("favouriteCount").innerHTML = favouritecount;

let cartcount = 0;
document.getElementById("cartCount").innerHTML = cartcount;

let zoombut = document.getElementById("zoom-in");
let zoomedimg = document.getElementById("zoomedimg");
let zoomed = document.getElementById("zoomed");

//Thumbnails

let thumbnails = document.getElementsByClassName("thumbnail");

let active = document.getElementsByClassName("active");

for (var i = 0; i < thumbnails.length; i++) {

    thumbnails[i].addEventListener('click', function () {
        //the next if toggles the "active" class
        if (active.length > 0) {
            active[0].classList.remove("active")
        }

        this.classList.add("active")
        document.getElementById("mainimg").src = this.src
    })
}

//Wishlist and cart number of products added
function favouriteCount() {
    favouritecount++;
    document.getElementById("favouriteCount").innerHTML = favouritecount;
}
function cartCount() {
    cartcount++;
    document.getElementById("cartCount").innerHTML = cartcount;
}



// scroll to top button
//Get the button:
var scrollToTopBtn = document.getElementById("myBtn")

var rootElement = document.documentElement

function scrollToTop() {
    // scroll to top logic
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    })

}

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






//scroll to top
scrollToTopBtn.addEventListener("click", scrollToTop)


//zoom in 


zoombut.addEventListener('click', function () {
    //the next if toggles the "active" class

    // this.classList.add("active")
    zoomedimg.src = document.getElementById("mainimg").src
    if (zoomed.style.display === "none") {
        zoomed.style.display = "block";
    }
    else {
        zoomed.style.display = "none";
    }
})