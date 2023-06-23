// $(function(){
//     'use strict';
//     $('body').css('paddingTop',$('.navbar').innerHeight());
// });
    
    var placeAttr = '';
    $('[placeholder]').focus(function (){
        placeAttr = $(this).attr('placeholder');
        $(this).attr('placeholder', '');
    }).blur(function(){
        $(this).attr('placeholder', placeAttr);
    });

    $('.butn-list span').click(function () { 
        $('div .section-1').fadeOut(300, function(){
            $(this).addClass('v-none');
            $('.table-choose').removeClass('v-none').fadeIn();
        });
    });

    $('.return').click(function () { 
        $('.table-choose').fadeOut(300, function(){
            $(this).addClass('v-none');
            $('div .section-1').removeClass('v-none').fadeIn();
        });
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

    $('.butn').click(function () { 
        
        if($(this).hasClass('book'))
        {
            $('.book').addClass('active-btn');
            $('.timetable').removeClass('active-btn');
            $('.news').removeClass('active-btn');
            $('.tm-table').fadeOut(300, function(){
                $(this).addClass('v-none');
                $('div .section-1').removeClass('v-none').fadeIn();
                $('.nws').addClass('v-none').fadeOut();
            });
        }

        if($(this).hasClass('timetable'))
        {
            $('.timetable').addClass('active-btn');
            $('.book').removeClass('active-btn');
            $('.news').removeClass('active-btn');
            $('div .section-2').addClass('v-none').fadeOut();
            $('.table-choose').addClass('v-none').fadeOut();
            $('.nws').fadeOut(300, function(){
                $(this).addClass('v-none');
                $('.tm-table').removeClass('v-none').fadeIn();
                $('div .section-1').addClass('v-none').fadeOut();
            });
        }

        if($(this).hasClass('news'))
        {
            $('.news').addClass('active-btn');
            $('.book').removeClass('active-btn');
            $('.timetable').removeClass('active-btn');
            $('div .section-2').addClass('v-none').fadeOut();
            $('.table-choose').addClass('v-none').fadeOut();
            $('div .section-1').fadeOut(300, function(){
                $(this).addClass('v-none');
                $('.nws').removeClass('v-none').fadeIn();
                $('.tm-table').addClass('v-none').fadeOut();
            });
        }
    });