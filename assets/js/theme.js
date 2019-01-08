// theme javascript

// smooth scrolling and scroll handlers for menu
jQuery(function($) {
    var scrolling = false;

    function setActive(li) {
        $(li).addClass('active').siblings().removeClass('active');
    }

    $('a.smooth-scroll').click(function(e) {
        setActive($(this).parent('li'));

        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                scrolling = true;

                $('html,body').animate({
                    scrollTop: target.offset().top - 80
                }, 400, 'swing', function() {
                    scrolling = false;
                });

                return false;
            }
        }
    });

    // collapsible panels
    $('.panel-heading span.clickable').on("click", function (e) {
        var panel = $(this).closest('.panel'),
            panelBody = $(panel).find('.panel-body');

        if ($(panel).hasClass('panel-collapsed')) {
            // expand the panel
            $(panelBody).slideDown();
            $(panel).removeClass('panel-collapsed');
            $(this).find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
        else {
            // collapse the panel
            $(panelBody).slideUp();
            $(panel).addClass('panel-collapsed');
            $(this).find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        }
    });

    $('.panel-heading span.clickable').each(function() {
        var panel = $(this).closest('.panel'),
            panelBody = $(panel).find('.panel-body');

        if ($(panel).hasClass('panel-collapsed')) {
            // collapse the panel
            $(panelBody).slideUp();
            $(panel).addClass('panel-collapsed');
            $(this).find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        }
        else {
            // expand the panel
            $(panelBody).slideDown();
            $(panel).removeClass('panel-collapsed');
            $(this).find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    });
});
