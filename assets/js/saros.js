jQuery(function ($) {
    // Global Variables
    var is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

    /**
     * On Scroll Page
     * Animate Navigation Menu
     */
    function navbaranimation () {
        var navbar = $(".navbar");
        var $scrollTop;
        $(document).bind('scroll', function () {
            $scrollTop = $(document).scrollTop();
            if ($scrollTop > 60) {
                navbar.addClass('animate');
            } else {
                navbar.removeClass('animate');
            }
        });
    }
    navbaranimation(); // function end //
});
