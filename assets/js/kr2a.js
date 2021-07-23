
    const swiper1 = new Swiper('.preview-swiper .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.button-slide-next',
            prevEl: '.button-slide-prev',
        },
        pagination: {
            clickable: true,
            el: ".preview-swiper .swiper-pagination",
        }
        // breakpoints: {
        //     1440: {
        //         slidesPerView: 4,
        //     },
        //     1150: {
        //         slidesPerView: 3,
        //     },
        //     900: {
        //         slidesPerView: 3,
        //     },
        // }
    });

    const swiper2 = new Swiper('.benefits .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.benefits .swiper-button-next',
            prevEl: '.benefits .swiper-button-prev',
        },
        pagination: {
            clickable: true,
            el: ".benefits .swiper-pagination",
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        }
        // breakpoints: {
        //     1440: {
        //         slidesPerView: 4,
        //     },
        //     1150: {
        //         slidesPerView: 3,
        //     },
        //     900: {
        //         slidesPerView: 3,
        //     },
        // }
    });

    const swiper3 = new Swiper('.reviews .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.reviews .swiper-button-next',
            prevEl: '.reviews .swiper-button-prev',
        },
        pagination: {
            clickable: true,
            el: ".reviews .swiper-pagination",
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        }
        // breakpoints: {
        //     1440: {
        //         slidesPerView: 4,
        //     },
        //     1150: {
        //         slidesPerView: 3,
        //     },
        //     900: {
        //         slidesPerView: 3,
        //     },
        // }
    });



    $(".btn-secondary").click(function () {
        $("body").css("overflow", "visible");
        $(".modal-swiper").removeClass("modal-swiper-active");
    });



    $('nav a, .button-up a').click(function () {
        let scroll_el = $(this).attr('href');
        if ($(scroll_el).length !== 0) {
            $('html, body').animate({
                scrollTop: $(scroll_el).offset().top - 100
            }, 500);
        }
    });

    let positions = [],
        currentActive = null,
        links = $('header nav a');

    $("section").each(function () {
        positions.push({
            top: $(this).position().top - 500,
            a: links.filter('[href="#' + $(this).attr('id') + '"]')
        });
    });

    positions = positions.reverse();

    $(window).on('scroll', function () {
        var winTop = $(window).scrollTop();
        for (var i = 0; i < positions.length; i++) {
            if (positions[i].top < winTop) {
                if (currentActive !== i) {
                    currentActive = i;
                    links.filter('.active-nav').removeClass('active-nav');
                    positions[i].a.addClass("active-nav");
                }
                break;
            }
        }
    });


    $('.button-collapse').click(function () {
        if ( $(this).closest('.box-collapse').hasClass("active-collapse") ) {
            $(this).closest('.box-collapse').removeClass("active-collapse");
        } else {
            $('.box-collapse').removeClass("active-collapse");
            $(this).closest('.box-collapse').toggleClass("active-collapse");
        }
    });

    // window.onscroll = function() {
    //     let scrolled = window.pageYOffset || document.documentElement.scrollTop;
    //     if(scrolled > 2){
    //         $("header").addClass('header-scroll');
    //     }
    //     if(2 > scrolled){
    //         $("header").removeClass('header-scroll');
    //     }
    // };

    $('.input-mask__phone').inputmask('+375 (99) 999-99-99');
    $('.input-mask__mail').inputmask({ alias: "email"});

    $('.phone').on('blur', function () {
        var phone = this
        console.log(phone);
        if (phone.value.match(/\+375\s?[\(]{0,1}(25|29|33|44)[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}/)) {
            $(this).addClass("valid");
            $(this).removeClass("invalid");
        } else {
            $(this).addClass("invalid");
            $(this).removeClass("valid");
        }
        if (phone.value === "") {
            $(this).removeClass("valid");
            $(this).removeClass("invalid");
        }
    });

    $('.mail').on('blur', function () {
        var mail = this
        console.log(mail);
        if (mail.value.match(/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/)) {
            $(this).addClass("valid");
            $(this).removeClass("invalid");
        } else {
            $(this).addClass("invalid");
            $(this).removeClass("valid");
        }
        if (mail.value === "") {
            $(this).removeClass("valid");
            $(this).removeClass("invalid");
        }
    });

    $('.name').on('blur', function () {
        var name = this
        console.log(name);
        if (name.value.match(/^[\D]*([-][\D]*)?\s[\D]*\s[\D]*$/)) {
            $(this).addClass("valid");
            $(this).removeClass("invalid");
        } else {
            $(this).addClass("invalid");
            $(this).removeClass("valid");
        }
        if (name.value === "") {
            $(this).removeClass("valid");
            $(this).removeClass("invalid");
        }
    });

    $('.country, .organization').on('blur', function () {
        var country = this
        console.log(country);
        var organization = this
        console.log(organization);
        if (country.value === "") {
            $(this).removeClass("valid");
            $(this).removeClass("invalid");
        } else {
            $(this).addClass("valid");
        }
        if (organization.value === "") {
            $(this).removeClass("valid");
            $(this).removeClass("invalid");
        } else {
            $(this).addClass("valid");
        }
    });


    var thanks = new bootstrap.Modal(document.getElementById('formModalThanks'), {
        keyboard: true
    })

    var load = new bootstrap.Modal(document.getElementById('formModalDownload'), {
        keyboard: true
    })

    // $('.btn-close').click(function () {
    //     thanks.hide()
    //     load.hide()
    // });

    $('.ajax-form button').click(function () {
        thanks.show()
        // $.ajax({
        //     url: './js/action_ajax_form.php',
        //     data: $('.modal').serialize(),
        //     type: 'POST',
        //     success: function (data) {
        //         alert("Данные отправленны")
        //         thanks.show()
        //     },
        //     error: function(data) { // Данные не отправлены
        //         alert("Данные не отправленны")
        //     }
        // });
    });

    $('#formModalBuy button').click(function () {
        load.show()
        // $.ajax({
        //     url: './js/action_ajax_form.php',
        //     data: $('.modal').serialize(),
        //     type: 'POST',
        //     success: function (data) {
        //         alert("Данные отправленны")
        //         load.show()
        //     },
        //     error: function(data) { // Данные не отправлены
        //         alert("Данные не отправленны")
        //     }
        // });
    });