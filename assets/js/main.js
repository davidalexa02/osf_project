$(document).ready(function () {
    $('.count').prop('disabled', true);
    $(document).on('click', '.plus', function () {
        $('.count').val(parseInt($('.count').val()) + 1);
    });
    $(document).on('click', '.minus', function () {
        $('.count').val(parseInt($('.count').val()) - 1);
        if ($('.count').val() == 0) {
            $('.count').val(1);
        }
    });
    $(document).on('click', '#addcart', function () {
        $('#cartCount').val(parseInt($('.count').val()));
    });
});

$(function () {
    $('#ChangeToggle').click(function () {
        $('#navbar-hamburger').toggleClass('hidden');
        $('#navbar-close').toggleClass('hidden');
    });
});


$(function () {
    $('#closecookie').click(function () {
        $('#cookie-container').addClass('hidden');
    });
});


const cookieContainer = document.querySelector("#cookie-container");
const cookieButton = document.querySelector("#cookie-btn");

cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("active");
    }
}, 10000);

//expanded text on pdp

$(document).ready(function () {
    $("#readmore").click(function () {
        $("#expandedtext").toggle()
        var isVisible = $("#expandedtext").is(":visible");
        if (isVisible) {
            $("#readmore").html("Read less");
        } else {
            $("#readmore").html("Read more");
        }

    })
})

// swiper

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    // loopFillGroupWithBlank: true,
    navigation: {
        nextEl: "#next",
        prevEl: "#prev",
    }
});

$(document).ready(function () {
    // $(".moreBox").slice(0, 3).show();
    if ($(".blogBox:hidden").length != 0) {
        $("#loadMore").show();
    }
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".moreBox:hidden").slice(0, 4).slideDown();
        if ($(".moreBox:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
    });
});

$(document).ready(function () {
    // $(".moreBox").slice(0, 3).show();
    if ($(".blogBox:hidden").length != 0) {
        $("#loadMore2").show();
    }
    $("#loadMore2").on('click', function (e) {
        e.preventDefault();
        $(".moreBox:hidden").slice(0, 4).slideDown();
        if ($(".moreBox:hidden").length == 0) {
            $("#loadMore2").fadeOut('slow');
        }
    });
});

function timer() {
    return {
        days: "00",
        hours: "00",
        minutes: "00",
        seconds: "00",
        endTime: new Date(
            "December 31, 2021 23:59:59 GMT+0530"
        ).getTime(),
        now: new Date().getTime(),
        timeLeft: 0,
        countdown: function () {
            let counter = setInterval(() => {
                this.now = new Date().getTime();
                this.timeLeft = (this.endTime - this.now) / 1000;
                this.seconds = this.format(this.timeLeft % 60);
                this.minutes = this.format(this.timeLeft / 60) % 60;
                this.hours =
                    this.format(this.timeLeft / (60 * 60)) % 24;
                this.days = this.format(
                    this.timeLeft / (60 * 60 * 24)
                );
                if (this.timeLeft <= 0) {
                    clearInterval(counter);
                    this.seconds = "00";
                    this.minutes = "00";
                    this.hours = "00";
                    this.days = "00";
                }
            }, 1000);
        },
        format: function (value) {
            if (value < 10) {
                return "0" + Math.floor(value);
            } else return Math.floor(value);
        },
    };
}



// $('#colors input').on('change', function () {
//     alert($('input[name=radioName]:checked', '#colors').val());
// });

var select = document.getElementsByClassName('colors')
var container = document.getElementById('changingContainer')
select.onchange = () => {

    // Initial color
    let color = 'black'

    // Check background color and change font color accordingly
    if (select.value == '#00008b') color = 'white'

    container.style.cssText = `
        background-color: ${select.value};
        color: ${color};
      `
}

document.getElementById("year").innerHTML = new Date().getFullYear();

const togglePassword = document.querySelector("#togglePassword");

const password = document.querySelector("#password");

togglePassword.addEventListener("click", function (e) {

    // Toggle the type attribute using
    // getAttribure() method
    const type = password
        .getAttribute("type") === "password" ?
        "text" : "password";

    password.setAttribute("type", type);

    // Toggle the eye and bi-eye icon

    if (this.classList.contains('fa-eye-slash')) {
        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");
    } else {
        this.classList.remove("fa-eye");
        this.classList.add("fa-eye-slash");
    }
});
