var clipboard = new Clipboard ('.button');
clipboard.on('success', function(e) {
    $('.preloader').fadeIn("slow");
    $('.preloader').fadeOut("slow");
});
!function(e){e(window).on("load",function(){e(".preloader").fadeOut("slow")})}(jQuery),$("#menuToggle").click(function(){$("#mobileMenu").toggleClass("mobile-menu-hide"),$("#menuToggle").toggleClass("close")});
