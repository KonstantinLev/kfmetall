$(document).ready(function() {

    $('#my-menu').mmenu({
        extensions: ['effect-menu-slide', 'pagedim-black'],
        navbar: {
            title: 'KFMetall'
        },
        offCanvas: {
            position: 'left'
        }
    });
    //   Get the API mmenu
    var api = $("#my-menu").data( "mmenu" );
    api.bind('open:finish', function(){
        $('.hamburger').addClass('is-active');
    }).bind('close:finish', function(){
        $('.hamburger').removeClass('is-active');
    });

    $('.top-menu a').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).addClass('active');
        }
    });
});