(function( $ ) {
    $.fn.scrollToTop = function() {
        var $scrollBtn = $(this);

        $scrollBtn.on('click', function (e) {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });

        function display() {
            if ($(window).scrollTop() > 600) {
                $scrollBtn.addClass('active');
            } else {
                $scrollBtn.removeClass('active');
            }
        }

        $(window).scroll(function () {
            display();
        });

        display();
    }
}( jQuery ));