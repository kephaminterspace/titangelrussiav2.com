var isMobileType = $(window).width() >= 976;
var isMobileType2 = $(window).width() >= 700;

$(document).ready(function() {

    ts = new Date(2027, 11, 1);
    $('#countdown').countdown({
        timestamp	: ts
    });

    ts2 = new Date(2027, 10, 8);
    $('#countdown2').countdown({
        timestamp	: ts2
    });

    ts3 = new Date(2027, 10, 8);
    $('#countdown3').countdown({
        timestamp   : ts3
    });



    if (typeof ymaps != "undefined"){
        //ymaps.ready(init);
        function init () {
            if ($('#map').length) {
                var myMap = new ymaps.Map("map", {
                    center: [55.804122, 37.755697],
                    zoom: 13,
                    controls: [' ']
                    //controls: ['zoomControl']
                });


                myMap.geoObjects
                 .add(new ymaps.Placemark([55.804122, 37.755697], {
                        balloonContent: 'г.Москва, район Гольяново, Щелковское шосе, дом 5, офис 18',
                        hintContent: 'Москва!'
                    }, {
                             // Опции.
                        // Необходимо указать данный тип макета.
                        iconLayout: 'default#image',
                        // Своё изображение иконки метки.
                        iconImageHref: 'images/myIcon.png',
                        iconImageSize: [30, 41],
                        iconImageOffset: [-5, -38]
                    }))
            }
        }
        ymaps.ready(init);
    }












    $('.pagin .tab a:first').addClass('klicked');

    $('.tabs:not(:first)').hide();

    $('.pagin .tab a').click(function(e){
        e.preventDefault();
        if (!$(this).hasClass('klicked')) {


            $('.tabs').css({display:"none"});

            curDiv = $('.tabs[data-att='+$(this).attr('data-attr')+']');


            $(curDiv).css({
                'opacity': 0,
                'display': 'block'
            });

            var objShow = {
                opacity: '1'
            };



            $(curDiv).animate(objShow, 1000);
            $('.pagin .tab a').removeClass('klicked');
            $(this).addClass('klicked');


            $('html, body').stop(true,true).animate({
                scrollTop: $('.views').offset().top
            }, 1000);
        }



    });


    var arr = $('.pagin .tab a');

    $('.last').click(function(e) {
        e.preventDefault();
        var previndex;
        var nextindex;

        $.each(arr, function (i, val) {
            if($(arr[i]).hasClass('klicked')){
                previndex = i;
                nextindex = i+1;
            }
        });
        if(nextindex < arr.length){
            $(arr[previndex]).removeClass('klicked');
            $(arr[nextindex]).removeClass('klicked').trigger('click');
        }
        $('html, body').stop(true,true).animate({
            scrollTop: $('.views').offset().top
        }, 1000);
    });

    $('.first').click(function(e) {
        e.preventDefault();
        var previndex;
        var nextindex;

        $.each(arr, function (i, val) {
            if($(arr[i]).hasClass('klicked')){
                previndex = i;
                nextindex = i-1;
            }
        });
        if(nextindex >= 0){
            $(arr[previndex]).removeClass('klicked');
            $(arr[nextindex]).removeClass('klicked').trigger('click');
        }
        $('html, body').stop(true,true).animate({
            scrollTop: $('.views').offset().top
        }, 1000);
    });




    $('.sly').click(function() {
        var target = $(this).attr('href');
        $('html, body').stop(true,true).animate({
            scrollTop: $(target).offset().top
        }, 1500);
        return false;
    });



    $(".head_menu .block-toggle_nav").click(function() {
        if(!$(this).hasClass('open')){
            $(this).addClass("open");
            $('#toggle').addClass("on");
            $("#menu1").stop(true,true).fadeIn('slow');
        }
        else{
            $('#toggle').removeClass("on");
            $("#menu1").fadeOut('slow');
            $(this).removeClass("open");
        }

    });



    $(".foot_menu .block-toggle_nav").click(function() {
        if(!$(this).hasClass('open')){
            $(this).addClass("open");
            $('#toggle2').addClass("on");
            $("#menu2").stop(true,true).slideDown('slow');
        }
        else{
            $('#toggle2').removeClass("on");
            $("#menu2").slideUp('slow');
            $(this).removeClass("open");
        }

    });


    Mobile();
    Mobile2();



    $('#link1').click(function(event) {
        event.preventDefault();
        if(!$(this).hasClass('open')){
            $('#hidd1').slideDown();
            $(this).html('Свернуть').addClass('open');
        }
        else{
            $('#hidd1').slideUp();
            $(this).html('Читать подробнее').removeClass('open');
        }
    });








    $("#formm").validate({
        rules: {

            name: {
                required: true,
                minlength: 4,
                maxlength: 30
            },

            phone: {
                required: true,
                maxlength: 30
            }


        },

        messages: {

            name: {
                required: "Это поле обязательно для заполнения",
                minlength: "Меньше 4 символов",
                maxlength: "Много символов"
            },

            phone: {
                required: "Это поле обязательно для заполнения",
                maxlength: "Много символов"
            }
        },
        submitHandler: function () {
            $.ajax({
                // url: 'ajax.php',
                url: 'mail/ajax.php',
                type: 'POST',
                data: {
                    pages:$("#formm").find('input[name=formname]').val(),
                    action:$("#formm").find('input[name=action]').val(),
                    name: $("#formm").find('input[name=name]').val(),
                    phone: $("#formm").find('input[name=phone]').val()
                },
                success: function (response) {
                    // console.log(response)
                    $("#formm").find('input[name=name]').val('');
                    $("#formm").find('input[name=phone]').val('');
                    alert('Ваше сообщение отправлено. Спасибо');
                }
            });
        }

    });


    $("#forms").validate({
        rules: {

            name: {
                required: true,
                minlength: 4,
                maxlength: 30
            },

            email: {
                required: true,
                email: true,
                maxlength: 30
            }


        },

        messages: {

            name: {
                required: "Это поле обязательно для заполнения",
                minlength: "Меньше 4 символов",
                maxlength: "Много символов"
            },

            email: {
                required: "Это поле обязательно для заполнения",
                email: "Укажите электронный адрес",
                maxlength: "Много символов"
            }
        },
        submitHandler: function () {
            $.ajax({
                // url: 'ajax.php',
                url: 'mail/ajax.php',
                type: 'POST',
                data: {
                    pages:$("#forms").find('input[name=formname]').val(),
                    action:$("#forms").find('input[name=action]').val(),
                    name: $("#forms").find('input[name=name]').val(),
                    mail: $("#forms").find('input[name=email]').val(),
                    info: $("#forms").find('textarea[name=info]').val()
                },
                success: function (response) {
                    // console.log(response)
                    $("#forms").find('input[name=name]').val('');
                    $("#forms").find('input[name=email]').val('');
                    $("#forms").find('textarea[name=info]').val('');
                    alert('Ваше сообщение отправлено. Спасибо');
                }
            });
        }

    });


    $(window).resize(function () {
        Mobile();
        Mobile2();
    });

    function trr() { $('.various').trigger('click'); }

    setTimeout( trr , 60000);


       $('.fancybox').fancybox();
       $('.various').fancybox({
                wrapCSS:"wrap",
                // 'scrolling':'visible',
                // maxWidth    : 800,
                // maxHeight   : 600,
                // fitToView   : false,
                // width       : '70%',
                // height      : '100%',
                // autoSize    : false,
            });

});




    var slickParams = {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        speed: 300,
        dots: false,
        arrows:true
    };





    function Mobile() {
        if ((!window.isMobileType) && $(window).width() < 976) {
            window.isMobileType = true;
            $("#menu1").css('display','none');
            $('#toggle').removeClass("on");
            $("#menu1").fadeOut('slow');
            $(".head_menu .block-toggle_nav").removeClass("open");

        }
        if (window.isMobileType && $(window).width() >= 976) {
            window.isMobileType = false;
            $("#menu1").css('display','block');

        }

    };
    function Mobile2() {
        if ((!window.isMobileType2) && $(window).width() < 700) {
            window.isMobileType2 = true;
            $("#menu2").css('display','none');
            $('#toggle2').removeClass("on");
            $("#menu2").fadeOut('slow');
            $(".foot_menu .block-toggle_nav").removeClass("open");
            $('.slider_decript').slick(slickParams);
            $('.slider_compos').slick(slickParams);
            $('.slider_step').slick(slickParams);
            $('#link1').html('Читать подробнее').removeClass('open').css('display','block');
            $("#hidd1").css('display','none');
        }
        if (window.isMobileType2 && $(window).width() >= 700) {
            window.isMobileType2 = false;
            $("#menu2").css('display','block');

            if ($('.slider_decript').hasClass('slick-initialized')){
                $('.slider_decript').slick('unslick');
            }
            if ($('.slider_step').hasClass('slick-initialized')){
                $('.slider_step').slick('unslick');
            }
            if ($('.slider_compos').hasClass('slick-initialized')){
                $('.slider_compos').slick('unslick');
            }


            $('#link1').html('Свернуть').addClass('open').css('display','none');
            $("#hidd1").css('display','inline');
        
        }


    };
