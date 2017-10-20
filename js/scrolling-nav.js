//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".saadah").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".nangnung").addClass("ning");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".nangnung").removeClass("ning");
    }

});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
