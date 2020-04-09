var clipboard = new Clipboard ('.button');
clipboard.on('success', function(e) {
    $('.preloader').fadeIn("slow");
    $('.preloader').fadeOut("slow");
});

$('.modalChanger').click(function () {
    $('#menu-overlay').toggleClass('activeMenu');
    $('#document-body').toggleClass('overflowHidden');
});

(jQuery),$("#menuToggle").click(function(){$("#mobileMenu").toggleClass("mobile-menu-hide"),$("#menuToggle").toggleClass("close")});
