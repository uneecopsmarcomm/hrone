//custom 
jQuery(document).ready(function($){

    //sidenav
    $('.sidenav').sidenav();

    if ($(window).width() > 767)
    {
        //Initiate the fullpage
        $('#fullpage').fullpage({
            //anchors
            //anchors: ['firstSection', 'secondSection', ''],
            //resposive
            verticalCentered: false,
            setResponsive: true,
            responsiveWidth: 1100,
            //custom selectors
            sectionSelector: '.section',
        });

    }

    $(".interactive").mouseover(function() {
        $(this).addClass("active");
    });
    $(".interactive").mouseout(function() {
        $(this).removeClass("active");
    });
});