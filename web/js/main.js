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


    $('#callback').modal({show: false, backdrop: 'static'});

    //нажатие кнопки "Отправить уведомление по email" рендерим форму уточнения данных для отправки email
    $('.btn-open-form').click(function() {
        var url = $(this).data('link');
        console.log(url);
        $.ajax({
            url: url,
            type: 'get',
            showLoader: true,
            success: function (data) {
                try{
                    $('.callback-body').html(data);
                }
                catch(e)
                {
                    console.log(e);
                    return;
                }
            }
        });
    });

});