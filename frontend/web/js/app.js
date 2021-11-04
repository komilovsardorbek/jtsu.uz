$('.owl-carousel').owlCarousel({
    items: 1,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true
});

$(".mega-menu__button").each(function (i, btn) {
    let item = $($(btn).attr("data-target"))[0];
    $(item).collapse();

    $(btn).on("click", function (e) {
        e.preventDefault()
        $(item).collapse("toggle");
    }, true);
});






