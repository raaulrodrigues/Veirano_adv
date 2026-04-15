$(document).ready(function($) {
    dynamicSpacer();

    jQuery('.slider-featured').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
    });

    jQuery('.has-submenu').hover(function(){
        jQuery(this).addClass('expand');
    }, function(){
        jQuery(this).removeClass('expand');
    })
});

$(window).on('load', function(){
    dynamicSpacer();
    topMenu();
});

$(window).resize(function(){
    dynamicSpacer();
});

$(window).on('scroll', function () {
    topMenu();
});

function dynamicSpacer(){
    var height = $('#stickyHeader').outerHeight();
    $('.dynamicSpacer').height(height);
}

function topMenu() {
    if (jQuery(this).scrollTop() > 50) {
        jQuery('#stickyHeader').addClass('sticked');
    } else {
        jQuery('#stickyHeader').removeClass('sticked');
    };
};