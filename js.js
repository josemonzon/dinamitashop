$(document).ready(function () {
    var stepper = new Stepper($('.bs-stepper')[3]);
  })


$(function () {

    verificar();
    $(window).on('resize', function () {
        
        verificar();
    });

    $(window).scroll(function () {
        verificar();
    });

    function verificar() {
        if ($(window).width() <= 992) {
            $("nav").addClass("bg-light");
            $("nav").addClass("navbar-light");
            $("nav").removeClass("navbar-dark");

            $("button").addClass("btn-outline-dark");
            $("button").removeClass("btn-outline-light");

            $("#buscarInput").removeClass("btn btn-outline-light");
        } else {
            $("nav").addClass("navbar-dark");
            $("nav").removeClass("bg-light");
            $("nav").removeClass("navbar-light");

            $("button").removeClass("btn-outline-dark");
            $("button").addClass("btn-outline-light");

            $("#buscarInput").addClass("btn btn-outline-light");
        }
        if ($(window).width() >= 992) {
            if ($(this).scrollTop() > 50) {
                $("nav").addClass("bg-light");
                $("nav").addClass("navbar-light");
                $("nav").removeClass("navbar-dark");

                $("button").addClass("btn-outline-dark");
                $("button").removeClass("btn-outline-light");

                $("#buscarInput").removeClass("btn btn-outline-light");

            }
            if ($(this).scrollTop() < 50) {
                $("nav").addClass("navbar-dark");
                $("nav").removeClass("bg-light");
                $("nav").removeClass("navbar-light");

                $("button").removeClass("btn-outline-dark");
                $("button").addClass("btn-outline-light");

                $("#buscarInput").addClass("btn btn-outline-light");

            }
        

        }
    }
});