window.onload = () => {
  "use strict";
  const checkBtn = document.querySelector("#check");
  const spinner = document.querySelector("#spinner");
  const height = document.querySelector("#height");
  const weight = document.querySelector("#weight");
  const smallText = document.querySelector(".small-text");
  const bigText = document.querySelector(".value");
  let bmi = 0;

  var expanded = false;

  checkBtn.addEventListener("click", showLevel);
  height.addEventListener("change", setBMI);
  weight.addEventListener("change", setBMI);

  function setBMI() {
    console.log(height.value, weight.value);
    let weightInKg = +weight.value || 0;
    let heightInMeters = (+height.value || 0) / 100;
    bmi = Math.round((weightInKg / Math.pow(heightInMeters, 2)) * 100) / 100;
    console.log(bmi);
  }

  function handleClick() {
    if (!expanded) {
      main.style.marginLeft = "500px";
      aside.style.left = "0px";
    } else {
      aside.style.left = "-500px";
      main.style.marginLeft = "0";
    }
    expanded = !expanded;
  }

  function showLevel() {
    let m = 165 / 75;
    let c = 165 - m * 75;
    let val = bmi;
    if (val < 5) val = 5;
    if (val > 75) val = 75;
    let deg = m * val + c;
    spinner.style.transform = "Rotate(" + deg + "deg)";

    let status = showReport(bmi);
    smallText.innerHTML = status;
    bigText.innerHTML = bmi + " BMI";
  }

  function showReport(v, val) {
    let text = "";
    let bmis = {
      "<b>Underweight</b> <br/> <b>Recommendation:</b> You need to buff up":
        v <= 18.5,
      "<b>Normal weight</b> <br/> <b>Recommendation:</b> You look fit to me":
        v > 18.5 && v <= 24.9,
      "<b>Overweight</b> <br/> <b>Recommendation:</b> You need to do a lot of cardiovascular exercise and diet.":
        v > 25 && v <= 29.9,
      "<b>Obese</b> <br/> <b>Recommendation:</b> You need personal attention from our experts":
        v > 30,
    };
    for (let i in bmis) {
      if (bmis[i]) {
        text += i;
        break;
      }
    }
    return text;
  }
};
$(function () {
  $("input[name='medical_condition']").click(function () {
    $("#medical_condition").css(
      "display",
      $(this).val() === "Yes" ? "block" : "none"
    );
  });
  $("input[name='injuries']").click(function () {
    $("#injuries").css("display", $(this).val() === "Yes" ? "block" : "none");
  });
  $("input[name='physical']").click(function () {
    $("#physical").css("display", $(this).val() === "Yes" ? "block" : "none");
  });
  $("input[name='smoke']").click(function () {
    $("#smoke").css("display", $(this).val() === "Yes" ? "block" : "none");
  });
  $("input[name='alcohol']").click(function () {
    $("#alcohol").css("display", $(this).val() === "Yes" ? "block" : "none");
  });
});
$(document).ready(function () {
  $("#running").on("input", function () {
    let time = $(this).val();
    let rating;
    let ratingClass;
    if (time == "") {
      $(".ratingResult").hide();
    } else {
      $(".ratingResult").show();
    }

    switch (true) {
      case time < "10:30":
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case time >= "10:30" && time <= "12:00":
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case time >= "12:01" && time <= "14:00":
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case time > "14:00":
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Time";
        ratingClass = "text-muted";
    }

    $(".rating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".rating").addClass(ratingClass).text(rating);
  });
  $("#pushup").on("input", function () {
    let pushup = $(this).val();
    let rating;
    let ratingClass;
    if (pushup == "") {
      $(".pushupResult").hide();
    } else {
      $(".pushupResult").show();
    }

    switch (true) {
      case pushup >= 50:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case pushup >= 30 && pushup <= 49:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case pushup >= 15 && pushup <= 29:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case pushup < 15:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Pushup";
        ratingClass = "text-muted";
    }

    $(".pushupRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".pushupRating").addClass(ratingClass).text(rating);
  });
  $("#pullups").on("input", function () {
    let pushup = $(this).val();
    let rating;
    let ratingClass;
    if (pushup == "") {
      $(".pullupsResult").hide();
    } else {
      $(".pullupsResult").show();
    }

    switch (true) {
      case pushup >= 15:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case pushup >= 10 && pushup <= 14:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case pushup >= 5 && pushup <= 9:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case pushup < 5:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Pushup";
        ratingClass = "text-muted";
    }

    $(".pullupsRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".pullupsRating").addClass(ratingClass).text(rating);
  });

  $("#dips").on("input", function () {
    let pushup = $(this).val();
    let rating;
    let ratingClass;
    if (pushup == "") {
      $(".dipsResult").hide();
    } else {
      $(".dipsResult").show();
    }

    switch (true) {
      case pushup >= 20:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case pushup >= 15 && pushup <= 20:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case pushup >= 10 && pushup <= 14:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case pushup < 10:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Pushup";
        ratingClass = "text-muted";
    }

    $(".dipsRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".dipsRating").addClass(ratingClass).text(rating);
  });
  $("#situps").on("input", function () {
    let pushup = $(this).val();
    let rating;
    let ratingClass;
    if (pushup == "") {
      $(".situpsResult").hide();
    } else {
      $(".situpsResult").show();
    }
    switch (true) {
      case pushup >= 60:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case pushup >= 45 && pushup <= 59:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case pushup >= 30 && pushup <= 44:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case pushup < 30:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Pushup";
        ratingClass = "text-muted";
    }
    $(".situpsRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".situpsRating").addClass(ratingClass).text(rating);
  });
  $("#squats").on("input", function () {
    let pushup = $(this).val();
    let rating;
    let ratingClass;
    if (pushup == "") {
      $(".squatsResult").hide();
    } else {
      $(".squatsResult").show();
    }
    switch (true) {
      case pushup >= 50:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case pushup >= 40 && pushup <= 49:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case pushup >= 30 && pushup <= 29:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case pushup < 30:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Pushup";
        ratingClass = "text-muted";
    }
    $(".squatsRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".squatsRating").addClass(ratingClass).text(rating);
  });

  $("#burpees").on("input", function () {
    let pushup = $(this).val();
    let rating;
    let ratingClass;
    if (pushup == "") {
      $(".burpeesResult").hide();
    } else {
      $(".burpeesResult").show();
    }
    switch (true) {
      case pushup >= 20:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case pushup >= 15 && pushup <= 19:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case pushup >= 10 && pushup <= 14:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case pushup < 10:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Pushup";
        ratingClass = "text-muted";
    }
    $(".burpeesRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".burpeesRating").addClass(ratingClass).text(rating);
  });
  $("#calfRaies").on("input", function () {
    let pushup = $(this).val();
    let rating;
    let ratingClass;
    if (pushup == "") {
      $(".calfRaiesResult").hide();
    } else {
      $(".calfRaiesResult").show();
    }
    switch (true) {
      case pushup >= 40:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case pushup >= 30 && pushup <= 39:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case pushup >= 20 && pushup <= 29:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case pushup < 20:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Pushup";
        ratingClass = "text-muted";
    }
    $(".calfRaiesRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".calfRaiesRating").addClass(ratingClass).text(rating);
  });
  $("#sitReach").on("input", function () {
    let pushup = $(this).val();
    let rating;
    let ratingClass;
    if (pushup == "") {
      $(".sitReachResult").hide();
    } else {
      $(".sitReachResult").show();
    }
    switch (true) {
      case pushup >= 30:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case pushup >= 20 && pushup <= 29:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case pushup >= 10 && pushup <= 19:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case pushup < 10:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Pushup";
        ratingClass = "text-muted";
    }
    $(".sitReachRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".sitReachRating").addClass(ratingClass).text(rating);
  });

  $("#standTime").on("input", function () {
    let pushup = $(this).val();
    let rating;
    let ratingClass;
    if (pushup == "") {
      $(".standTimeResult").hide();
    } else {
      $(".standTimeResult").show();
    }
    switch (true) {
      case pushup >= 60:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case pushup >= 45 && pushup <= 59:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case pushup >= 30 && pushup <= 44:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case pushup < 30:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Pushup";
        ratingClass = "text-muted";
    }
    $(".standTimeRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".standTimeRating").addClass(ratingClass).text(rating);
  });

  $("#holdTime").on("input", function () {
    let pushup = $(this).val();
    let rating;
    let ratingClass;
    if (pushup == "") {
      $(".holdTimeResult").hide();
    } else {
      $(".holdTimeResult").show();
    }
    switch (true) {
      case pushup >= 180:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case pushup >= 120 && pushup <= 179:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case pushup >= 60 && pushup <= 119:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case pushup < 60:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Pushup";
        ratingClass = "text-muted";
    }
    $(".holdTimeRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".holdTimeRating").addClass(ratingClass).text(rating);
  });

  $("#deadHang").on("input", function () {
    let pushup = $(this).val();
    let rating;
    let ratingClass;
    if (pushup == "") {
      $(".deadHangResult").hide();
    } else {
      $(".deadHangResult").show();
    }
    switch (true) {
      case pushup >= 120:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case pushup >= 90 && pushup <= 119:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case pushup >= 60 && pushup <= 89:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case pushup < 60:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "Invalid Pushup";
        ratingClass = "text-muted";
    }
    $(".deadHangRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".deadHangRating").addClass(ratingClass).text(rating);
  });

  $("#squatForm").on("input", function () {
    let pushup = parseInt($(this).val());
    let rating;
    let ratingClass;
    if (isNaN(pushup) || pushup === "") {
      $(".squatFormResult").hide();
    } else {
      $(".squatFormResult").show();
    }
    switch (pushup) {
      case 5:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case 4:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case 3:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case 2:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      case 1:
        rating = "Poor";
        ratingClass = "text-danger";
        break;
      default:
        rating = "0";
        ratingClass = "text-muted";
    }
    $(".squatFormRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".squatFormRating").addClass(ratingClass).text(rating);
  });

  $("#lungeForm").on("input", function () {
    let pushup = parseInt($(this).val());
    let rating;
    let ratingClass;
    if (isNaN(pushup) || pushup === "") {
      $(".lungeFormResult").hide();
    } else {
      $(".lungeFormResult").show();
    }
    switch (pushup) {
      case 5:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case 4:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case 3:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case 2:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      case 1:
        rating = "Poor";
        ratingClass = "text-danger";
        break;
      default:
        rating = "0";
        ratingClass = "text-muted";
    }
    $(".lungeFormRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".lungeFormRating").addClass(ratingClass).text(rating);
  });

  $("#reachForm").on("input", function () {
    let pushup = parseInt($(this).val());
    let rating;
    let ratingClass;
    if (isNaN(pushup) || pushup === "") {
      $(".reachFormResult").hide();
    } else {
      $(".reachFormResult").show();
    }
    switch (pushup) {
      case 5:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case 4:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case 3:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case 2:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      case 1:
        rating = "Poor";
        ratingClass = "text-danger";
        break;
      default:
        rating = "0";
        ratingClass = "text-muted";
    }
    $(".reachFormRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".reachFormRating").addClass(ratingClass).text(rating);
  });

  $("#sleep").on("input", function () {
    let pushup = parseInt($(this).val());
    let rating;
    let ratingClass;
    if (isNaN(pushup) || pushup === "") {
      $(".sleepResult").hide();
    } else {
      $(".sleepResult").show();
    }
    switch (pushup) {
      case 8:
        rating = "Excellent";
        ratingClass = "text-success";
        break;
      case 7:
        rating = "Good";
        ratingClass = "text-primary";
        break;
      case 6:
        rating = "Average";
        ratingClass = "text-warning";
        break;
      case 4:
        rating = "Below Average";
        ratingClass = "text-danger";
        break;
      default:
        rating = "0";
        ratingClass = "text-muted";
    }
    $(".sleepRating").removeClass(
      "text-success text-primary text-warning text-danger text-muted"
    );
    $(".sleepRating").addClass(ratingClass).text(rating);
  });
});
