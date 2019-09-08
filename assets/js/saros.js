jQuery(function ($) {
    // Global Variables
    var is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

    // Code Highlighter
    hljs.initHighlightingOnLoad();

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

    // Open Modal
    function openDownloadModal () {
        var id = $(this).data('id');
        $('#download-'+id).modal();
    }
    openDownloadModal();

});
