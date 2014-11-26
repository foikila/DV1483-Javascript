(function($) {

$.fn.extend({
    ContactForm: function(options) {
        var btn = this,
            close = $('body').find('[data-close]'),
            container = $(btn.data('toggle')),
            config = {
                effect: 'fadeToggle',
                speed: 300,
            };

        $.extend(config, options);

        btn.on('click', function() {
            if (container.is(':hidden')) {
                container[config.effect](config.speed);
            }
        });

        close.on('click', function() {
            container[config.effect](config.speed);
        });
    }
});

})(jQuery);

$(document).ready(function() {
    $('[data-toggle]').ContactForm();
});
