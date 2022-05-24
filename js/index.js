$(document).ready(function () {
    $('input[type="radio"][name="pregunta1"]').change(function () {
      switch (this.value) {
        case "Si":
          if (document.getElementsByClassName("question2").length) {
            $(".question2").attr("required", true);
          }
          if (document.getElementsByClassName("question3").length) {
            $(".question3").attr("required", true);
          }
          if (document.getElementsByClassName("question4").length) {
            $(".question4").attr("required", false);
          }
          $("#rowQuestion2").css("display", "block");
          $("#rowQuestion3").css("display", "block");
          $("#rowQuestion4").css("display", "none");
          break;
        case "No":
          if (document.getElementsByClassName("question2").length) {
            $(".question2").attr("required", false);
          }
          if (document.getElementsByClassName("question3").length) {
            $(".question3").attr("required", false);
          }
          if (document.getElementsByClassName("question4").length) {
            $(".question4").attr("required", true);
          }
          $("#rowQuestion2").css("display", "none");
          $("#rowQuestion3").css("display", "none");
          $("#rowQuestion4").css("display", "block");
          break;
      }
    });
    $('input[type="radio"][name="pregunta5"]').change(function () {
      switch (this.value) {
        case "Si":
          $(".question6").attr("required", true);
          $("#rowQuestion2").css("display", "block");
          $("#rowQuestion4").css("display", "block");
          break;
        case "No":
          $(".question6").attr("required", false);
          $("#rowQuestion2").css("display", "none");
          $("#rowQuestion4").css("display", "block");
          break;
      }
    });
    $('input[type="radio"][name="pregunta_unique"]').change(function () {
      switch (this.value) {
        case "Si":
          if (document.getElementsByClassName("question7unique").length) {
            $(".question7unique").attr("required", true);
          }
          if (document.getElementsByClassName("question6").length) {
            $(".question6").attr("required", false);
          }
          if (document.getElementsByClassName("question8unique").length) {
            $(".question8unique").attr("required", false);
          }
          $("#rowQuestion2").css("display", "block");
          $("#rowQuestion3").css("display", "none");
          $("#rowQuestion4").css("display", "none");
          break;
        case "No":
          if (document.getElementsByClassName("question7unique").length) {
            $(".question7unique").attr("required", false);
          }
          if (document.getElementsByClassName("question6").length) {
            $(".question6").attr("required", true);
          }
          if (document.getElementsByClassName("question8unique").length) {
            $(".question8unique").attr("required", true);
          }
          $("#rowQuestion2").css("display", "none");
          if (!document.getElementsByClassName("question8unique").length) {
            $("#rowQuestion3").css("display", "block");
          } else {
            var question6uniqueValue = $(
              'input[name="pregunta_unique"]:checked'
            ).val();
            if (question6uniqueValue !== undefined) {
              $("#rowQuestion3").css("display", "block");
            }
          }
          $("#rowQuestion4").css("display", "block");
          break;
      }
    });
    $('input[type="radio"][name="pregunta12"]').change(function () {
      switch (this.value) {
        case "Otorgamiento":
          $(".question13").attr("required", true);
          $(".question14").attr("required", false);
          $("#rowQuestion2-2").css("display", "block");
          $("#rowQuestion4-4").css("display", "none");
          break;
        case "Renovacion":
          $(".question13").attr("required", true);
          $(".question14").attr("required", false);
          $("#rowQuestion2-2").css("display", "block");
          $("#rowQuestion4-4").css("display", "none");
          break;
        case "Seguimiento":
          $(".question13").attr("required", false);
          $(".question14").attr("required", true);
          $("#rowQuestion2-2").css("display", "none");
          $("#rowQuestion4-4").css("display", "block");
          break;
        case "Seguimientoampliacion/reduccion":
          $(".question13").attr("required", false);
          $(".question14").attr("required", true);
          $("#rowQuestion2-2").css("display", "none");
          $("#rowQuestion4-4").css("display", "block");
          break;
      }
    });
    $('input[type="radio"][name="pregunta19"]').change(function () {
      if (parseInt(this.value) > 0) {
        for (var i = 1; i < lengthPanel; i++) {
          if (i <= this.value) {
            $(`.auditorCheck${i}`).attr("required", true);
            $(`#contentQuestionContact${i}`).css("display", "block");
          } else {
            $(`.auditorCheck${i}`).attr("required", false);
            $(`#contentQuestionContact${i}`).css("display", "none");
          }
        }
      } else {
        for (var i = 1; i < lengthPanel; i++) {
          $(`.auditorCheck${i}`).attr("required", false);
          $(`#contentQuestionContact${i}`).css("display", "none");
        }
      }
    });
    $(".check-otro").change(function () {
      var controlName = this.name === "pregunta3" ? "who" : "who_a";
      switch (this.value) {
        case "Otro":
          $("#" + controlName).attr("required", true);
          break;
        default:
          $("#" + controlName).attr("required", false);
          break;
      }
    });
    $('input[type="radio"][name="pregunta_unique"]').change(function () {
      $("#rowQuestion3").css("display", "block");
    });
  });
  