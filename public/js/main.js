var clipboard = new Clipboard ('.button');
clipboard.on('success', function(e) {
   $('.download-cv-block button').addClass('clipboard-animation')
   setTimeout(function(){ $('.download-cv-block button').removeClass('clipboard-animation')}, 500);
});

$('.modalChanger').click(function () {
    $('#menu-overlay').toggleClass('activeMenu');
    $('#document-body').toggleClass('overflowHidden');
});

(jQuery),$("#menuToggle").click(function(){$("#mobileMenu").toggleClass("mobile-menu-hide"),$("#menuToggle").toggleClass("close")});
