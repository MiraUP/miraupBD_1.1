var nav_primary = 0,
    post_prev_next = 405,
    post_bar_actions = 425;

$(window).bind('scroll', function () {

    var windowTop = $(window).scrollTop(),
        windowHeight = $(window).height(),
        contentIconHeaderPage = $('.inner-page .container').height(),
        descriptionPage = $('.description-page-icon').offset().top,
        contentDescriptionIcon = (descriptionPage - windowHeight - 10),
        barMenuMain = ($('.nav-primary').height() + 0),
        barTopItenActions = ($('.bar-top-iten-actions').height() + 30),
        distanceTop = (contentIconHeaderPage - barTopItenActions);

    //Main Menu
    if (windowTop > nav_primary) { 
        $('body').addClass('nav-fixed');
    } else {
        $('body').removeClass('nav-fixed');
    }

    //Buttons Posts Previous & Next
    if (windowTop > post_prev_next) { 
        $('.btn-post-next, .btn-post-prev').addClass('fixed');
    } else {
        $('.btn-post-next, .btn-post-prev').removeClass('fixed');
    }

    //Buttons Posts Previous & Next
    if (windowTop > post_bar_actions) { 
        $('.bar-top-iten-actions').addClass('fixed');
    } else {
        $('.bar-top-iten-actions').removeClass('fixed');
    }


    //Sidebar Content Icon
    if (windowTop > distanceTop && windowTop < contentDescriptionIcon) { 
        $('.content-icons').addClass('fixedSidebar').removeClass('endScroll');
        $('.sidebar-left, .sidebar-right').css({'top': (barTopItenActions + barMenuMain + 25)});
    } else if (windowTop > distanceTop && windowTop > contentDescriptionIcon) { 
        $('.content-icons').removeClass('fixedSidebar').addClass('endScroll');
        $('.sidebar-left, .sidebar-right').height((windowHeight - 149)).css({'top': 'inherit'});
    } else {
        $('.content-icons').removeClass('fixedSidebar endScroll');
        $('.sidebar-left, .sidebar-right').height('').css({'top': 'inherit'});
    }
    
});

