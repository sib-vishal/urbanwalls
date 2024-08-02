// for word captcha start
var code;
function createCaptcha() {
  //clear the contents of captcha div first
  document.getElementById("captcha").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 120;
  canv.height = 35;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
}
$("#refresh_captcha").click(function () {
  createCaptcha();
});
function validateCaptcha(action) {
  //   debugger
  if (document.getElementById("cpatchaTextBox").value == code) {
    $("#enquiryForm").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox").val("");
    return false;
  }
}

// for word captcha start
var code2;
function createCaptcha2() {
  //clear the contents of captcha div first
  document.getElementById("captcha2").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha2 = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha2.indexOf(charsArray[index]) == -1)
      captcha2.push(charsArray[index]);
    else i--;
  }
  var canv2 = document.createElement("canvas");
  canv2.id = "captcha2";
  canv2.width = 120;
  canv2.height = 35;
  var ctx2 = canv2.getContext("2d");
  ctx2.font = "25px Georgia";
  ctx2.strokeText(captcha2.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code2 = captcha2.join("");
  document.getElementById("captcha2").appendChild(canv2); // adds the canvas to the body element
}
$("#refresh_captcha2").click(function () {
  createCaptcha2();
});
function validateCaptcha2() {
  //   debugger
  if (document.getElementById("cpatchaTextBox2").value == code) {
    $("#enquiryForm2").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm2").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox2").val("");
    return false;
  }
}

$(function () {
  AOS.init();
  window.addEventListener("load", AOS.refresh);
  $(window).on("scroll", function () {
    $(function () {
      if ($(".stricky").length) {
        var strickyScrollPos = 100;
        if ($(window).scrollTop() > strickyScrollPos) {
          $(".stricky").addClass("stricky-fixed");
          $(".scroll-to-top").fadeIn(1500);
        } else if ($(this).scrollTop() <= strickyScrollPos) {
          $(".stricky").removeClass("stricky-fixed");
          $(".scroll-to-top").fadeOut(1500);
        }
      }
    });
  });
});
$(function () {
  $(window).on("scroll", function () {
    var scrolled = $(window).scrollTop();
    if (scrolled > 80) $(".go-top").addClass("active");
    if (scrolled < 80) $(".go-top").removeClass("active");
  });
  $(function () {
    $(".go-top").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: "0",
        },
        500
      );
    });
  });
});
$(function () {
  $(".dropDown").click(function () {
    $(this).siblings("li").find("ul").slideUp();
    $(this)
      .siblings("li")
      .find("i")
      .removeClass("fa-chevron-up")
      .addClass("fa-chevron-down");
    $(this).find("ul").slideToggle();
    $(this).find("i").toggleClass("fa-chevron-up");
  });
});
$(".popularSlider").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(".blogSlider").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(function () {
  $(".inputAction").on("keypress", function () {
    $(".btnForm").addClass("active");
    $(".btnForm").prop("disabled", false);
  });
  $(".inputAction").on("input", function () {
    if ($(this).val().length === 0) {
      $(".btnForm").removeClass("active");
      $(".btnForm").prop("disabled", true);
    }
  });
  $(".btnPopup").click(function (event) {
    event.stopPropagation();
    $(".popupForm").fadeIn();
  });

  $(".closePopup").click(function () {
    $(".popupForm").fadeOut();
  });

  $(".innerPopup").click(function (event) {
    event.stopPropagation();
  });

  $(document).click(function () {
    $(".popupForm").fadeOut();
  });
});

const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});
