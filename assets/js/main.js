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
});

$(function () {
    $('#ChangeToggle').click(function () {
        $('#navbar-hamburger').toggleClass('hidden');
        $('#navbar-close').toggleClass('hidden');
    });
});

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