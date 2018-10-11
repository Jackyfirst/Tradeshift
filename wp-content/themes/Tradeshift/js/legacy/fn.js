$(function () {function createCookie(name, value, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        } else var expires = "";
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function eraseCookie(name) {
        createCookie(name, "", -1);
    }

    //AB testing
    if ($('.abtesting.original.reasonbg').length) {
        var whyBox = $('.abtesting.original.reasonbg .whybox');
        var signupBox = $('.abtesting.original.reasonbg .signupbox');
        var signupHeight = signupBox.height();
        var whyHeight = whyBox.height();
        if (signupHeight > whyHeight) {
            whyBox.css('height', signupHeight + 'px');
        } else {
            signupBox.css('height', whyHeight + 'px');
        }
    }

    if ($('.abtesting.sqr').length && $('.ie7').length) { //ie7 dirty fix
        $('.language-chooser, .loginbox, .header.topmosthead').css('position', 'static');
        $('.language-chooser, .loginbox, .header.topmosthead').css('position', 'absolute');
    }


    //onload stuff
    $.timeago.settings.allowFuture = false;
    $('abbr.timeago').timeago();

    //fix input fields with autocompleted stuff in them
    $('input').each(function () {
        if (!$(this).hasClass('login_fake_password_field') && !$(this).hasClass('login_password_field')) {
            if ($(this).val() != $(this).attr('data-default')) {
                $(this).css('color', '#333333');
                $(this).removeClass('untouched');
            }
        }
    });

    //general form handling
    $('.untouched').live('click focus keyup keydown', function () {
        $(this).val('');
        $(this).css('color', '#333333');
        $(this).removeClass('untouched');
    });

    //input reset state on blur
    $('input').blur(function () {
        if (!$(this).hasClass('login_fake_password_field') && !$(this).hasClass('login_password_field')) {
            if (jQuery.trim($(this).val()) == "") {
                $(this).val($(this).attr('data-default'));
                $(this).addClass('untouched');
                $(this).removeAttr('style');
            }
        }
    });

    //language chooser/loginbox
    $('.loginbox a, .language-chooser .active').live('click', function (e) {
        if ($(this).parent().hasClass('open')) {
            $(this).parent().removeClass('open');
            $(this).parent().addClass('r_bottom');
        } else {
            $(this).parent().removeClass('r_bottom');
            $(this).parent().addClass('open');
        }
        e.preventDefault();
    });
    $('.loginbox a').live('click', function () {
        if ($(this).hasClass('forgotpassword')) {
            window.location = 'https://go.tradeshift.com/register/password?execution=e3s1';
        } else {
            var val = $('.login_username_field').val();
            $('.login_username_field').focus().val(val).addClass('untouched').select();
        }

    });

    //app ideas stuff
    if ($('.apps-top-ideas-ajax').length) {
        $.getJSON('/ajax-proxy.php?type=idealist', function (data) {
            var ideas = [];
            var len = data.length;
            for (var i = 0; i < len; i++) {
                var idea = data[i];
                ideas.push('<div class="app-idea"><div class="votes">' + idea.votes + '</div><div class="text"><a class="idea-name external" href="http://ideas.tradeshift.com/' + idea.ideaId + '/idea" target="_blank">' + idea.name + '</a><div class="idea-description">' + idea.description + '</div></div></div>');
            }

            $('<div/>', {
                html: ideas.join('<hr class="apphr" />')
            }).appendTo('.apps-top-ideas-ajax');
        });
    }

    var signup_company_available = true;
    var signup_email_available = true;

    //signup for stuff
    var isEmail = function (email) {
            return (/^[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(email.toLowerCase()));
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
            if ($('.activesignup.horizontal:visible').length) {
                $('.activesignup.horizontal').animate({
                    height: 67
                }, {
                    duration: 100,
                    complete: function () {
                        realShowError(className)
                    }
                });
            } else {
                realShowError(className);
            }
        };

    var calculateTimezone = function () {
            var rightNow = new Date();
            var jan1 = new Date(rightNow.getFullYear(), 0, 1, 0, 0, 0, 0);
            // jan 1st
            var june1 = new Date(rightNow.getFullYear(), 6, 1, 0, 0, 0, 0);
            // june 1st
            var temp = jan1.toGMTString();
            var jan2 = new Date(temp.substring(0, temp.lastIndexOf(' ') - 1));
            temp = june1.toGMTString();
            var june2 = new Date(temp.substring(0, temp.lastIndexOf(' ') - 1));
            var std_time_offset = (jan1 - jan2) / (1000 * 60 * 60);
            var daylight_time_offset = (june1 - june2) / (1000 * 60 * 60);
            var dst;
            if (std_time_offset == daylight_time_offset) {
                dst = '0';
                // daylight savings time is NOT observed
            } else {
                // positive is southern, negative is northern hemisphere
                var hemisphere = std_time_offset - daylight_time_offset;
                if (hemisphere >= 0) std_time_offset = daylight_time_offset;
                dst = '1';
                // daylight savings time is observed
            }
            var t = '';
            switch (std_time_offset) {
            case 0:
                t = 'Etc/GMT';
                break;
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
                t = 'Etc/GMT+' + std_time_offset;
                break;
            case 3.5:
                t = 'Asia/Tehran';
                break;
            case 4.5:
                t = 'Asia/Kabul';
                break;
            case 5.5:
                t = 'Asia/Calcutta';
                break;
            case 5.75:
                t = 'Asia/Katmandu';
                break;
            case 9.5:
                t = 'Australia/Adelaide';
                break;
            case -1:
            case -2:
            case -3:
            case -4:
            case -5:
            case -6:
            case -7:
            case -8:
            case -9:
            case -10:
            case -11:
            case -12:
                t = 'Etc/GMT' + std_time_offset;
                break;
            case -3.5:
                t = 'America/St_Johns';
                break;
            }
            $('.timezone').val(t);
        };

    var syncSignupfield = function (syncFromElem, syncWithClass) {
            if (syncFromElem.hasClass('untouched')) {
                $(syncWithClass).addClass('untouched');
            } else {
                $(syncWithClass).removeClass('untouched');
            }
            $(syncWithClass).val(syncFromElem.val());
        };



    //switch between horiz and main signup forms
    var animating = false;
    var horizshown = false;

    var fixTabindex = function () {
            $('.signup_email_field,.signup_company_field,.signup_country_field,.input-group .button').attr('tabindex', '-1');
            $('.activesignup .signup_email_field').attr('tabindex', 1);
            $('.activesignup .signup_company_field').attr('tabindex', 2);
            $('.activesignup .signup_country_field').attr('tabindex', 3);
            $('.activesignup .button').attr('tabindex', 4);
        };

    var showHorizSignup = function () {
            $('.signupbox.vertical').removeClass('activesignup');
            $('.signupbox.horizontal').addClass('activesignup');
            if (!animating && !horizshown) {
                animating = true;
                $('.signupbox.horizontal').css('opacity', 0).css('height', '40').show().animate({
                    opacity: 1
                }, {
                    duration: 250,
                    complete: function () {
                        fixTabindex();
                        animating = false;
                        horizshown = true;
                    }
                });
            }
        };

    var hideHorizSignup = function () {
            $('.signupbox.vertical').addClass('activesignup');
            $('.signupbox.horizontal').removeClass('activesignup');
            if (!animating && horizshown) {
                animating = true;
                $('.signupbox.horizontal').animate({
                    opacity: 0
                }, {
                    duration: 250,
                    complete: function () {
                        fixTabindex();
                        $('.signupbox.horizontal').hide().css('height', 0);
                        animating = false;
                        horizshown = false;
                    }
                });
            }
        };

    var signupScrollTimeout;
    if (!$('.isMobile:visible').length && !$('.instantpayments').length && !$('.integration').length && !$('.getstarted').length && !$('.webinar').length && !$('.enterprise').length) { //if not on mobile or the integration page
        if ($('.signupbox.vertical').length) {
            $(window).scroll(function () {
                clearTimeout(signupScrollTimeout);
                signupScrollTimeout = setTimeout(function () {
                    if ($(window).scrollTop() > 300) {
                        showHorizSignup();
                    } else {
                        hideHorizSignup();
                    }
                }, 100);
            });
        } else {
            $(window).scroll(function () {
                clearTimeout(signupScrollTimeout);
                signupScrollTimeout = setTimeout(function () {
                    if ($(window).scrollTop() > ($('.topmosthead:visible').offset().top + $('.topmosthead:visible').height())) {
                        showHorizSignup();
                    } else {
                        hideHorizSignup();
                    }
                }, 100);
            });
        }
    }

    $('.activesignup .signup_email_field').live('keyup', function () {
        syncSignupfield($(this), '.signup_email_field');
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
                        }
                    });
                }
            }, 200);
            this.lastValue = this.value;
        }
    });
    $('.activesignup .signup_company_field').live('keyup', function () {
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
    $('.activesignup .signup_country_field').live('change', function () {
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
            if (!signup_email_available) {
                showError('takenemail');
                setError('.activesignup .signup_email_field');
                return false;
            }
            if (!signup_company_available) {
                showError('takencompany');
                setError('.activesignup .signup_company_field');
                return false;
            }

            calculateTimezone();

            _gaq.push(['_trackPageview', '/register']);
            _gaq.push(['gwo._setAccount', 'UA-10953005-10']);
            _gaq.push(['gwo._trackPageview', '/3713395421/goal']);
            if ($('.activesignup').hasClass('horizontal')) {
                _gaq.push(['_trackEvent', 'HorizontalSignUp', window.location.href, $('.activesignup .signup_country_field').val()]);
            }

            _gaq.push(['_trackEvent', 'SignUp', window.location.href, $('.activesignup .signup_country_field').val()]);
            return true;
        };
    $('.signupform').submit(function (e) {
        return processSignup(e)
    });

    //frontpage video stuff
    var frontpagevideoLoaded = false;
    var loadFrontpagevideo = function (e) {
            frontpagevideoLoaded = true;
            var videoUrl;

            var playVideo = function () {
                    $('.videobox').css('border', '0 none');
                    $('.videobox').css('background-image', 'url("http://production-comweb-static.tradeshift.com/tradeshift.com/themes/tradeshift/i/video-loading.png")');
                    var width = $('.videobox').css('width');
                    var height = (parseInt($('.videobox').css('width'), 10) / 940) * 380;
                    $('.videobox').html('<iframe name="frontpagevideo" src="' + videoUrl + '" width="' + width + '" height="' + height + '" frameborder="0" border="0" scrolling="no"></iframe>');
                    _gaq.push(['_trackPageview', '/virtual/frontpageVideo']);
                };
            videoUrl = 'http://demo.tradeshift.com/1827976.ihtml?token=8a2cf01f94340a7dfca559a062854891&photo%5fid=1897932'; //Tradeshift Introduction
            $('.videobox').animate({
                height: '380px'
            }, 100, function () {
                playVideo()
            });
            e.preventDefault();
        };

    $('.frontpagevideo, .frontpagevideolink').click(function (e) {
        loadFrontpagevideo(e)
    });

    //integration page
    if ($('.integration').length) {
        //check for hashtag and load appropriate tab
        var hash = 'web';
        if (window.location.hash) {
            hash = window.location.hash.substring(1);
        }
        if ($('.integrationtab.' + hash).length) {
            $('.integrationtab.' + hash).addClass('active');
            $('.integrationbutton.' + hash).addClass('active');
        }
        //handle clicks
        $('a.integrationlink').click(function () {
            if (!$(this).hasClass('active')) {
                $('.integrationtab').removeClass('active');
                $('.integrationbutton').removeClass('active');
                $(this).children('.integrationbutton').addClass('active');
                var activeTab = $(this).attr('href').substr(1);
                $('.' + activeTab).addClass('active');
                window.location.hash = '#' + activeTab;
            }
            return false;
        });
    }



    //enterprise product page
    if ($('.enterpriseprod').length) {
        var hash = 'branchmanagement';
        if (window.location.hash) {
            hash = window.location.hash.substring(1);
        }
        if ($('.tab.' + hash).length) {
            $('.tab.' + hash).addClass('active');
            $('.tabcontent.' + hash).addClass('active');
        }
        $('a.tablink').click(function () {
            if (!$(this).hasClass('active')) {
                $('.tab').removeClass('active');
                $('.tabcontent').removeClass('active');
                $(this).children('.tab').addClass('active');
                var activeTab = $(this).attr('href').substr(1);
                $('.' + activeTab).addClass('active');
                window.location.hash = '#' + activeTab;
            }
            return false;
        });
    }

    //enterprise technology page
    if ($('.enterprisetech').length) {
        $('.techboxtoggle').live('click', function () {
            $(this).parent().parent().children('div').slideToggle('fast');
        });
    }

    if ($('.pdf-contact').length) {
        var submitEnterpriseContact = function (e, elem) {
                var _data = new Object;
                elem.parent().children('input').each(function (idx, val) {
                    if (!$(val).hasClass('untouched')) {
                        _data[$(val).attr('name')] = $(val).val();
                    }
                });
                var _dataLength = 0;
                if (typeof (_data.name) != 'undefined') {
                    _dataLength++;
                }
                if (typeof (_data.company) != 'undefined') {
                    _dataLength++;
                }
                if (typeof (_data.tel) != 'undefined') {
                    _dataLength++;
                }
                if (typeof (_data.email) != 'undefined') {
                    _dataLength++;
                }
                if (_dataLength < 3) {
                    elem.parent().children('input.untouched').animate({
                        'opacity': 0.2
                    }, 200, function () {
                        $(this).animate({
                            'opacity': 1
                        }, 200, function () {
                            $(this).animate({
                                'opacity': 0.2
                            }, 250, function () {
                                $(this).animate({
                                    'opacity': 1
                                }, 250);
                            });
                        });
                    });
                } else {
                    $.ajax({
                        url: '/enterprise-contact.php',
                        type: 'POST',
                        data: {
                            data: _data
                        },
                        dataType: 'json',
                        success: function (data) {
                            $('.enterprise-contact > h3,.enterprise-contact form').animate({
                                'opacity': 0
                            }, 200, function () {
                                $(this).remove();
                                $('.enterprisecontactthx').show('fast');
                            });
                        }
                    });
                }
                e.preventDefault();
            }
        $('form.enterprisecontact').submit(function (e) {
            submitEnterpriseContact(e, $(this));
        });
        $('.enterprisecontact a').click(function (e) {
            submitEnterpriseContact(e, $(this));
        });
    }

    //infographic blogpost
    if ($('.infographic-embed').length) {
        $('.infographic-embed').click(function (e) {
            $(this).focus();
            $(this).select();
        });
    }


    //instantpayments
    if ($('.instantpayments').length) {
        $("a[rel^='prettyPhoto']").prettyPhoto({
            theme: 'dark_rounded',
            social_tools: '&nbsp;',
            hd: true,
            default_width: 940,
            default_height: 529
        });
        var submitInstantPayment = function (e, elem, type) {
                var _data = new Object;
                elem.parent().children('input').each(function (idx, val) {
                    if (!$(val).hasClass('untouched')) {
                        _data[$(val).attr('name')] = $(val).val();
                    }
                });

                _data.type = type;
                _data.referrer = document.referrer;
                _data.url = location.href;

                var _dataLength = 0;
                if (typeof (_data.lastname) != 'undefined') {
                    _dataLength++;
                }
                if (typeof (_data.company) != 'undefined') {
                    _dataLength++;
                }
                if (typeof (_data.email) != 'undefined') {
                    _dataLength++;
                }
                if (_dataLength < 3) {
                    elem.parent().children('input.untouched').animate({
                        'opacity': 0.2
                    }, 200, function () {
                        $(this).animate({
                            'opacity': 1
                        }, 200, function () {
                            $(this).animate({
                                'opacity': 0.2
                            }, 250, function () {
                                $(this).animate({
                                    'opacity': 1
                                }, 250);
                            });
                        });
                    });
                } else {
                    elem.parent().children('input').attr('disabled', 'disabled');
                    $.ajax({
                        url: '/instantpayments-signup.php',
                        type: 'POST',
                        data: {
                            data: _data
                        },
                        dataType: 'json',
                        success: function (data) {
                            elem.after('<p>Thank you for your interest, we will contact you as soon as the beta begins!</p>');
                            elem.remove();
                        }
                    });
                }
                return false;
            }
        $('.buyer').click(function (e) {
            return submitInstantPayment(e, $(this), 'buyer');
        });
        $('.instantpaymentsbuyer').submit(function (e) {
            return submitInstantPayment(e, $(this), 'buyer');
        });
        $('.supplier').click(function (e) {
            return submitInstantPayment(e, $(this), 'supplier');
        });
        $('.instantpaymentssupplier').submit(function (e) {
            return submitInstantPayment(e, $(this), 'supplier');
        });
    }

    //404
    if ($('.notfound').length) {
        $('.notfoundnyan').css('background-position', '30000px 0');
        if ($('.isMobile:visible').length) {
            $('body').css('min-height', '1000px');
        }
    }

    function validateEmail(email) {
        return email.match(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i);
    }

    var submit_cloudscan = function (e, elem) {
            var _data = new Object;
            elem.find('input').each(function (idx, val) {
                if (!$(val).hasClass('untouched')) {
                    _data[$(val).attr('name')] = $(val).val();
                }
            });
            var _dataLength = 0;
            if ($('input[name=cm-name]').val() != 'Full Name') {
                _dataLength++;
            }
            if ($('input[name=cm-f-qhtith]').val() != 'Company') {
                _dataLength++;
            }
            if ($('input[name=cm-f-qhtitd]').val() != 'Phone') {
                _dataLength++;
            }
            if ($('input[name=cm-gydlri-gydlri]').val() != 'Email') {

                if (!validateEmail($('input[name=cm-gydlri-gydlri]').val())) {
                    $('.instantpayments_email').addClass('untouched');
                } else {
                    _dataLength++;
                }
            }
            //alert($('input[name=cm-gydlri-gydlri]').val());
            if (_dataLength < 4) {
                elem.find('input.untouched').animate({
                    'opacity': 0.2
                }, 200, function () {
                    $(this).animate({
                        'opacity': 1
                    }, 200, function () {
                        $(this).animate({
                            'opacity': 0.2
                        }, 250, function () {
                            $(this).animate({
                                'opacity': 1
                            }, 250);
                        });
                    });
                });
            } else {
                $('form.subForm').submit();
            }

            e.preventDefault();
            //alert(_dataLength);
        }

    $('form.subForm').submit(function (e) {
        submit_cloudscan(e, $(this));

    });

    var trackExperiment = function (experiment) {
            if (experiment) { //if there is an experiment, we can see
                var experimentCookieName = 'e_' + experiment;
                experimentCookie = readCookie(experimentCookieName); //check if there is already a cookie for it
                if (!experimentCookie) { //if not, then save it now
                    //submit experiment info to special tracking page
                    $.post('/__tracking/', {
                        experiment: experiment
                    }, function (data) {
                        if (data === '1') {
                            createCookie(experimentCookieName, (new Date).getTime(), 365); //save it with the current timestamp (probably will use it later for some more weird tracking)
                        }
                    });
                }
            }
        }

    if ($('form.signupform').length) { //do experiment tracking every page with a signup form (and last signup form tracking)
        var $sPage = $('#s_page');
        if ($sPage.length) {
            $sPage.val(window.location.href); //store the current page in s_page
        }
        var experiment = '',
            //store name of experiment
            experimentCookie; //cookie to prevent double logging of the same experiment for the same user
        //always name the experiments like 2012apr_experimentshortname_variantshortname

        var url=window.location.href;
        var url_part = url.split('?');
        if (url_part[0] == 'http://tradeshift.com/us/a/') {
            experiment = '2012july_frontpage_old';
            trackExperiment(experiment);

        }
        if (url_part[0] == 'http://tradeshift.com/d/') {
            experiment = '2012july_frontpage_scroll';
            trackExperiment(experiment);
        } 
        //console.log(experiment);
       // alert( $.cookie("2012july_frontpage_old") );
        /*		//this is how you track new experiments (or multiple at the same time)
		if ( $('.abtesting.sqr').hasClass('some_new_experiment') ) {
			experiment = '2012apr_satan_dead';
		} else {
			experiment = '2012apr_satan_alive';
		}
		trackExperiment(experiment); 
		*/
    }

    var url=window.location.href;
    var url_part = url.split('?');
  /*  if (url_part[0] == 'http://tradeshift.com/us/a/') {
        window.optimizely = window.optimizely || [];
        $(".button").live("mousedown", function() {
        window.optimizely.push(['trackEvent', 'signed_up']);
        });     
    }
*/
    //cloudscan
    if ($('.cloudscan').length) { 
        var hash;
        if (window.location.hash) {
            hash = window.location.hash.substring(1);
        }
        if (hash == "filled") {
            $('.cloudscan_not_filled').addClass('non-active');
            $('.cloudscan_not_filled').removeClass('active');
            $('.cloudscan_filled').addClass('active');
            $('.cloudscan_filled').removeClass('non-active');
            $('html, body').animate({
                scrollTop: 400
            }, 0);
        }
    }


    if ($('.frontB').length) {
        $('h2').text($('.front_img_text.img_1').text());
        $('.sqr').removeClass('foldbg');
        $(".simplemenu").addClass('bottom_small');
        $('.logo').css("position", "fixed");

        var opacitybg = function (progress) { //0...1
                  
                return 0.5 - Math.abs(progress - 0.5);
            };
        //VERTICAL CENTERED
        var size2 = Math.round(($(window).height() - $('.vertical').height()) / 2) - $('.tophead').height();
        var size_small = size2;
        if (size2 < 0) {
            size2 = 20;
        }
        $('.frontB').css("margin-top", size2 + "px");
        var scrollEnd = $(document).height() - $(window).height();
        var header_animating = false;
        $(window).load(function () {
            $('.front_img_flow_el.img_1').css({
                opacity: 1
            });
            $(".dimg_1").animate({
                "margin-top": "0"
            }, 500, "linear");
        });
       /* $(window).resize(function () {
            if($(document).width()>767)
            {
                alert($(window).width());
                //location.reload();
            }
            
        });*/
        window.optimizely = window.optimizely || [];
            $(".button").live("mousedown", function() {
                 window.optimizely.push(['trackEvent', 'signed_up']);
            });
        $(window).bind('touchmove touchstart touchend scroll', function () {
            //stick left part to on scroll
            if ($(window).scrollTop() < 80) {
                $('.signupribbon').removeClass('frontb_signup');
                $(".signupribbon").css({
                    top: "-10px"
                });
            } else {
                $(".signupribbon").css({
                    top: size2 + 45
                });
                $('.signupribbon').addClass('frontb_signup');
            }
            //background
            $(".superbg").css('opacity', opacitybg($(this).scrollTop() / scrollEnd));
            var w_top = $(window).scrollTop();
            var w_bottom = $(window).scrollTop() + $(window).height();
            //$('.lines').remove();
            //indication of elem position
            $('.front_img_flow > img').each(function (i, elem) {
                var rect = $(this).get(0).getBoundingClientRect();
                //IMPORTANT LINES !!!!
                //$('body').append('<div class="lines line-top-'+$(this).attr('class')+'" style="position:absolute;width:100%;top:'+(w_top+rect.top)+'px;left:0;right:0;height:1px;background:red;"></div>');
                //$('body').append('<div class="lines line-bottom-'+$(this).attr('class')+'" style="position:absolute;width:100%;top:'+(w_top+rect.bottom)+'px;left:0;right:0;height:1px;background:green;"></div>');
                if (rect.top < 0 && rect.bottom > 0) {
                    var substr = $(this).attr('class').split('_');
                    var el_num = parseInt(substr[1]);
                    var el_h = ($('.front_img_flow_el.img_' + el_num).height());
                    var progress = rect.bottom / el_h;
                    if (progress < 0.5) {
                        opacity = progress / 1.5 + 0.1
                    } else {
                        opacity = 1
                    }
                    $('.front_img_flow_el.img_' + el_num).css({
                        opacity: opacity
                    });
                } else if ((w_top + rect.bottom) > w_bottom && (w_top + rect.top) < w_bottom) {
                    var substr = $(this).attr('class').split('_');
                    var el_num = parseInt(substr[1]);
                    var el_h = ($('.front_img_flow_el.img_' + el_num).height()) - ($('.front_img_ftext.img_' + el_num).height());;
                    var el_shown = $(window).height() - rect.top;
                    var progress = el_shown / el_h;
                    //console.log('el_shown',el_shown, ' el_h',  el_h , 'progress', progress);
                    if (progress < 0.4) {
                        opacity = 0.1
                    } else if (progress > 0.7) {
                        opacity = 1
                    } else {
                        opacity = progress
                    }
                    $('.front_img_flow_el.img_' + el_num).css({
                        opacity: opacity
                    });

                } else if ((w_top + rect.bottom) < w_bottom && (w_top + rect.top) > w_top) {
                    var substr = $(this).attr('class').split('_');
                    var el_num = parseInt(substr[1]);
                    $('.front_img_flow_el.img_' + el_num).css({
                        opacity: '1'
                    });
                    var heading = ($('.front_img_text.img_' + el_num).html());
                    if (!header_animating && $('h2.front_main').html() !== heading) {
                        header_animating = true;
                        $('h2.front_main').css({
                            opacity: 0
                        }).html(heading).animate({        opacity: 1      
                        }, {        duration: 120,
                            complete: function () {
                                header_animating = false;
                            }      
                        });
                    }
                }
            });
        });
        //scroll click
        $('.front_img_flow').click(function (e) {
            var substr = $(this).attr('class').split('_');
            var el_id = parseInt(substr[3]);
            var position_el = $('.front_img_text.img_' + el_id).offset().top;
            if (el_id == 7) {
                var el_h = 0;
            } else if (el_id == 1) {
                el_h = ($('.front_img_flow_el.img_' + el_id).height()) + position_el + 320;
            } else {
                el_h = ($('.front_img_flow_el.img_' + el_id).height()) + position_el + 180;
            }
            $('html, body').animate({
                scrollTop: el_h
            }, 'slow'); 
            e.preventDefault();
        });
        $('.sqr.break').addClass('non-active');
        $('.footer_menu2').addClass('w_bottom');
        $('.w_bottom').css("padding-top", "25px");

    }

 if ($('.index_enterprise').length) {
///////


 }

     if ($('.frontC').length) {

            
            var scrollEnd = $(document).height() - $(window).height();
            $('.horizontal').addClass('non-active');
            $('.horizontal').css("opacity", "0");
            $('.horizontal').css("display", "none");
            $('.sqr.break').addClass('non-active');
            $('.footer_menu2').addClass('w_bottom'); 
            $('.w_bottom').css("padding-top", "25px");  
            $('h2').text('');
            $('h3.front_main').text('');
            $(window).load(function () {
                $('.superbg').css({ opacity: 0 });
            });
            var w_height=$(window).height()-890;  
            if(w_height>0)
            {
                $('.front_blank').css("height", w_height);  
            }
            $('.signupbox').addClass('frontc_form'); 

            var opacitybg = function (progress) { //0...1      
                return 0.5 - Math.abs(progress - 0.5);
            };
            $(window).bind('touchmove touchstart touchend scroll', function () {
                $(".superbg").css('opacity', opacitybg($(this).scrollTop() / scrollEnd));
                 console.log(opacitybg($(this).scrollTop() / scrollEnd));
             });
           

            $('.signup').click(function(e) {
            $('html,body').animate({scrollTop: $(".signupbox").offset().top},'slow');
               e.preventDefault();
            });
           // alert('aaa');
           window.optimizely = window.optimizely || [];
            $(".button").live("mousedown", function() {
                 window.optimizely.push(['trackEvent', 'signed_up']);
            });



     }   

     function generate() {
       
      }
      setInterval(generate, 1000);

        function nextMsg() {

        var  num=(Math.floor(Math.random() * 10) );
            // change content of message, fade in, wait, fade out and continue with next message
          //  $('#message').html(messages.pop()).fadeIn(500).delay(1000).fadeOut(500, nextMsg);
             $('#resource').html(resources[num]).fadeIn(500).delay(7000).fadeOut(500);
            $('#message').html(messages[num]).fadeIn(500).delay(7000).fadeOut(500, nextMsg);
        
    };
    // list of messages to display

 if ($('.press').length) {
        var messages = [
        '“The service has been described as “viral invoicing” because each new company that receives an electronic payment request through the system can easily sign up as a member of the network.”',
        '“We saw there was potential to stand the existing business model on its head. Let’s make invoicing free for small businesses...”',
        '“How well is Tradeshift doing? Very well to say the least. 95% of all Danish government invoicing goes through their system. Furthermore, in 11 months, they have managed to get some 70 000 small businesses in Denmark on board.”',
        '“One of the most potentially disruptive startups of the last ten years is emerging into the light this week. And I honestly don’t say that lightly.”',
        '“Tradeshift’s e-invoicing solution helps companies manage the process in real time. When a business sends an invoice, it can track that the debtor has received the invoice and communicate with them.”',
        '“But humble though it may sound, in the long run, this Nordic venture could well end up disrupting not just the business software industry but the banking industry as well.”',
        '"Tradeshift’s aim is to put an end to paper-based invoicing and payment chasing. Since it was launched two years ago, more than 150,000 organisations in 190 countries have signed up to it – including the National Health Service in the UK."',
        '"With QuickBooks users being able to use Tradeshift for invoicing, the chances are they will naturally encourage others that they invoice to move over to Tradeshift. This really is a significant leap in potential user count for the company."',
        '“This Nordic venture could well end up disrupting not just the business software industry but the banking industry as well.”',
        '“Christian Lanng is the CEO of Tradeshift, which started life as an e-invoicing company but is rapidly expanding to becoming a data exchange platform. -We are connecting data directly between customers and suppliers.”'
    ];

     var resources = [
        "Financial Times",
        "Wall Street Journal",
        "Arctic Startup",
        "TechCrunch",
        "The Kernel",
        "FastCompany",
        "Financial Times",
        "The Next Web",
        "Fast Company",
        "TechCrunch",
        "WSJ"
    ];

    // initially hide the message
    $('#message').hide();
    $('#resource').hide();

    // start animation
    nextMsg();
 }

    if ($('.index_enterprise_header').length) {
         $('.white_papers_more').live('click', function (e) {
            $(".white_papers_more_gone").addClass('non-active');
            $(".index_enterprise_full_list").slideDown("slow");
             

             e.preventDefault();

         }); 
    $('.white_papers_moreA').live('click', function (e) {
            $(".white_papers_moreA").addClass('non-active');
            $(".wp_full").slideDown("fast");
             e.preventDefault();

         });      
    $('.wp').click(function(e ) {
        //Cancel the link behavior
        e.preventDefault();
        $('#mask').fadeIn(1000);    
        $('#boxes').fadeIn(1000); 
        //Get the window height and width        
        var myClass = $(this).attr("class");
        var  shown= myClass.split(' ');        
       // alert('.'+ shown[0] +'_form');
        var winH =$(window).scrollTop() - $(window).height() + (($(window).height()-($('.'+ shown[0] +'_form').height())));
        $('.'+ shown[0] +'_form').css('top', winH) ;
        $('.'+ shown[0] +'_form').fadeIn(1000);

    });
     
     $(document).ready(function(e ){
        var hash = window.location.hash.substring(1);
        if(hash=='white_papers' || hash=='main_leads' || hash=='rsc'  || hash=='tech') 
        {   

            $("."+hash+"_form_not_filled").addClass('non-active');
            $("."+hash+"_form_not_filled").removeClass('active');
            $("."+hash+"_form_filled").addClass('active');
            $("."+hash+"_form_filled").removeClass('non-active');
            $('#mask, #boxes').fadeIn(2000);   
            var winH =$(window).scrollTop() - $(window).height() + (($(window).height()-($('.'+ hash +'_form').height())));
            if(winH<0)
            {
                winH=-400;
            }
             //var winH =$(window).scrollTop() - $(window).height() + (($(window).height()-600));

            $("."+hash+"_form").css('top', winH) ;
            $("."+hash+"_form").fadeIn(1000);

             
        }
     });  

        $('.white_papers_form .close').click(function (e) {
            e.preventDefault();
            $('#mask, .white_papers_form').hide();
        });    
        $('.onboarding_form .close').click(function (e) {
            e.preventDefault();
            $('#mask, .onboarding_form').hide();
        });
        $('.tech_form .close').click(function (e) {
            e.preventDefault();
            $('#mask, .tech_form').hide();
        });
         $('.rsc_form .close').click(function (e) {
            e.preventDefault();
            $('#mask, .rsc_form').hide();
        }); 
        $('.main_leads_form .close').click(function (e) {
            e.preventDefault();
            $('#mask, .main_leads_form').hide();
        });
       // $('#mask').click(function () {
         //   $(this).hide();
          // $('#boxes').hide();
        //});   
        $('#cor a').click(function(e){
                var integer = $(this).attr('rel');
                $('#myslide .over').animate({left:-960*(parseInt(integer)-1)})  /*----- Width of div mystuff (here 160) ------ */
                var  n_integer=integer;
                if(n_integer==0){
                    n_integer=1;
                }
                $('.ar_left').attr('rel', n_integer-1);
                $('.ar_right').attr('rel', parseInt(n_integer)+1);
                $('#cor a').each(function(){
                $(this).removeClass('act');
                    if($(this).hasClass('cor'+integer)){
                        $(this).addClass('act')}
                    e.preventDefault();
                });
            }); 
         $('#cor1 a').click(function(e){
                var integer = $(this).attr('rel');
                $('#myslide .over').animate({left:-960*(parseInt(integer)-1)})  /*----- Width of div mystuff (here 160) ------ */
                var  n_integer=integer;
                if(n_integer==0){
                    n_integer=1;
                }
                $('.ar_left').attr('rel', n_integer-1);
                $('.ar_right').attr('rel', parseInt(n_integer)+1);
                $('#cor1 a').each(function(){
                $(this).removeClass('act');
                    if($(this).hasClass('cor'+integer)){
                        $(this).addClass('act')}
                    e.preventDefault();
                });
            }); 
         $('#corA1 a').click(function(e){
                var integer = $(this).attr('rel');
                $('#myslideA .overA').animate({left:-960*(parseInt(integer)-1)})  /*----- Width of div mystuff (here 160) ------ */
                var  n_integer=integer;
                if(n_integer==0){
                    n_integer=1;
                }
                $('#corA1 a').each(function(){
                $(this).removeClass('actA');
                    if($(this).hasClass('corA'+integer)){
                        $(this).addClass('actA')}
                    e.preventDefault();
                });
            }); 

        $(function() {
        var timer = setInterval( showDiv, 20000);
            function showDiv() {
                var integer=parseInt(($('.overA').css("left")))/(-960)+2;
                if($('.overA').css("left")=='auto')
                {
                    integer=1;
                }  
                if(integer==6)
                {
                    integer=1;
                }   
                $('#myslideA .overA').animate({left:-960*(parseInt(integer)-1)}) 
                
                $('#corA1 a').removeClass('actA');
                $('.corA'+integer).addClass('actA');
       
            }
            
        });


         $('#cor_c a').click(function(e){
                var integer = $(this).attr('rel');
                $('#myslide_c .over_c').animate({left:-960*(parseInt(integer)-1)})  /*----- Width of div mystuff (here 160) ------ */
                $('#cor_c a').each(function(){
                $(this).removeClass('act_c');
                    if($(this).hasClass('cor_c'+integer)){
                        $(this).addClass('act_c')}
                    e.preventDefault();
                });
            }); 

         $('.rocket').click(function(e){
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            e.preventDefault();
        }); 
         $('.ar_left').click(function(e){
                var integer = $(this).attr('rel'); 
                if(integer==0){
                    integer=5;
                }
                $('#myslide .over').animate({left:-960*(parseInt(integer)-1)});  /*----- Width of div mystuff (here 160) ------ */
                var new_rel=parseInt(integer)-1;
                 $(this).attr('rel', new_rel);
               $('#cor a').each(function(){
                    $('#cor a').removeClass('act');
                    $('.cor'+integer).addClass('act');
                });
                $('.ar_right').attr('rel', parseInt(integer)+1);
                e.preventDefault();
            }); 


         $('.ar_right').click(function(e){
                var integer = $(this).attr('rel'); 
                if(integer==6){
                    integer=1;
                }
                $('#myslide .over').animate({left:-960*(parseInt(integer)-1)});  /*----- Width of div mystuff (here 160) ------ */
                var new_rel=parseInt(integer)+1;
                 $(this).attr('rel', new_rel);
                 $('#cor a').each(function(){
                    $('#cor a').removeClass('act');
                    $('.cor'+integer).addClass('act');
                });
                $('.ar_left').attr('rel', parseInt(integer)-1);
                e.preventDefault();
            }); 
            

       $(function() {
        var timer = setInterval( showDiv, 3000);
            function showDiv() {
                var integer=parseInt(($('.over_c').css("left")))/(-960)+2;
                if($('.over_c').css("left")=='auto')
                {
                    integer=1;
                }  
                if(integer==4)
                {
                    integer=1;
                }   
                $('#myslide_c .over_c').animate({left:-960*(parseInt(integer)-1)}) 
                
                $('#cor_c a').removeClass('act_c');
                $('.cor_c'+integer).addClass('act_c');
       
            }
            $('.mystuff_c_img').hover(function(ev){
                clearInterval(timer);
            }, function(ev){
                timer = setInterval( showDiv, 3000);
            });
            
        });

        setInterval(function() {
            var integer=parseInt(($('.over_h').css("left")))/(-960)+2;
                if($('.over_h').css("left")=='auto')
                {
                    integer=1;
                }  
                if(integer==4)
                {
                    integer=1;
                }   
                $('#myslide_h .over_h').animate({left:-960*(parseInt(integer)-1)}) 
        }, 10000);




        if (window.location.hash) {
            hash = window.location.hash.substring(1); 
            if(hash=="nl_filled")
            {
                $(".nl_form").addClass('non-active');
                $(".nl_form").removeClass('active');
                $(".nl_form_filled").addClass('active');
                $(".nl_form_filled").removeClass('non-active');
            }   
        }
            
    } 
     $('.rocket').click(function(e){
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                e.preventDefault();
    });

    if ($('.ariba').length) {
        $('.mktFormText').css('color', '#b2b2b2');
        $(".abtesting").addClass('ariba_bg_repeat');
        $('.mktFormText').live('click focus', function () {
        $(this).val('');
        $(this).css('color', '#333333');
        $(this).removeClass('untouched');
    });
    } 

    
function generate2() {
       
      }
      setInterval(generate2, 1000);

        function nextMsg2() {

        var  num=(Math.floor(Math.random() * 6) );
            // change content of message, fade in, wait, fade out and continue with next message
          //  $('#message').html(messages.pop()).fadeIn(500).delay(1000).fadeOut(500, nextMsg);
            $('#message2').html(messages2[num]).fadeIn(500).delay(8000).fadeOut(500, nextMsg2);   
    };
    // list of messages to display

         if ($('.small_biz_tweet').length) {
                var messages2 = [
                '@tradeshift is a brilliant service..! simple online invoicing and everything just works! life-saver for #startups -> http://tradeshift.com/ <br/>@WareNinja <a href="https://twitter.com/WareNinja/statuses/265104432583303168" target="_blank">>></a>',
                'Just found the world\'s best invoicing app: killer interface, open-source, cloud-based, green and FREE.<br/> *Elizabeth swoons @tradeshift<br/>@ellisabethe  <a href="https://twitter.com/ellisabethe/status/213107024341377024" target="_blank">>></a>',
                'I f****** love Tradeshift free online invoicing program.<br/> It\'s awesome. If they wanted me to be on an advert telling<br/> people how much I loved it i\'d say yes. if you haven\'t got it get it.<br/> It rocks. In the geekiest way possible.<a href="https://www.facebook.com/Tradeshift/posts/453077311401289" target="_blank">>></a>',
                '@tradeshift just started using your service more seriously, this is really a nice experience. <br/>Awesome product!<br/>@kimrhh  <a href="https://twitter.com/kimrhh/status/268474431226118146" target="_blank">>></a>',
                'Started using @Tradeshift!<br/> It\'s really easy and sweet:) <br/><br/>@signedamj  <a href="https://twitter.com/signedamj/status/248022334068387841" target="_blank">>></a>',
                'If you\'re an #sapro and you\'re not using @tradeshift, you\'re missing out…BIG TIME. Free, easy, and superb customer service. #satech #sachat<br/>@mcbrinton  <a href="https://twitter.com/mcbrinton/status/233190549513973761" target="_blank">>></a>'
            ];

            // initially hide the message
            $('#message2').hide();

            // start animation
            nextMsg2();
         }

    //if ($('.index_enterprise_header').length)  {
      //  window.optimizely = window.optimizely || [];
      //  $("#mktForm_26 #mktFrmSubmit").live("mousedown", function() {
     //   window.optimizely.push(['trackEvent', 'Main lead form Submit']);
     //   });  
     //   $("#mktForm_27 #mktFrmSubmit").live("mousedown", function() {
    //    window.optimizely.push(['trackEvent', 'White papers form Submit']);
    //    }); 
    //    $("#mktForm_28 #mktFrmSubmit").live("mousedown", function() {
     //   window.optimizely.push(['trackEvent', 'White papers form Submit']);
     //   }); 
     //   $("#mktForm_30 #mktFrmSubmit").live("mousedown", function() {
    //    window.optimizely.push(['trackEvent', 'White papers form Submit']);
   //     });    
    //}
     

     if ($('.index_intuit').length)  {

    if(($(document).height()-170 )> 605)
    {
        $(".index_intuit_header").css('height', $(document).height()-170); 
    }
      
       $('.intuit_enterprise_menu').click(function (e) {
            $(".index_intuit_header").css('height', 605);
            e.preventDefault();
           $('.intuit_enterprise').addClass("active");
            $('.intuit_enterprise').removeClass("non-active");
             $('.intuit_sme').addClass("non-active");
            $('.intuit_sme').removeClass("active");
            $('html, body').animate({
                scrollTop: 570
            }, 1000);
  
        });  
        $('.intuit_sme_menu').click(function (e) {
            e.preventDefault();
            $(".index_intuit_header").css('height', 605);
            $('.intuit_sme').addClass("active");
            $('.intuit_sme').removeClass("non-active");
            $('.intuit_enterprise').addClass("non-active");
            $('.intuit_enterprise').removeClass("active");
            $('html, body').animate({
                scrollTop: 570
            }, 1000);
  
        }); 

        if (window.location.hash) {
            hash = window.location.hash.substring(1); 
            if(hash=="nl_filled" || hash=="main_leads")
            {
                $('.intuit_enterprise').addClass("active");
                $('.intuit_enterprise').removeClass("non-active");
                $('.intuit_sme').addClass("non-active");
                $('.intuit_sme').removeClass("active");

                if(hash=="nl_filled" )
                {
                    $('html, body').animate({
                    scrollTop: 3100
                    }, 1000);
                    $(".nl_form").addClass('non-active');
                    $(".nl_form").removeClass('active');
                    $(".nl_form_filled").addClass('active');
                    $(".nl_form_filled").removeClass('non-active');
                }
                if(hash=="main_leads" )
                {
                     $('html, body').animate({
                    scrollTop: 570
                    }, 1000);
                    $(".intuit_main_leads_form_filled").removeClass('non-active');
                    $(".intuit_main_leads_form_filled").addClass('active');
                    $(".enterprise_ml_form_not_filled").removeClass('active');
                    $(".enterprise_ml_form_not_filled").addClass('non-active');
                }
                
            }   
            if(hash=="sme"){
                $('.intuit_sme').addClass("active");
                $('.intuit_sme').removeClass("non-active");
                $('.intuit_enterprise').addClass("non-active");
                $('.intuit_enterprise').removeClass("active");
                $('html, body').animate({
                    scrollTop: 650
                }, 1000);
            }
            if(hash=="enterprise"){
                $('.intuit_enterprise').addClass("active");
                $('.intuit_enterprise').removeClass("non-active");
                 $('.intuit_sme').addClass("non-active");
                $('.intuit_sme').removeClass("active");
                $('html, body').animate({
                    scrollTop: 650
                }, 1000);
            }
            if(hash=="billentis"){
                $('.intuit_enterprise').addClass("active");
                $('.intuit_enterprise').removeClass("non-active");
                 $('.intuit_sme').addClass("non-active");
                $('.intuit_sme').removeClass("active");
                $('html, body').animate({
                    scrollTop: 2480
                }, 1000);
            }
            if(hash=="collateral"){
                $('.intuit_enterprise').addClass("active");
                $('.intuit_enterprise').removeClass("non-active");
                 $('.intuit_sme').addClass("non-active");
                $('.intuit_sme').removeClass("active");
                $('html, body').animate({
                    scrollTop: 2880
                }, 1000);
            }
        }
        $('.white_papers_more').live('click', function (e) {
            $(".white_papers_more").addClass('non-active');
            $(".wp_full").removeClass('non-active');
            $(".wp_full").addClass('active'); 
             e.preventDefault();
              $(".intuit_enterprise_wp").css('height', '1480px') ;
              $(".intuit_enterprise_wp").css('margin-bottom', '100px') ;
         });  

        $('.wp').click(function(e ) 
        {
            e.preventDefault();
            $('#mask').fadeIn(1000);    
            $('#boxes').fadeIn(1000);   
            var myClass = $(this).attr("class");
            var  shown= myClass.split(' ');     
            var winH =$(window).scrollTop() + ($(window).height()/2 - $('.'+ shown[0] +'_form').height()/2);
            $('.'+ shown[0] +'_form').css('top', winH+'px') ;
            $('.'+ shown[0] +'_form').fadeIn(1000);
            $('.'+ shown[0] +'_form').css('display', 'block !IMPORTANT');
  
        });

             $(document).ready(function(e ){
        var hash = window.location.hash.substring(1);
        if(hash=='white_papers'  || hash=='rsc'  || hash=='tech') 
        {   
            $("."+hash+"_form_not_filled").addClass('non-active');
            $("."+hash+"_form_not_filled").removeClass('active');
            $("."+hash+"_form_filled").addClass('active');
            $("."+hash+"_form_filled").removeClass('non-active');
            $('#mask, #boxes').fadeIn(2000);   
            var winH =$(window).scrollTop() - $(window).height() + (($(window).height()-($('.'+ hash +'_form').height())));
            if(winH<0)
            {
                winH=-400;
            }
            $("."+hash+"_form").css('top', winH) ;
            $("."+hash+"_form").fadeIn(1000);  
        }
     });  

        $('.white_papers_form .close').click(function (e) {
            e.preventDefault();
            $('#mask, .white_papers_form').hide();
            $('.white_papers_forma, .tech_forma, .rsc_forma, .platform_forma').hide();
        });    
        $('.tech_form .close').click(function (e) {
            e.preventDefault();
            $('#mask, .tech_form').hide();
        });
         $('.rsc_form .close').click(function (e) {
            e.preventDefault();
            $('#mask, .rsc_form').hide();
        });
        $('.platform_form .close').click(function (e) {
            e.preventDefault();
            $('#mask, .platform_form').hide();
        });
        $('.report_form .close').click(function (e) {
            e.preventDefault();
            $('#mask, .report_form').hide();
        });

    

         $(function() {
            var timer = setInterval( showDiv, 3000);
            function showDiv() {
                var integer=parseInt(($('.over_c').css("left")))/(-960)+2;
                if($('.over_c').css("left")=='auto')
                {
                    integer=1;
                }  
                if(integer==4)
                {
                    integer=1;
                }   
                $('#myslide_c .over_c').animate({left:-960*(parseInt(integer)-1)}) 
                
                $('#cor_c a').removeClass('act_c');
                $('.cor_c'+integer).addClass('act_c');
       
            }
            $('.mystuff_c_img').hover(function(ev){
                clearInterval(timer);
            }, function(ev){
                timer = setInterval( showDiv, 3000);
            });
            
        });
        $('#cor_c a').click(function(e){
                var integer = $(this).attr('rel');
                $('#myslide_c .over_c').animate({left:-960*(parseInt(integer)-1)})  /*----- Width of div mystuff (here 160) ------ */
                $('#cor_c a').each(function(){
                $(this).removeClass('act_c');
                    if($(this).hasClass('cor_c'+integer)){
                        $(this).addClass('act_c')}
                    e.preventDefault();
                });
            }); 

        function generate3() {
       
          }
          setInterval(generate3, 1000);

            var num=0;
            function nextMsg3() {

            if(num==10)
            {  num=0; }            
              // change content of message, fade in, wait, fade out and continue with next message
              //  $('#message').html(messages.pop()).fadeIn(500).delay(1000).fadeOut(500, nextMsg);
                $('#message3').html(messages3[num]).fadeIn(500).delay(9000).fadeOut(500, nextMsg3);   
                num++;
        };

        //list of messages to display
             if ($('.intuit_sme_quotes').length) {
                    var messages3 = [
                    '@tradeshift is a brilliant service..! simple online invoicing and everything just works! life-saver for #startups -> http://tradeshift.com/ <br/><br/>@WareNinja ',
                    'Just found the world\'s best invoicing app: killer interface, open-source, cloud-based, green and FREE.<br/> *Elizabeth swoons @tradeshift<br/><br/>@ellisabethe  ',
                    'I f****** love Tradeshift free online invoicing program.<br/> It\'s awesome. If they wanted me to be on an advert telling<br/> people how much I loved it i\'d say yes. if you haven\'t got it get it.<br/> It rocks. In the geekiest way possible.<br/><br/>Felicity Hoy, Felicity Hoy Illustrations',
                    '@tradeshift just started using your service more seriously, this is really a nice experience. <br/>Awesome product!<br/><br/>@kimrhh  ',
                    'Started using @Tradeshift!<br/> It\'s really easy and sweet:) <br/><br/>@signedamj',
                    '@tradeshift Awesome - Love the product AND your customer service, those who don’t use it don’t know what they are missing out on ;-) <br/><br/>@friesport',
                    'Just discovered Tradeshift. What great way to create free online invoices now that I\'m freelancing. <br/><br/>Elena Ho, Freelancer',
                    'I\'m becoming a Tradeshift bore - I genuinely can\'t stop recommending it to people. As a small consultancy I have little spare time and invoicing has always been a chore. Not anymore. I can create and email an invoice in a couple of minutes - without having to go anywhere near a printer, a pdf or Outlook. I reckon I have reduced the time spend on invoicing by about 80 percent. <br/><br/>Chris Gent, Slingshot Communications',
                    'With Tradeshift, I can focus more on the fun parts of my job – being creative, and less on the boring paperwork. I have all my contacts, my descriptions are automatically saved and remembered, and it takes no time to set up and send an invoice – and when it\'s due, I\'m notified. <br/><br/>Lars Kloster Silkjær, Silkjær.dk',
                    'If you\'re an #sapro and you\'re not using @tradeshift, you\'re missing out…BIG TIME. Free, easy, and superb customer service. #satech #sachat<br/><br/>@mcbrinton '
                ];

                // initially hide the message
                $('#message3').hide();

                // start animation
                nextMsg3();
             }

        jQuery('.top_scroll a').click(function(){
        jQuery(this).stop().animate({opacity: '0'}, 200 ,function(){
                jQuery('html, body').animate({scrollTop: '0'} ,600,function(){
                    jQuery('.top_scroll a').stop().animate({opacity: '1'});                 
                });
            });
        return false;
        }); 
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 500) {
                jQuery('a[href=#top]').fadeIn();
            } else {
                jQuery('a[href=#top]').fadeOut();
            }
        });

        window.optimizely = window.optimizely || [];
        $(".intuit_enterprise_link").live("mousedown", function() {
             window.optimizely.push(['trackEvent', 'ENT']);

        });


        jQuery('.main_leads_submit').click(function(){
                 var _dataLength = 0;
                 $('.enterprise_ml_form_not_filled .untouched').addClass('alert');
                  $('.main_leads_submit').addClass('alerted');
        });

        jQuery('.wp_submit').click(function(){
                 var _dataLength = 0;
                 $('.white_papers_form_not_filled .untouched').addClass('alert');
                 $('.platform_form_not_filled .untouched').addClass('alert');
                 $('.report_form_not_filled .untouched').addClass('alert');
        });     
     }
     function getCookie(c_name)
    {
        var i,x,y,ARRcookies=document.cookie.split(";");
        for (i=0;i<ARRcookies.length;i++)
          {
          x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
          y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
          x=x.replace(/^\s+|\s+$/g,"");
          if (x==c_name)
            {
            return unescape(y);
            }
          }
     }
function validateEmail(email) {
       var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       if( !emailReg.test( email ) ) {
           return false;
       } else {
          return true;
       }
   }

    if ($('.nhs_form_not_filled').length)  {
        $("a[rel^='prettyPhoto']").prettyPhoto({
            theme: 'dark_rounded',
            social_tools: '&nbsp;',
            hd: true,
            default_width: 940,
            default_height: 529
        });

         var filled=getCookie("name");
            $('#download_info a').click(function (e) {
                 e.preventDefault();
            if(filled!='filleda'){
                $("#download_pack_form").slideDown("slow");
                $('html, body').animate({scrollTop:$('#download_pack_form').offset().top -50}, 'slow');
            }else{
                window.location = "http://tradeshift.com";
            } 
        }); 
          $('#wp_download a').click(function (e) {
             e.preventDefault();
            if(filled!='filleda'){
               $("#download_pack_form2").slideDown("slow");
               $('html, body').animate({scrollTop:$('#download_pack_form2').offset().top -50}, 'slow');
            }else{
                window.location = "http://tradeshift.com";
            }
        }); 
        $('.arrow').click(function (e) {
            e.preventDefault();
            if($(".menu").hasClass('non-active'))
            {
                 $(".menu").removeClass("non-active");
             }else
             {
                 $(".menu").addClass("non-active");
             }
           
        }); 
        $('.main_leads_submit').click(function(){
                 $('.nhs_form_not_filled .mktFormText').removeClass('alert');
                 $('.nhs_form_not_filled .untouched').addClass('alert');
                  if(!validateEmail($('.contactme_form_not_filled #Email').val()))
                 {
                    $('.nhs_form_not_filled #Email').addClass('alert');
                 }
        });
        $('.contactme_leads_submit').click(function(){
                 $('.contactme_form_not_filled .mktFormText').removeClass('alert');
                 $('.contactme_form_not_filled .untouched').addClass('alert');
                 if(!validateEmail($('.contactme_form_not_filled #Email').val()))
                 {
                    $('.contactme_form_not_filled #Email').addClass('alert');
                 }
        });
          $(".tsnhs").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#main_sect').offset().top-50}, 'slow');
               e.preventDefault();

          });
          $(".pack").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#download_info').offset().top-60}, 'slow');
             e.preventDefault();
          });
          $(".video").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#nhs_video').offset().top-30}, 'slow');
             e.preventDefault();
          });
          $(".report").click(function (e){ 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#wp_download').offset().top -70}, 'slow');
             e.preventDefault();
          });
           $(".contact").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#contact_me').offset().top-60}, 'slow');
             e.preventDefault();
          });
           $(".ts_logo").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('.head_img').offset().top -60}, 'slow');
             e.preventDefault();
          });
           if (window.location.hash) {
            hash = window.location.hash.substring(1);
            }
            if (hash == "filled") {
                $('.contactme_form_not_filled').addClass('non-active');
                $('.contactme_form_not_filled').removeClass('active');
                $('.contactme_form_filled').addClass('active');
                $('.contactme_form_filled').removeClass('non-active');
                $('html, body').animate({
                    scrollTop: 2650
                }, 0);
            }
       $('.colleague').click(function(e ) 
        {
            e.preventDefault();
            $('#mask').fadeIn(1000);    
            $('#boxes').fadeIn(1000);   
            var myClass = $(this).attr("class");
            var  shown= myClass.split(' ');     
            var winH =$(window).scrollTop() + ($(window).height()/2 - $('.form_holder').height()/2);
            $('.form_holder').css('top', winH+'px');
            $('.form_holder').fadeIn(1000);
            $('.form_holder').css('display', 'block');
            $('.forward_notfilled').css('display', 'block');
  
        });
        $('.form_holder .close').click(function (e) {
            e.preventDefault();
            $('#mask, .forward_notfilled, .form_holder').hide();
        });





    function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
    };    
    var submit_invite_colleague = function(e,elem) { 
    var _data = new Object;
    elem.find('input').each(function(idx,val){
        if ( !$(val).hasClass('untouched') ) {
            _data[$(val).attr('name')] = $(val).val();
            }
        });
        var _dataLength = 0;
        _data.comment=$('.colleaguemsg_textarea').val();
        if ( typeof( _data.m_name ) != 'undefined' ) {
                _dataLength++;
        }
        if ( typeof( _data.c_name ) != 'undefined' ) {
                _dataLength++;
        }
        if ( typeof( _data.mail ) != 'undefined' ) { 
            if(isValidEmailAddress( _data.mail)){ 
                _dataLength++;
             }else
             {
                $('.mail').addClass('untouched');
             }
        }
        if ( _dataLength < 2) {
                elem.find('input.untouched').animate({'opacity':0.2},200,function(){
                    $(this).animate({'opacity':1},200,function(){
                        $(this).animate({'opacity':0.2},250,function(){
                            $(this).animate({'opacity':1},250);
                        });
                    });
                });
        } else {
                $.ajax({
                    url:'/nhs-invite.php',
                    type: 'POST',
                    data: {data:_data},
                    dataType: 'json',
                    success: function(data){
                        $('.invite_colleague_form').addClass('non-active');
                        $('.invite_colleague_form').removeClass('active');
                        $('.invite_colleague_invited').addClass('active');
                        $('.invite_colleague_invited').removeClass('non-active')
                        }
                });
            }
            e.preventDefault();
        }
        $('form.invite_colleague_form').submit(function(e){
            submit_invite_colleague(e,$(this));
        }); 
     }
 
    if ($('.shift_forward').length) {
            $(".main").click(function (e) { 
            $(".menu").addClass("non-active");
            $('html, body').animate({scrollTop:$('#shift_main').offset().top -52}, 'slow');
               e.preventDefault();
          });
          $(".pack").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#whitepapers').offset().top -52}, 'slow');
             e.preventDefault();
          });
          $(".bil").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#belintis').offset().top -52}, 'slow');
             e.preventDefault();
          });
        $(".reg").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#ss_web').offset().top -52}, 'slow');
             e.preventDefault();
          });
          $(".videoj").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#intuit_video').offset().top -52}, 'slow');
             e.preventDefault();
          });
          
          $(".report").click(function (e){ 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#webinar_info').offset().top -52}, 'slow');
             e.preventDefault();
          });
           $(".ts_logo").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#page_header').offset().top -32 }, 'slow');
             e.preventDefault();
          });
        $('.arrow').click(function (e) {
            
            e.preventDefault();
            if($(".menu").hasClass('non-active'))
            {
                 $(".menu").removeClass("non-active");
             }else
             {
                 $(".menu").addClass("non-active");
             }
           
        }); 
          $('.contact_me').click(function(){
                 $('#contact .mktFormText').removeClass('alert');
                 $('#contact .untouched').addClass('alert');
                 if(!validateEmail($('#contact #Email').val()))
                 {
                    $('#contact #Email').addClass('alert');
                 }
         }); 
        $('.main_leads_submit').click(function(){
                 $('#wp_form .mktFormText').removeClass('alert');
                 $('#wp_form .untouched').addClass('alert');
        });    
         $('.unknown_leads_submit').click(function(){
                 $('.main_unknown_form .mktFormText').removeClass('alert');
                 $('.main_unknown_form .untouched').addClass('alert');
        });   

         $(".wp_forma_sa").click(function (e) { 

               $("#wp_form").slideDown("slow");
                $('html, body').animate({scrollTop:$('#wp_form').offset().top -30}, 'slow');
               e.preventDefault();
          }); 
         $(".contact").click(function (e) { 
               $(".shift_form_contact").slideDown("slow");
               $('html, body').animate({scrollTop:$('.shift_form_contact').offset().top -170}, 'slow');
               $(".aditional_header").addClass('non-active');

               e.preventDefault();
          }); 
        if (window.location.hash) {
            hash = window.location.hash.substring(1);
        } 
        if (hash == "filled" || hash == "unknown_filled" ) {
            $(".aditional_header").addClass('non-active');
            $(".shift_form_contact_filled").slideDown("slow");     
        } 

        $('.colleague').click(function(e ) 
        {
            e.preventDefault();
            $('#mask').fadeIn(1000);    
            $('#boxes').fadeIn(1000);   
            var myClass = $(this).attr("class");
            var  shown= myClass.split(' ');     
            var winH =$(window).scrollTop() + ($(window).height()/2 - $('.form_holder').height()/2);
            $('.form_holder').css('top', winH+'px');
            $('.form_holder').fadeIn(1000);
            $('.form_holder').css('display', 'block');
            $('.forward_notfilled').css('display', 'block');
  
        });
        $('.form_holder .close').click(function (e) {
            e.preventDefault();
            $('#mask, .forward_notfilled, .form_holder').hide();
        });
        function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
        };    
        var submit_invite_colleague = function(e,elem) { 
        var _data = new Object;
        elem.find('input').each(function(idx,val){
        if ( !$(val).hasClass('untouched') ) {
            _data[$(val).attr('name')] = $(val).val();
            }
        });
        var _dataLength = 0;
        _data.comment=$('.colleaguemsg_textarea').val();
        if ( typeof( _data.m_name ) != 'undefined' ) {
                _dataLength++;
        }
        if ( typeof( _data.c_name ) != 'undefined' ) {
                _dataLength++;
        }
        if ( typeof( _data.mail ) != 'undefined' ) { 
            if(isValidEmailAddress( _data.mail)){ 
                _dataLength++;
             }else
             {
                $('.mail').addClass('untouched');
             }
        }
        if ( _dataLength < 2) {
                elem.find('input.untouched').animate({'opacity':0.2},200,function(){
                    $(this).animate({'opacity':1},200,function(){
                        $(this).animate({'opacity':0.2},250,function(){
                            $(this).animate({'opacity':1},250);
                        });
                    });
                });
        } else {
                $.ajax({
                    url:'/shift-finance-invite.php',
                    type: 'POST',
                    data: {data:_data},
                    dataType: 'json',
                    success: function(data){
                        $('.invite_colleague_form').addClass('non-active');
                        $('.invite_colleague_form').removeClass('active');
                        $('.invite_colleague_invited').addClass('active');
                        $('.invite_colleague_invited').removeClass('non-active')
                        }
                });
            }
            e.preventDefault();
        }
        $('form.invite_colleague_form').submit(function(e){
            submit_invite_colleague(e,$(this));
        });  
    }

    if ($('.tradeshift_change').length) {
         $(window).scroll(function () {
            if($(window).scrollTop() > 100){
                $('nav').addClass('nav_shadow');
                 // $("#div").fadeIn("slow");
              } 
              if($(window).scrollTop() < 100){
                $('nav').removeClass('nav_shadow');
                 // $("#div").fadeIn("slow");
              } 
         });

          $('.arrow').click(function (e) {
            e.preventDefault();
            if($(".menu").hasClass('non-active'))
            {
                 $(".menu").removeClass("non-active");
             }else
             {
                 $(".menu").addClass("non-active");
             }
           
        }); 
         $('.pp1').click(function (e) {
            e.preventDefault();
             $(".mini").animate({
                "margin-top": "-360px"
            }, 500, "linear");
        }); 
        $('.pp2').click(function (e) {
            e.preventDefault();
             $(".mini").animate({
                "margin-top": "-720px"
            }, 500, "linear");
        }); 
        $('.pp3').click(function (e) {
            e.preventDefault();
             $(".mini").animate({
                "margin-top": "-1080px"
            }, 500, "linear");
        }); 
        $(".design").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#new_design').offset().top-70}, 'slow');
             e.preventDefault();
          });
          $(".mobile").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#responsive').offset().top-70}, 'slow');
             e.preventDefault();
          });
          $(".workflow").click(function (e){ 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#workflow').offset().top -70}, 'slow');
             e.preventDefault();
          });
           $(".profile").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#public_profile').offset().top-70}, 'slow');
             e.preventDefault();
          });
            $(".next").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('#check').offset().top-60}, 'slow');
             e.preventDefault();
          });
           $(".ts_logo").click(function (e) { 
             $(".menu").addClass("non-active");
             $('html, body').animate({scrollTop:$('.tradeshift_change').offset().top -30}, 'slow');
             e.preventDefault();
          });  

          var hash;
            if (window.location.hash) {
                hash = window.location.hash.substring(1);
            }
            if (hash == "filled") {
                $('.download_form' ).removeClass('active');
                $('.download_form' ).addClass('non-active');
                $('.china_filled').addClass('active');
                 $('.china_filled' ).removeClass('non-active');
                $('html, body').animate({scrollTop:$('.tradeshift_change').offset().top +1630}, 'slow');
            } 
    }


    //ie noflicker
    try {
        document.execCommand("BackgroundImageCache", false, true);
    } catch (err) {}

    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded',
        hd: true,
        social_tools: '&nbsp;',
        default_width: 940,
        default_height: 529
    });
});