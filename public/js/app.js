$(document)
    .ready(function () {
        $('.button-collapse').sideNav();
        $('.slider').slider();
        $('.materialboxed').materialbox();
        $(".dropdown-button").dropdown({
            inDuration: 300,
            outDuration: 225,
            belowOrigin: true
        });
        $('select').material_select();
    })
    .on("trix-file-accept", function (event) {
        event.preventDefault()
    });
