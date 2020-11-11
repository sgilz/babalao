$(".main-navbar").addClass("navbar-fixed");

var scrollY = 0, scrollX = 0;
 
$(document).scroll(function(e){
    scrollY = $(window).scrollTop();
    scrollX = $(window).scrollLeft();
});

setInterval(function(){scroll = $(window).scrollTop();}, 1000);
$(".main-navbar").addClass("active");

$(window).on("scroll", function() {
    if($(window).scrollTop() > 100) {
        $(".main-navbar").removeClass("active");
        
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $(".main-navbar").addClass("active");
    }
});