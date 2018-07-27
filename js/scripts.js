$(document).ready(function () {

    //Menu burger
    $(".burger").sidr({
        name: "respNav",
        source: '.main-nav',
        displace: false,
    });

    //pour refermer le menu en cliquant n'importe où sur la page et indiquer name:"respNav" dans $("#nav-toggle").sidr//
    $(document).on("click", function () {
        $.sidr('close', 'respNav');
    });

    var sli;

    //slider//
    if ($(window).width() < 768) {
        sli = $('.slider').slippry({
            captions: false,
            transition: 'horizontal',
            speed: 2000,
        });
    }

    $(window).resize(function () {
        if ($(window).width() >= 768) {
            sli.destroySlider();

        } else {
            sli.reloadSlider();
        }
    })


    $('.poster-list').slippry({
        captions: false,
        transition: 'horizontal',
        speed: 2000,
    });


});