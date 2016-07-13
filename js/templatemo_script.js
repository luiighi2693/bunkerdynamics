var top_menu_height = 0;
jQuery(function($) {
    $(window).load( function() {
        $('.external-link').unbind('click');
    });
		
    $(document).ready( function() {
        top_menu_height = $('.templatemo-top-menu').height();
        $('body').scrollspy({ target: '#templatemo-nav-bar', offset: top_menu_height + 10 });
        $('.external-link').unbind('click');

        $('#btn-back-to-top').click(function(e){
            e.preventDefault();
            scrollTo('#templatemo-top');
        });

        $('.templatemo-top-menu .navbar-nav a').click(function(e){
            e.preventDefault(); 
            var linkId = $(this).attr('href');
            scrollTo(linkId);
            if($('.navbar-toggle').is(":visible") == true){
                $('.navbar-collapse').collapse('toggle');
            }
            $(this).blur();
            return false;
        });

        $('.templatemo-gallery-category a').click(function(e){
            e.preventDefault(); 
            $(this).parent().children('a').removeClass('active');
            $(this).addClass('active');
            var linkClass = $(this).attr('href');
            $('.gallery').each(function(){
                if($(this).is(":visible") == true){
                    $(this).hide();
                }
            });
            $(linkClass).fadeIn();  
        });

        $(document).on('click', '.yamm .dropdown-menu', function(e) {
            e.stopPropagation()
        });

        $('#twitterb').tooltip({
            placement : 'bottom',
            title : 'Twitter'
        });
        $('#facebookb').tooltip({
            placement : 'bottom',
            title : 'Facebook'
        });
        $('#instagramb').tooltip({
            placement : 'bottom',
            title : 'Instagram'
        });
        $('#googleb').tooltip({
            placement : 'bottom',
            title : 'Google+'
        });

        google.maps.event.addDomListener(window, 'load', null);
    });
});

function scrollTo(selectors){
    if(!$(selectors).size()) return;
    var selector_top = $(selectors).offset().top - top_menu_height;
    $('html,body').animate({ scrollTop: selector_top }, 'slow');
}