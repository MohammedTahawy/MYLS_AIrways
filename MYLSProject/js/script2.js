var placeAttr = '';
    $('[placeholder]').focus(function (){
        placeAttr = $(this).attr('placeholder');
        $(this).attr('placeholder', '');
    }).blur(function(){
        $(this).attr('placeholder', placeAttr);
    });

    $('.Next').click(function () { 
        $('.table-choose').fadeOut(300, function(){
            $(this).addClass('v-none');
            $('div .section-2').removeClass('v-none').fadeIn();
        });
    });

    $('.butn-visa span').click(function () { 
        $('div .section-2').fadeOut(300, function(){
            $(this).addClass('v-none');
            $('.table-choose').removeClass('v-none').fadeIn();
        });
    });