jQuery(document).ready(function(){

    var scrolledToBlock = false;
    jQuery(".anchor-list").on("click","a", function (e) {
        e.preventDefault();
        var id  = jQuery(this).attr('href');
        var top = jQuery(id).offset().top;
        jQuery('body,html').animate({scrollTop: top-90}, 1500);
    });

    jQuery('.nav-opener').on('click', function(e) {
        e.preventDefault();
        jQuery(this).closest('.menu').toggleClass('active');
        jQuery('.header-list a').on('click', function() {
            jQuery(".menu").removeClass("active");
        });
    });
    
});

jQuery(document).mouseup(function(e) {
    var jQuerytarget = jQuery(e.target);
    if (jQuerytarget.closest(".menu").length == 0) {
        jQuery(".menu").removeClass("active");
    }
});

jQuery(window).scroll(function() { 
    var the_top = jQuery(document).scrollTop();
    if (the_top > 0) {
        jQuery('.header').addClass('fixed');
    }
    else {
        jQuery('.header').removeClass('fixed');
    }
});