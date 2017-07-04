(function( $ ) {


    $(window).on('load', function() {
        initPreloader();
    });


    /**
     *
     */
    function initPreloader() {
        var $preloader = $('#pagePreloader'),
            $spinner = $preloader.find('.spinner');

        $spinner.fadeOut();
        $preloader.delay(350).fadeOut('fast');
    }

})(jQuery);