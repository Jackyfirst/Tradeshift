// DOM Ready
jQuery(document).ready(function ($) {
    // alert('aaa');
    // SVG fallback
    // toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
    if (!Modernizr.svg) {
        var imgs = document.getElementsByTagName('img');
        var dotSVG = /.*\.svg$/;
        for (var i = 0; i != imgs.length; ++i) {
            if (imgs[i].src.match(dotSVG)) {
                imgs[i].src = imgs[i].src.slice(0, -3) + "png";
            }
        }
    }

});



jQuery(document).ready(function ($) {

  //var protocol = window.location.indexOf("https://")==0?"https":"http";
  var secure = (window.location.protocol === 'https:');
     if(secure==true){
        var url='https';
     }else{
         var url='http';
     }

    // if($('.call_sales').length  || $('.phone_uk').length){
    //       jQuery.getScript(url+'://www.geoplugin.net/javascript.gp', function () {
    //         var continent= geoplugin_continentCode();
    //         if (continent == "EU") {
    //             $('.phone_uk').removeClass('non-active');
    //             $('.phone_uk').addClass('active');
    //             $('.phone_usa').removeClass('active');
    //             $('.phone_usa').addClass('non-active');
    //             $('.phone_def').addClass('non-active');
    //         }else{
    //             $('.phone_usa').removeClass('non-active');
    //             $('.phone_usa').addClass('active');
    //             $('.phone_uk').removeClass('active');
    //             $('.phone_uk').addClass('non-active');
    //             $('.phone_def').addClass('non-active');
    //         }
    //     });      
    // }
    // if($('.call_sales').length  || $('.top_head').length){
    //       jQuery.getScript(url+'://www.geoplugin.net/javascript.gp', function () {
    //         var continent= geoplugin_continentCode();
    //         if (continent == "NA") {
    //             $('.phone_usa').removeClass('non-active');
    //             $('.phone_usa').addClass('active');
    //             $('.phone_uk').removeClass('active');
    //             $('.phone_uk').addClass('non-active');
    //         }else{

    //         }
    //     });
    // }

    // if($('.give-us-a-call').length){
    //         // var continent = geoip2.country();  // Calls function from the GeoIP MaxMind web service | js is on header.php
    //         var country = geoip2.country();
    //         if (country == "FR") { // Show TS France Number
    //             $('.phone_default').addClass('non-active');
    //             $('.phone_france').removeClass('non-active');
    //         } else if (country == "DE") {  // Show TS Germany Number
    //             $('.phone_default').addClass('non-active');
    //             $('.phone_germany').removeClass('non-active');
    //         } else if (country == "UK") {  // Show TS UK Number if not France nor Germany
    //             $('.phone_default').addClass('non-active');
    //             $('.phone_gb').removeClass('non-active');
    //         } else {  // Show US for everything else
    //             $('.phone_default').addClass('non-active');
    //             $('.phone_us').removeClass('non-active');
    //         };
    // }
    //fix input fields with autocompleted stuff in them
    $('input').each(function () {
        if ($(this).val() != $(this).attr('data-default')) {
            $(this).css('color', '#333333');
            $(this).removeClass('untouched');
        }
    });
    //general form handling
    $('.untouched').click(function (e) {
        $(this).val('');
        $(this).css('color', '#333333');
        $(this).removeClass('untouched');
    });
    var isEmail = function (email) {
        return (/^[a-z0-9!#$%&'*+\/=?^_.`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(email.toLowerCase()));
    };
    var hideErrors = function () {
        $('.errorindicator').hide();
        $('input, select').removeClass('error').removeClass('empty');
    };
    var setError = function (className) {
        $(className).addClass('error');
    };
    var setEmpty = function (className) {
        $(className).addClass('empty');
    };
    var showError = function (className) {
        var realShowError = function (className) {
            $('.error-' + className).show().animate({
                opacity: 0.5
            }, {
                duration: 250,
                complete: function () {
                    $(this).animate({
                        opacity: 1.0
                    }, {
                        duration: 250,
                        complete: function () {
                            $(this).animate({
                                opacity: 0.5
                            }, {
                                duration: 250,
                                complete: function () {
                                    $(this).animate({
                                        opacity: 1.0
                                    }, {
                                        duration: 250
                                    })
                                }
                            })
                        }
                    })
                }
            });
        };
        realShowError(className);

    };

    $('.signup_email_field').on('keyup', function () {

        // syncSignupfield($(this), '.signup_email_field');
        var t = this;
        if (this.value != this.lastValue) {
            if (this.timer) {
                clearTimeout(this.timer);
            }
            this.timer = setTimeout(function () {
                if (isEmail($(t).val())) {
                    $.ajax({
                        url: '/ajax-proxy.php?type=email&email=' + $(t).val(),
                        dataType: 'json',
                        success: function (d) {
                            if (d != null) signup_email_available = d.available;
                            if (!signup_email_available) {
                                showError('takenemail');
                                setError('.activesignup .signup_email_field');
                                return false;
                            }
                        }
                    });
                }
            }, 200);
            this.lastValue = this.value;
        }
    });
    $('.activesignup .signup_company_field').on('keyup', function () {

        syncSignupfield($(this), '.signup_company_field');
        var t = this;
        if (this.value != this.lastValue) {
            if (this.timer) {
                clearTimeout(this.timer);
            }
            this.timer = setTimeout(function () {
                $.ajax({
                    url: '/ajax-proxy.php?type=company&company=' + $(t).val() + '&country=' + $('.activesignup .signup_country_field').val(),
                    dataType: 'json',
                    success: function (d) {
                        if (d != null) {
                            signup_company_available = d.available;
                        }
                    }
                });
            }, 200);
            this.lastValue = this.value;
        }
    });
$('#theForm').on('click', function(event) { alert('test'); });


    $('.activesignup .signup_country_field').on('change', function () {

        syncSignupfield($(this), '.signup_country_field');
        var t = this;
        if (this.value != this.lastValue) {
            if (this.timer) {
                clearTimeout(this.timer);
            }
            this.timer = setTimeout(function () {
                $.ajax({
                    url: '/ajax-proxy.php?type=company&country=' + $(t).val() + '&company=' + $('.activesignup .signup_company_field').val(),
                    dataType: 'json',
                    success: function (d) {
                        if (d != null) {
                            signup_company_available = d.available;
                        }

                    }
                });
            }, 200);
            this.lastValue = this.value;
        }
    });
    var fieldIsEmpty = function (field) {
        return ($(field).val().length == 0 || $(field).hasClass('untouched'));
    };
    var processSignup = function (e) {
        hideErrors();
        if (fieldIsEmpty('.activesignup .signup_email_field') || fieldIsEmpty('.activesignup .signup_company_field') || fieldIsEmpty('.activesignup .signup_country_field')) {
            if (fieldIsEmpty('.activesignup .signup_email_field')) {
                showError('fillall-email');
                setEmpty('.activesignup .signup_email_field');
            }
            if (fieldIsEmpty('.activesignup .signup_company_field')) {
                showError('fillall-company');
                setEmpty('.activesignup .signup_company_field');
            }
            if (fieldIsEmpty('.activesignup .signup_country_field')) {
                showError('fillall-country');
                setEmpty('.activesignup .signup_country_field');
            }
            return false;
        }
        if (!isEmail($('.activesignup .signup_email_field').val())) {
            showError('invalidemail');
            setError('.activesignup .signup_email_field');
            return false;
        }

        if (!signup_company_available) {
            showError('takencompany');
            setError('.activesignup .signup_company_field');
            return false;
        }
        return true;
    };


    $('.signupform').submit(function (e) {
        return processSignup(e)
    });

    // $('.bxslider').bxSlider({
    //     auto: true,
    //     autoStart: true,
    //     infiniteLoop: true,
    //     hideControlOnEnd: true
    // });



    if ($('.ldn_evnet_promo').length) {
        jQuery.getScript(url+'://www.geoplugin.net/javascript.gp', function () {
            var country = geoplugin_countryName();
            if (country == "United Kingdom" || country == "UK" || country == "GB") {
                $('.ldn_evnet_promo').removeClass('non-active');
                $('.role_res_center').addClass('non-active');
                $('.front_roles_header_uk').removeClass('non-active');
                $('.front_roles_header').addClass('non-active');
            }
        });
    }


    if ($('.USA_perks').length ) {
            jQuery.getScript(url+'://www.geoplugin.net/javascript.gp', function () {
            var country = geoplugin_countryName();
            if (country == "United States" || country == "USA" || country == "Canada" || country == "United States of America") {
                $('.USA_perks').removeClass('non-active');
                $('.USA_perks').addClass('active');
                $('.EU_perks').removeClass('active');
                $('.EU_perks').addClass('non-active');
            }
        });
    }
     if ($('.EU_perks').length ) {
            jQuery.getScript(url+'://www.geoplugin.net/javascript.gp', function () {
            var country = geoplugin_countryName();
            if (country == "Denmark" || country == "dk" || country == "uk" || country == "United Kinngdom") {
                $('.EU_perks').removeClass('non-active');
                $('.EU_perks').addClass('active');
                $('.USA_perks').removeClass('active');
                $('.USA_perks').addClass('non-active');
            }
        });
    }
     if ($('.web_reg').length ) {
            jQuery.getScript(url+'://www.geoplugin.net/javascript.gp', function () {
            var country = geoplugin_countryName();
            if (country == "United States" || country == "USA" || country == "Canada" || country == "United States of America") {
                $('.web_reg_usa').removeClass('non-active');
                $('.web_reg_usa').addClass('active');
                $('.web_reg_uk').removeClass('active');
                $('.web_reg_uk').addClass('non-active');
            }else{
                $('.web_reg_uk').removeClass('non-active');
                $('.web_reg_uk').addClass('active');
                $('.web_reg_usa').removeClass('active');
                $('.web_reg_usa').addClass('non-active');
            }

       
        });
    }
     if ($('.top_head').length) {
        jQuery.getScript(url+'://www.geoplugin.net/javascript.gp', function () {
            var country2 = geoplugin_countryName();
            if (country2 == "China" || country2 == "CN" || country2 == "Hong Kong" || country2 == "HK" ) {
                window.location = "http://tradeshift.com/china/";
            }
            if (country2 == "Japan" || country2 == "JP") {
                window.location = " https://go.tradeshift.com/register?lang=ja";
            }
        });
    }
/*
    $('.lang_select .active').click(function (e) {
        alert('aaa');
        if ($(this).parent().hasClass('open')) {
            $(this).parent().removeClass('open');
            $(this).parent().addClass('closed');
        } else {
            $(this).parent().removeClass('closed');
            $(this).parent().addClass('open');
        }

        e.preventDefault();
    });*/

    $('.lang_select').click(function (e) {
        if ($('.lang_select').hasClass('active')) {
            //alert('aaa');
            $('.lang_select_list').removeClass('closed');
            $('.lang_select_list').addClass('active');
            $('.lang_select').removeClass('active');
            $('.lang_select').addClass('closed');
        } else {
           $('.lang_select_list').removeClass('active');
           $('.lang_select_list').addClass('closed');
           $('.lang_select').removeClass('closed');
           $('.lang_select').addClass('active');
        }

        e.preventDefault();
    });
  function setCookie(name, value, days){
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000)); 
        var expires = "; expires=" + date.toGMTString();
        $.cookie('ts_lang', null, { path: '/' });
        document.cookie = name + "=" + value + expires;

    }  
  $('.lang_select_opt').click(function (e) {
        url=window.location.href;
        var url_part = url.split('.com');
        var a = url_part[1];
        if ( $( this ).hasClass('en')) {
           window.location = "http://www.tradeshift.com"+a; 
           var lang='en'; 
        }
        if ( $( this ).hasClass('ja')) {
           window.location = "http://ja.tradeshift.com"+a;  
           var lang='ja'; 
        }
        setCookie('ts_lang', lang, 30);
      e.preventDefault();
    });

  $('.wrapper-dropdown_1 span').click(function (e) {
         if ($('.dropdown1').hasClass('non-active')) {
           $('.dropdown1').removeClass('non-active');
           $('.dropdown1').addClass('active');
        }else{
            $('.dropdown1').removeClass('active');
            $('.dropdown1').addClass('non-active');
        }
      e.preventDefault();
    });
  $('.wrapper-dropdown_2 span').click(function (e) {
         if ($('.dropdown2').hasClass('non-active')) {
           $('.dropdown2').removeClass('non-active');
           $('.dropdown2').addClass('active');
        }else{
            $('.dropdown2').removeClass('active');
            $('.dropdown2').addClass('non-active');
        }
      e.preventDefault();
    });
  $('.wrapper-dropdown_3 span').click(function (e) {
         if ($('.dropdown3').hasClass('non-active')) {
           $('.dropdown3').removeClass('non-active');
           $('.dropdown3').addClass('active');
        }else{
            $('.dropdown3').removeClass('active');
            $('.dropdown3').addClass('non-active');
        }
      e.preventDefault();
    });



  /*    $('html').click(function (e) {
        if ($('.lang_select').hasClass('closed')) {
           // alert(e.target.className);
           if(e.target.className !== "lang_select_list active")
            {
               if(e.target.className !== "lang_select closed")
                {
                   $('.lang_select_list').removeClass('active');
                   $('.lang_select_list').addClass('closed');
                   $('.lang_select').removeClass('closed');
                   $('.lang_select').addClass('active'); 
                }
               
             // $(".form_wrapper").hide();
            }
        } 
    });
*/

    $('.sfo_contact_but').click(function (e) {
        $('.contact_buts').removeClass('active_contact');
        $('.sfo_contact_but').addClass('active_contact');
        $('.contact_maps').addClass('non-active');
        $('.contact_sfo').removeClass('non-active');
        e.preventDefault();
    });
    $('.ny_contact_but').click(function (e) {
        $('.contact_buts').removeClass('active_contact');
        $('.ny_contact_but').addClass('active_contact');
        $('.contact_maps').addClass('non-active');
        $('.contact_ny').removeClass('non-active');
        e.preventDefault();
    });
    $('.cph_contact_but').click(function (e) {
        $('.contact_buts').removeClass('active_contact');
        $('.cph_contact_but').addClass('active_contact');
        $('.contact_maps').addClass('non-active');
        $('.contact_cph').removeClass('non-active');
        e.preventDefault();
    });
    $('.ldn_contact_but').click(function (e) {
        $('.contact_buts').removeClass('active_contact');
        $('.ldn_contact_but').addClass('active_contact');
        $('.contact_maps').addClass('non-active');
        $('.contact_ldn').removeClass('non-active');
        e.preventDefault();
    });
    $('.par_contact_but').click(function (e) {
        $('.contact_buts').removeClass('active_contact');
        $('.par_contact_but').addClass('active_contact');
        $('.contact_maps').addClass('non-active');
        $('.contact_par').removeClass('non-active');
        e.preventDefault();
    });
    $('.chi_contact_but').click(function (e) {
        $('.contact_buts').removeClass('active_contact');
        $('.chi_contact_but').addClass('active_contact');
        $('.contact_maps').addClass('non-active');
        $('.contact_chi').removeClass('non-active');
        e.preventDefault();
    });
    $('.jap_contact_but').click(function (e) {
        $('.contact_buts').removeClass('active_contact');
        $('.jap_contact_but').addClass('active_contact');
        $('.contact_maps').addClass('non-active');
        $('.contact_jap').removeClass('non-active');
        e.preventDefault();
    });
      $('.mun_contact_but').click(function (e) {
        $('.contact_buts').removeClass('active_contact');
        $('.mun_contact_but').addClass('active_contact');
        $('.contact_maps').addClass('non-active');
        $('.contact_mun').removeClass('non-active');
        e.preventDefault();
    });
    $('input:checkbox[name=all]').click(function () {
        if (this.checked) {
            $('.resourcess_all').addClass('active');
            $('.resourcess_all').removeClass('non-active');
            var numberArray = [0, 1, 2, 3, 4, 5];
            $.each(numberArray, function (index, value) {
                $('input[name=res_t]').attr('checked', false);
                $('.full_res_' + value).removeClass('active');
                $('.full_res_' + value).addClass('non-active');
            });
        } else {
            $('.resourcess_all').addClass('non-active');
            $('.resourcess_all').removeClass('active');
        }
        $('.load_more').removeClass('non-active');
    });

    $('input:checkbox[name=res_t]').click(function () {
        var myClass = $(this).attr("class").split(' ');

        if (this.checked) {
            var numberArray = [0, 1, 2, 3, 4, 5];
            $.each(numberArray, function (index, value) {
                // $('input[name=res_t]').attr('checked', false);
                $('.full_res_' + value).removeClass('active');
                $('.full_res_' + value).addClass('non-active');
            });

            //$(this).attr('checked', !$(this).attr('checked')); 
            $("input[name=res_t]").not(this).attr('checked', false);
            $('.full_' + myClass[0]).removeClass('non-active');
            $('.full_' + myClass[0]).addClass('active');
            $('.resourcess_all').addClass('non-active');
            $('.resourcess_all').removeClass('active');
            $('input[name=all]').attr('checked', false);
        } else {
            $('.full_' + myClass[0]).addClass('non-active');
            $('.full_' + myClass[0]).removeClass('active');
        }
        $('.load_more').addClass('non-active');
    });
    /*if ($('.resource_cat').length) {
         if ($('.regular-checkbox').is(":checked")) {
             var myClass = $('.regular-checkbox:checkbox:checked').attr('class').split(' ');
             if(myClass[0]!='all')
             {
                $('.resourcess_all').addClass('non-active');
                $('.resourcess_all').removeClass('active');
                $('.full_' + myClass[0]).removeClass('non-active');
                $('.full_' + myClass[0]).addClass('active');
                 $('.load_more').addClass('non-active');
             }

         }
    } */
    $('.l_label').click(function (e) {
     });



    $('.load_all').click(function (e) {
        $('.resourcess_all').removeClass('not_show_all');
        $('.load_more').addClass('non-active');
        e.preventDefault();
    });

    $('.contact_me_form #mktFrmSubmit').click(function (e) {
        var myClass = $(this).attr("class");
        var l_name = $(".contact_" + myClass + "_form #FirstName").val();
        var l_lname = $(".contact_" + myClass + "_form #LastName").val();
        var l_company = $(".contact_" + myClass + "_form #Company").val();
        var l_mail = $(".contact_" + myClass + "_form #Email").val();
        var l_title = $(".contact_" + myClass + "_form #Title").val();
        var l_phone = $(".contact_" + myClass + "_form #Phone").val();
        var form_t = $("#Marketing_Resource_Name__c").val();
        var redirect = $('input:hidden[name=retURL]').val();
        var i = 0;
        if (l_name == '') {
            i++;
            $('.contact_' + myClass + '_form #FirstName').addClass('alert_contact');
        }
        if (l_lname == '') {
            $('.contact_' + myClass + '_form #LastName').addClass('alert_contact');
            i++;
        }
        if (l_company == '') {
            $('.contact_' + myClass + '_form #Company').addClass('alert_contact');
            i++;
        }
        if (l_mail == '') {
            $('.contact_' + myClass + '_form #Email').addClass('alert_contact');
            i++;
        }
        if (l_title == '') {
            $('.contact_' + myClass + '_form #Title').addClass('alert_contact');
            i++;
        }
        if (l_phone == '') {

            $('.contact_' + myClass + '_form #Phone').addClass('alert_contact');
            i++;
        }

        if (i < 1) {
            _gaq.push(['_trackEvent', 'Contact me', form_t, l_company]);
            _gaq.push(['_setCustomVar', 1, 'Company', l_company, 1]);
            _gaq.push(['_setCustomVar', 2, 'Position', l_title, 1]);
            _gaq.push(['_trackPageview', '/thankyou-page']);
            $(".contact_" + myClass + "_form #mktForm_52").submit();
        }
        e.preventDefault();
    });

    $('.menu_list').click(function (e) {
        if ($("nav").hasClass('no_menu')) {
            $("nav").removeClass('no_menu');
        } else {
            $("nav").addClass("no_menu");
        }
        e.preventDefault();
    });

    $('.sub_nav').mouseleave(function () {
        $(".sub_nav").addClass('non-active');

    });
    $('.sub_nav_2').mouseleave(function () {
        $(".sub_nav_2").addClass('non-active');
        
    });

    $('.solutions_menu').mouseenter(function (e) {
        if ($(".sub_nav").hasClass('non-active')) {
            $(".sub_nav").removeClass('non-active');
            $(".sub_nav_2").addClass("non-active");
        } else {
            $(".sub_nav").addClass("non-active");
        }
        e.preventDefault();
    });
    $('.solutions_menu2').mouseenter(function (e) {
        if ($(".sub_nav_2").hasClass('non-active')) {
            $(".sub_nav_2").removeClass('non-active');
            $(".sub_nav").addClass("non-active");
            } else {
            
            $(".sub_nav_2").addClass("non-active");
        }
        e.preventDefault();
    });
    $('.no_menu').mouseenter(function (e) {
        if ($(".sub_nav").hasClass("non-active")) {

        } else {
            $(".sub_nav").addClass("non-active");
        }
        if ($(".sub_nav_2").hasClass("non-active")) {
            
        } else {

            $(".sub_nav_2").addClass("non-active");
        }
    });

    $('.solutions_menu').click(function (e) {
        if ($(".sub_nav").hasClass('non-active')) {
            $(".sub_nav").removeClass('non-active');
            $(".sub_nav_2").addClass("non-active");
        } else {
            $(".sub_nav").addClass("non-active");
        }
        e.preventDefault();
    });
    $('.solutions_menu2').click(function (e) {
        if ($(".sub_nav_2").hasClass('non-active')) {
            $(".sub_nav_2").removeClass('non-active');
            $(".sub_nav").addClass("non-active");
        } else {
            $(".sub_nav_2").addClass("non-active");
        }
        e.preventDefault();
    });

    $('.member_img').click(function (e) {
        var myClass = $(this).attr("class").split(' ');
        if ($('.' + myClass[4] + '_info_big').hasClass('non-active')) {
            $('.member_info').addClass('non-active');
            $('.' + myClass[4] + '_info_big').removeClass('non-active');
            $('.' + myClass[4] + '_mob').removeClass('non-active');
        } else {

            //alert($('.'+myClass[4]+'_mob').text().length);
            if ($('.' + myClass[4] + '_mob').text().length > 8) {
                $('.' + myClass[4] + '_mob').addClass('non-active');
            }
            $('.' + myClass[4] + '_info_big').addClass('non-active');

        }
    });

$(window).scroll(function() {
    if ($(document).height() <= ($(window).height() + $(window).scrollTop())) {
        //alert('aaa');
        $("#habla_window_div").css("bottom","47px");
    }else{
         $("#habla_window_div").css("bottom","0px");
    }
});
    // $('.wpcf7-select').change(function () {
    //     var myClass = $("option:selected", this).attr("class").split(' ');
    //     if ($('.' + myClass[1] + '_info').hasClass('non-active')) {
    //         $('.branch_list_info').addClass('non-active');
    //         $('.' + myClass[1] + '_info').removeClass('non-active');
    //     }
    // });

    if ($('.no_full_width').css('display') == 'none') {
        $('.member_img').click(function (e) {
            var myClass = $(this).attr("class").split(' ');
            //alert($('.'+myClass[4]+"_info_big").html());
            $('.' + myClass[4] + '_mob').html($('.' + myClass[4] + "_info_big").html());
            $('.' + myClass[4] + '_mob').removeClass('no_full_width_res');
        });
    }
    $('.up_coming').click(function () {
        $('html, body').animate({
            scrollTop: $('.promotion').offset().top - 40
        }, 'slow');
    });
    $('.press_cta').click(function (e) {
        $('html, body').animate({
            scrollTop: $('.press_contact').offset().top - 40
        }, 'slow');
        e.preventDefault();
    });

    $('.contact_me').click(function (e) {
        var myClass = $(this).attr("class");
        var shown = myClass.split(' ');
        $(".contact_me_form").addClass('non-active');
        $("." + shown[0] + "_form").addClass('active');
        $("." + shown[0] + "_form").removeClass('non-active');
        $('html, body').animate({
            scrollTop: $("." + shown[0] + "_form").offset().top - 40
        }, 'slow');
        e.preventDefault();

    });
     $('.contact_if').click(function (e) {
        $(".m_iframe").removeClass('non-active')
        $('html, body').animate({
            scrollTop: $(".m_iframe").offset().top - 80
        }, 'slow');
        e.preventDefault();
    });
    $('.footer_talk').click(function (e) {
        $(".m_iframe").removeClass('non-active')
        $('html, body').animate({
            scrollTop: $(".m_iframe").offset().top - 80
        }, 'slow');
        e.preventDefault();
    }); 
    $('.e_pay_contact_a').click(function (e) {
        $(".m_iframe").removeClass('non-active')
        $('html, body').animate({
            scrollTop: $(".m_iframe").offset().top - 80
        }, 'slow');
        e.preventDefault();
    }); 
    if ($('.timeline').length) {
        $('.item').append('<div class="arrow-up-gray pos_8"></div><div class="arrow-up-white pos_9"></div>')
    }
    if ($('#foobarz').length) {
        if ($(window).width() <= 568) {
            $( ".inner" ).append( "<p>Test</p>" );
            $('#foobarz').addClass('non-active');
            $('.head_ver_dd').removeClass('non-active');                        
        }
      
    }
    $('.about_ts').click(function (e) {
        $('html, body').animate({
            scrollTop: $(".supplier_benefits").offset().top - 40
        }, 'slow');
        e.preventDefault();
    });
    $('.tl').click(function (e) {
        $('html, body').animate({
            scrollTop: $(".tl_more").offset().top - 60
        }, 'slow');
        e.preventDefault();
    });
    $('.return_top').click(function (e) {
        $('html, body').animate({
            scrollTop: $(".tl_more").offset().top - 60
        }, 'slow');
        e.preventDefault();
    });
    $('.tl_account').click(function (e) {
        $('.all_steps').addClass('non-active');
        $('.tl_account_more').removeClass('non-active');
        $('.arrow-down').addClass('non-active');
        $('.arrow_1').removeClass('non-active');
        $('.tl_icons').removeClass('icon_active');
        $('.tl_account').addClass('icon_active');
        $('.ts_blue_ico').addClass('non-active');
        $('.ts_st_1_b').removeClass('non-active');
        $('.ts_regular_ico').removeClass('non-active');
        $('.ts_st_1').addClass('non-active');
        $('html, body').animate({
            scrollTop: $(".tl_account_more").offset().top - 60
        }, 'slow');
          e.preventDefault();
    });

    $('.tl_customer').click(function (e) {
        $('.all_steps').addClass('non-active');
        $('.tl_customer_more').removeClass('non-active');
        $('.arrow-down').addClass('non-active');
        $('.arrow_2').removeClass('non-active');
        $('.tl_icons').removeClass('icon_active');
        $('.tl_customer').addClass('icon_active');
        $('.ts_blue_ico').addClass('non-active');
        $('.ts_st_2_b').removeClass('non-active');
        $('.ts_regular_ico').removeClass('non-active');
        $('.ts_st_2').addClass('non-active');
        $('html, body').animate({
            scrollTop: $(".tl_customer_more").offset().top - 60
        }, 'slow');
        e.preventDefault();
    });

    $('.tl_dispatch').click(function (e) {
        $('.all_steps').addClass('non-active');
        $('.tl_dispatch_more').removeClass('non-active');
        $('.arrow-down').addClass('non-active');
        $('.arrow_3').removeClass('non-active');
        $('.tl_icons').removeClass('icon_active');
        $('.tl_dispatch').addClass('icon_active');
        $('.ts_blue_ico').addClass('non-active');
        $('.ts_st_3_b').removeClass('non-active');
        $('.ts_regular_ico').removeClass('non-active');
        $('.ts_st_3').addClass('non-active');
        $('html, body').animate({
            scrollTop: $(".tl_dispatch_more").offset().top - 60
        }, 'slow');
        e.preventDefault();
    });
    $('.tl_format').click(function (e) {
        $('.all_steps').addClass('non-active');
        $('.tl_format_more').removeClass('non-active');
        $('.arrow-down').addClass('non-active');
        $('.arrow_4').removeClass('non-active');
        $('.tl_icons').removeClass('icon_active');
        $('.tl_format').addClass('icon_active');
        $('.ts_blue_ico').addClass('non-active');
        $('.ts_st_4_b').removeClass('non-active');
        $('.ts_regular_ico').removeClass('non-active');
        $('.ts_st_4').addClass('non-active');
        $('html, body').animate({
            scrollTop: $(".tl_format_more").offset().top - 60
        }, 'slow');
        e.preventDefault();
    });
    $('.tl_invoicing').click(function (e) {
        $('.all_steps').addClass('non-active');
        $('.tl_inv_more').removeClass('non-active');
        $('.arrow-down').addClass('non-active');
        $('.arrow_5').removeClass('non-active');
        $('.tl_icons').removeClass('icon_active');
        $('.tl_invoicing').addClass('icon_active');
        $('.ts_blue_ico').addClass('non-active');
        $('.ts_st_5_b').removeClass('non-active');
        $('.ts_regular_ico').removeClass('non-active');
        $('.ts_st_5').addClass('non-active');
        $('html, body').animate({
            scrollTop: $(".tl_inv_more").offset().top - 60
        }, 'slow');
        e.preventDefault();
    });

    $('.tl_validation').click(function (e) {
        $('.all_steps').addClass('non-active');
        $('.tl_inv_more').removeClass('non-active');
        $('.arrow-down').addClass('non-active');
        $('.arrow_5').removeClass('non-active');
        $('.tl_icons').removeClass('icon_active');
        $('.tl_invoicing').addClass('icon_active');
        $('.ts_blue_ico').addClass('non-active');
        $('.ts_st_5_b').removeClass('non-active');
        $('.ts_regular_ico').removeClass('non-active');
        $('.ts_st_5').addClass('non-active');
        $('html, body').animate({
            scrollTop: $(".validate").offset().top - 60
        }, 'slow');
        e.preventDefault();
    });

        $('.partner_link').click(function (e) {
             $('html, body').animate({
            scrollTop: $(".partners_forma").offset().top - 60
        }, 'slow');
            e.preventDefault();
         });


    $('.tl_help').click(function (e) {
         $('html, body').animate({
            scrollTop: $(".tl_last").offset().top - 40
        }, 'slow');
        e.preventDefault();
    });

    $('.front_ap').click(function(){
      window.location = 'http://tradeshift.com/roles/accounts-payable/';
    }); 
    $('.front_p2p').click(function(){
      window.location = 'http://tradeshift.com/roles/procure-to-pay/';
    }); 
    $('.front_fin').click(function(){
      window.location = 'http://tradeshift.com/roles/finance/';
    }); 
    $('.front_it').click(function(){
      window.location = 'http://tradeshift.com/roles/it/';
    }); 
    $('.front_smb').click(function(){
      window.location = 'http://tradeshift.com/roles/small-and-medium-sized-businesses/';
    });
    $('.front_supplier').click(function(){
      window.location = 'http://tradeshift.com/roles/invited-supplier/';
    });
    $('.front_godigital').click(function(){
      window.location = 'http://tradeshift.com/godigital/';
    });

    $(".navicon-button").click(function(){
      $(this).toggleClass("open");
      if($('.inner_menu').css('display') == 'none')
        {
            $( ".inner_menu" ).slideDown( "slow" );
            } else {
                $( ".inner_menu" ).slideUp( "slow" );
            }    });

    $(".menu_header").click(function (e){
      $(".navicon-button").toggleClass("open");
     if($('.inner_menu').css('display') == 'none')
        {

            $( ".inner_menu" ).slideDown( "slow" );
          //  $(".inner_menu").toggleClass("non-active");
            } else {
                $( ".inner_menu" ).slideUp( "slow" );
            }
       e.preventDefault();
    });



    $(".close_menu").click(function(){
      $(".navicon-button").removeClass("open");
      if($('.inner_menu').css('display') == 'none')
        {
            $( ".inner_menu" ).slideDown( "slow" );
            } else {
                $( ".inner_menu" ).slideUp( "slow" );
            }
    });
    $(".menu_solutions h2").click(function(){
        $(".solution_items").toggleClass("no_full_width");
    });
    $(".menu_roles h2").click(function(){
        $(".menu_roles_regular").toggleClass("no_full_width");
    });
    $(".adm_cta").click(function(e){
            $('html, body').animate({
                scrollTop: $(".adm_formz").offset().top - 60
            }, 'slow');
            e.preventDefault();
        });

    if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      
       $(".menu_header").click(function(){
           $('html, body').animate({
                scrollTop: $(".inner_menu").offset().top - 70
            }, 'slow');
        }); 
       $(".navicon-button").click(function(){
           $('html, body').animate({
                scrollTop: $(".inner_menu").offset().top - 70
            }, 'slow');
        }); 
       $(".contact_if").click(function(){
          $("iframe").width(320);
          $("iframe").height(520); 
        });
        $(".footer_talk").click(function(){
          $("iframe").width(320);
          $("iframe").height(520); 
        });
        $(".e_pay_contact_a").click(function(){
          $("iframe").width(320);
          $("iframe").height(520); 
        });
        if($('.adm_header').length)
        {
            $("iframe").width(320);
            $("iframe").height(320);
      
        }
       
    }
 $('.wf_features_more').click(function (e) {
        $('.wf_features').removeClass('non-active');
         $('html, body').animate({
            scrollTop: $(".wf_features").offset().top - 60
        }, 'slow');
        e.preventDefault();
    });
  $('.d_kit').click(function (e) {
         $('html, body').animate({
            scrollTop: $(".godigital_step6").offset().top + 760
        }, 'slow');
        e.preventDefault();
    });

     $('.supl_send_pdf_but').click(function (e) {
        $('.doc_uploader_links_text').addClass('non-active');
        $('.supl_send_pdf').removeClass('non-active');
        e.preventDefault();
    });
    $('.supl_send_inv_but').click(function (e) {
        $('.doc_uploader_links_text').addClass('non-active');
        $('.supl_send_inv').removeClass('non-active');
        e.preventDefault();
    }); 
    $('.supplier_request').click(function (e) {
        $('.request_file_form').removeClass('non-active');
         $('html, body').animate({
            scrollTop: $(".request_file_form").offset().top - 60
        }, 'slow');
        e.preventDefault();
    }); 
    $('.tl_account_h').mouseover(function(){
      var newSrc = $(".ts_st_1").attr("src").replace("s1.png", "s1_b.png");
      $(".ts_st_1").attr("src", newSrc); 
    });
    $('.tl_account_h').mouseout(function(){
      var newSrc = $(".ts_st_1").attr("src").replace("s1_b.png", "s1.png");
     $(".ts_st_1").attr("src", newSrc); 
    });

    $('.tl_customer_h').mouseover(function(){
      var newSrc = $(".ts_st_2").attr("src").replace("s2.png", "s2_b.png");
      $(".ts_st_2").attr("src", newSrc); 
    });
    $('.tl_customer_h').mouseout(function(){
      var newSrc = $(".ts_st_2").attr("src").replace("s2_b.png", "s2.png");
     $(".ts_st_2").attr("src", newSrc); 
    });
    $('.tl_dispatch_h').mouseover(function(){
      var newSrc = $(".ts_st_3").attr("src").replace("s3.png", "s3_b.png");
      $(".ts_st_3").attr("src", newSrc); 
    });
    $('.tl_dispatch_h').mouseout(function(){
      var newSrc = $(".ts_st_3").attr("src").replace("s3_b.png", "s3.png");
     $(".ts_st_3").attr("src", newSrc); 
    });

    $('.tl_format_h').mouseover(function(){
      var newSrc = $(".ts_st_4").attr("src").replace("s4.png", "s4_b.png");
      $(".ts_st_4").attr("src", newSrc); 
    });
    $('.tl_format_h').mouseout(function(){
      var newSrc = $(".ts_st_4").attr("src").replace("s4_b.png", "s4.png");
     $(".ts_st_4").attr("src", newSrc); 
    });

    $('.tl_invoicing_h').mouseover(function(){
      var newSrc = $(".ts_st_5").attr("src").replace("s5.png", "s5_b.png");
      $(".ts_st_5").attr("src", newSrc); 
    });
    $('.tl_invoicing_h').mouseout(function(){
      var newSrc = $(".ts_st_5").attr("src").replace("s5_b.png", "s5.png");
     $(".ts_st_5").attr("src", newSrc); 
    });

    // $('.jobs_location_link').click(function (e) {
    //     $('.jobs_location_link').addClass('jobs_active');
    //     $('.jobs_team_link').removeClass('jobs_active');
    //     $( ".jobs_team" ).empty();
    //       $.getJSON("https://api.lever.co/v0/postings/tradeshift?mode=json&group=location",function(location){
    //                               $.each(location, function(i, location){
    //                               //    $(field.text + " " + field.categories.location + " ").appendTo( ".jobs_team" );
    //                                 $(".jobs_team").append('<div class="location_header">'+'<p >'+location.title + "</p></div>");
    //                                     $.each(location.postings, function(j, posting){
    //                                         $(".jobs_team").append('<div class="jobs_line"><a href="'+posting.hostedUrl+'" class="jobs_link"><p class="jobs_pos">'+posting.text+ "</p>"+'<p class="jobs_dep">'+posting.categories.team+ "</p></a> </div>");
    //                                     }); 
    //                               });
    //                             });
    //     e.preventDefault();
    // });
    // $('.jobs_team_link').click(function (e) {

    //     $('.jobs_location_link').removeClass('jobs_active');
    //     $('.jobs_team_link').addClass('jobs_active');
    //     $( ".jobs_team" ).empty();
    //      $.getJSON("https://api.lever.co/v0/postings/tradeshift?mode=json&group=team",function(team){
    //                               $.each(team, function(i, team){
    //                               //    $(field.text + " " + field.categories.location + " ").appendTo( ".jobs_team" );
    //                                 $(".jobs_team").append('<div class="location_header">'+'<p >'+team.title + "</p></div>");
    //                                     $.each(team.postings, function(j, posting){
    //                                         $(".jobs_team").append('<div class="jobs_line"><a href="'+posting.hostedUrl+'" class="jobs_link"><p class="jobs_pos">'+posting.text+ "</p>"+'<p class="jobs_dep">'+posting.categories.location+ "</p></a> </div>");
    //                                     }); 
    //                               });
    //                             });
    //     e.preventDefault();
    // });

    // $('.jobs_mid_but').click(function (e) {
    //     $('html, body').animate({
    //         scrollTop: $('.jobs_team').offset().top - 80
    //     }, 'slow');
    //     e.preventDefault();
    // });

    // $('.jobs_eng_scroll').click(function (e) {
    //     $('html, body').animate({
    //         scrollTop: $('.jobs_developers_video').offset().top - 80
    //     }, 'slow');
    //     e.preventDefault();
    // });

    if (window.location.hash) {
        var hash = window.location.hash.substring(1);
        if (hash == "nl_filled") {
            $('html, body').animate({
                scrollTop: 1100
            }, 1000);
            $(".nl_form").addClass('non-active');
            $(".nl_form").removeClass('active');
            $(".nl_form_filled").addClass('active');
            $(".nl_form_filled").removeClass('non-active');
        }
        if (hash == "thank_you") {
            $(".custom_form").addClass('non-active');
            $(".custom_form").removeClass('active');
            $(".webinar_registered").addClass('active');
            $(".webinar_registered").removeClass('non-active');
        }
        if (hash == "dynamic-discounting") {
            $(".contact_head_form").addClass('active');
            $(".contact_head_form").removeClass('non-active');
            $('html, body').animate({
            scrollTop: $('.contact_head_form').offset().top - 30}, 'slow');
        }
        if (hash == "benefits") {
         $('html, body').animate({
            scrollTop: $('.supplier_benefits').offset().top - 30}, 'slow');
        }
        if (hash == "step3") {
         $('.all_steps').addClass('non-active');
            $('.tl_dispatch_more').removeClass('non-active');
            $('.arrow-down').addClass('non-active');
            $('.arrow_3').removeClass('non-active');
            $('.tl_icons').removeClass('icon_active');
            $('.tl_dispatch').addClass('icon_active');
            $('.ts_blue_ico').addClass('non-active');
            $('.ts_st_3_b').removeClass('non-active');
            $('.ts_regular_ico').removeClass('non-active');
            $('.ts_st_3').addClass('non-active');
            $('html, body').animate({
                scrollTop: $(".tl_dispatch_more").offset().top - 60
            }, 'slow');
        }
        if (hash == "step5") {
            $('.all_steps').addClass('non-active');
            $('.tl_inv_more').removeClass('non-active');
            $('.arrow-down').addClass('non-active');
            $('.arrow_5').removeClass('non-active');
            $('.tl_icons').removeClass('icon_active');
            $('.tl_invoicing').addClass('icon_active');
            $('.ts_blue_ico').addClass('non-active');
            $('.ts_st_5_b').removeClass('non-active');
            $('.ts_regular_ico').removeClass('non-active');
            $('.ts_st_5').addClass('non-active');
            $('html, body').animate({
                scrollTop: $(".tl_inv_more").offset().top - 60
            }, 'slow');
        }

        if (hash == "pdf-step5") {
            $('.all_steps').addClass('non-active');
            $('.tl_inv_more').removeClass('non-active');
            $('.arrow-down').addClass('non-active');
            $('.arrow_5').removeClass('non-active');
            $('.tl_icons').removeClass('icon_active');
            $('.tl_invoicing').addClass('icon_active');
            $('.ts_blue_ico').addClass('non-active');
            $('.ts_st_5_b').removeClass('non-active');
            $('.ts_regular_ico').removeClass('non-active');
            $('.ts_st_5').addClass('non-active');
            $(document).ready(function($){
                $('html, body').animate({
                    scrollTop: $(".pdf-step5").offset().top - 60
                }, 'slow');
            });
        }


        if (hash == "talk-to-us") {
            $('.m_iframe').removeClass('non-active');
            $('html, body').animate({
                scrollTop: $(".m_iframe").offset().top - 80
            }, 'slow');
        }

        if (hash == "download") {
            $('.godigital_step6').addClass('non-active');
            $('.godigital_step6_after').removeClass('non-active');
            $('.godigital_step6').addClass('active');
            $('html, body').animate({
                scrollTop: $(".godigital_step6_after").offset().top 
            }, 'slow');
        }
    }

    /*var url=window.location.href;
    var url_part = url.split('?');
    var a = url_part[1];
    if (a.indexOf("CNCAh_Grh7oCFfF2cAodsyAAXQ") >= 0){ 
        window.optimizely = window.optimizely || [];
        window.optimizely.push(['trackEvent', 'Adwords']);   
     }*/  

    window.optimizely = window.optimizely || [];
    $(".contact_fronta").click(function (){
        window.optimizely.push(['trackEvent', 'click_main_cta']);
    });
    $(".contact_front").click(function (){
        window.optimizely.push(['trackEvent', 'click_main_cta']);
    });
    $(".contact_frontc").click(function (){
        window.optimizely.push(['trackEvent', 'click_main_cta']);
    });
    $(".contact_me").click(function (){
        window.optimizely.push(['trackEvent', 'click_main_cta']);
    });
    $(".suppliers_start").click(function (){
        window.optimizely.push(['trackEvent', 'click_secondary_cta']);
    });
    $(".suppliers_start_a").click(function (){
        window.optimizely.push(['trackEvent', 'click_secondary_cta']);
    });
    $(".contact_front_dd").click(function (){
        window.optimizely.push(['trackEvent', 'click_video']);
    });
     $(".form_return").click(function (){
        window.optimizely.push(['trackEvent', 'came_back']);
    });

    $(".resource_direct").bind("mousedown", function() {
       // alert('aaaaa');
        window.optimizely.push(['trackEvent', 'resource_download']);
        window.open('http://downloads.tradeshift.com/2013_1021_products_v04.pdf');
    });

    /*if($('.size1of5').length){

        var json = $.getJSON("http://api-docs.tradeshift.com/api-docs",  
       function(response, status, jqXHR){
               // do stuff
               alert(jqXHR.responseText);
           }
        );
    }*/

    if($('.iframe_resource_form').length)
    {
        $("#mktFrmSubmit").click(function (){
                window.optimizely.push(['trackEvent', 'resource_download']);
        });
    } 
    $('.span_80').click(function () {
        var myClass = $(this).attr("class").split(' ');
        $('html, body').animate({
            scrollTop: $('.'+myClass[2]+'_more').offset().top - 70
        }, 'slow');
    });
    $('.xign_webinar').click(function (e) {
        $('html, body').animate({
            scrollTop: $('.dd_web').offset().top - 70
        }, 'slow');
        e.preventDefault();
    });
    $('.ldn_speak_button').click(function (e) {
        $('html, body').animate({
            scrollTop: $('.ldn_speakers').offset().top - 70
        }, 'slow');
        e.preventDefault();
    });
    $('.ldn_agenda_button').click(function (e) {
        $('html, body').animate({
            scrollTop: $('.ldn_agenda').offset().top - 70
        }, 'slow');
        e.preventDefault();
    });
    $('.ldn_venue_button').click(function (e) {
        $('html, body').animate({
            scrollTop: $('.ldn_venuez').offset().top - 70
        }, 'slow');
        e.preventDefault();
    });
    $('.ldn_last_but').click(function (e) {
        $('html, body').animate({
            scrollTop: $('.adm_info').offset().top - 70
        }, 'slow');
        e.preventDefault();
    });
    $('.xign_rfp').click(function (e) {
        $('html, body').animate({
            scrollTop: $('.rfp_kit_sect').offset().top - 70
        }, 'slow');
        e.preventDefault();
    });
    $('.xign_kit').click(function (e) {
            $(".thank_rfp").addClass('active');
            $(".thank_rfp").removeClass('non-active');
    });
    function getCookie(c_name) {
        var i, x, y, ARRcookies = document.cookie.split(";");
        for (i = 0; i < ARRcookies.length; i++) {
            x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
            y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
            x = x.replace(/^\s+|\s+$/g, "");
            if (x == c_name) {
                return unescape(y);
            }
        }
    }
    /*var filled = getCookie("name");
    if ($('.resources_inner').length) {
        if (filled == 'filled') {
            $('.resource_form').addClass('non-active');
            $('.resource_direct_block').removeClass('non-active');
            $('.resource_direct_block').addClass('active');
        }
    }*/
});