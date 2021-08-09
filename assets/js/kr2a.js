const swiper1 = new Swiper('.preview-swiper .swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
        delay: 7000,
        disableOnInteraction: false,
    },
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
    spaceBetween: 0,
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

// let positions = [],
//     currentActive = null,
//     links = $('header nav a');
//
// $("section").each(function () {
//     positions.push({
//         top: $(this).position().top - 500,
//         a: links.filter('[href="#' + $(this).attr('id') + '"]')
//     });
// });
//
// positions = positions.reverse();
//
// $(window).on('scroll', function () {
//     var winTop = $(window).scrollTop();
//     for (var i = 0; i < positions.length; i++) {
//         if (positions[i].top < winTop) {
//             if (currentActive !== i) {
//                 currentActive = i;
//                 links.filter('.active-nav').removeClass('active-nav');
//                 positions[i].a.addClass("active-nav");
//             }
//             break;
//         }
//     }
// });


$('.button-collapse').click(function () {
    if ($(this).closest('.box-collapse').hasClass("active-collapse")) {
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

// $('.input-mask__phone').inputmask('+375 (99) 999-99-99');
$('.input-mask__mail').inputmask({alias: "email"});

$('.phone').on('blur', function () {
    var phone = this
    console.log(phone);
    // if (phone.value.match(/\+375\s?[\(]{0,1}(25|29|33|44)[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}/)) {
    if (phone.value.match(/\+?[0-9]{4,}/)) {
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
    // if (name.value.match(/^[\D]+([-][\D]+)?\s[\D]+\s[\D]+$/)) {
    if (name.value.match(/[а-яА-Яa-zA-z]+/)) {
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

$('.country').on('blur', function () {
    var country = this
    console.log(country);
    if (country.value.match(/[а-яА-Яa-zA-z]+/)) {
        $(this).addClass("valid");
        $(this).removeClass("invalid");
    } else {
        $(this).addClass("invalid");
        $(this).removeClass("valid");
    }
    if (country.value === "") {
        $(this).removeClass("valid");
        $(this).removeClass("invalid");
    }
});

$('.organization').on('blur', function () {
    var organization = this
    console.log(organization);
    if (organization.value === "") {
        $(this).removeClass("valid");
        $(this).removeClass("invalid");
    } else {
        $(this).addClass("valid");
    }
});

var buy = new bootstrap.Modal(document.getElementById('formModalBuy'), {
    keyboard: true
});

var request = new bootstrap.Modal(document.getElementById('formModalRequest'), {
    keyboard: true
});

var thanks = new bootstrap.Modal(document.getElementById('formModalThanks'), {
    keyboard: true
});

var load = new bootstrap.Modal(document.getElementById('formModalDownload'), {
    keyboard: true
});


$('.ajax-form, .formbuy').submit(function () {
    var namevalid    = $(this.getElementsByClassName('name')).val();
    var countryvalid    = $(this.getElementsByClassName('country')).val();
    var organizationvalid    = $(this.getElementsByClassName('organization')).val();
    var phonevalid     = $(this.getElementsByClassName('phone')).val();
    var mailvalid    = $(this.getElementsByClassName('mail')).val();
    var checkvalid     = $(this.getElementsByClassName('consent')).is(":checked");
    var formoptoin    = this.closest("form");

    if(namevalid && countryvalid && organizationvalid && phonevalid && mailvalid && checkvalid &&
        phonevalid.match(/\+?[0-9]{4,}/) &&
        namevalid.match(/[а-яА-Яa-zA-z]+/) &&
        mailvalid.match(/\w+[.]?\w+?@\w+?\.[a-z]{2,4}/) &&
        countryvalid.match(/[а-яА-Яa-zA-z]+/)){
        let formData = new FormData(this);

        $.ajax({
            url: myajax.url_send,
            data: formData,
            type: 'POST',
            processData: false,
            success: function (data) {
                if(data === 'ok'){
                    if(formoptoin.classList.contains('ajax-form')){
                        thanks.show();
                        request.hide();
                    }
                    if(formoptoin.classList.contains('formbuy')) {
                        load.show();
                        buy.hide();
                    }
                }
                },
            error: function (data) {
                alert("Данные не отправленны");
            }
        });
    } else {
        console.log('не отправляем');
    }
    return false;
});



function check() {
    var consent = document.getElementsByClassName('consent');
    for (var i = 0; i < consent.length; i++) {
        var form = consent[i].closest("form")
        if (consent[i].checked)
            form.querySelector("button").disabled = '';
        else form.querySelector("button").disabled = 'disabled';
    }
}

// $.ajax({
//     url: myajax.url_send,
//     data: $('.modal').serialize(),
//     type: 'POST',
//     success: function (data) {
//         if(data === 'ok'){
//             thanks.show();
//         }
//     },
//     error: function (data) {
//         alert("Данные не отправленны");
//     }
// });

// $('#formModalBuy').submit(function () {
//     $.ajax({
//         url: './js/action_ajax_form.php',
//         data: $('.modal').serialize(),
//         type: 'POST',
//         success: function (data) {
//             if(data === 'ok'){
//                 load.show();
//             }
//         },
//         error: function(data) { // Данные не отправлены
//             alert("Данные не отправленны")
//         }
//     });
// });

// function findVideos() {
let videos = document.querySelectorAll('.box-video');

for (let i = 0; i < videos.length; i++) {
    this.setupVideo(videos[i]);
}
// }

function setupVideo(video) {
    let link = video.querySelector('.video__link');
    let media = video.querySelector('.video__media');
    let button = video.querySelector('.video__button');
    let id = this.parseMediaURL(media);

    video.addEventListener('click', () => {
        let iframe = this.createIframe(id);
        console.log(link)

        link.remove();
        button.remove();
        video.appendChild(iframe);
    });

    link.removeAttribute('href');
    video.classList.add('video--enabled');
}

function parseMediaURL(media) {
    let regexp = /https:\/\/i\.ytimg\.com\/vi\/([a-zA-Z0-9_-]+)\/maxresdefault\.jpg/i;
    let url = media.src;
    let match = url.match(regexp);

    return match[1];
}

function createIframe(id) {
    let iframe = document.createElement('iframe');

    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('allow', 'autoplay');
    iframe.setAttribute('src', this.generateURL(id));
    iframe.classList.add('video__media');

    return iframe;
}

function generateURL(id) {
    let query = '?rel=0&showinfo=0&autoplay=1';

    return 'https://www.youtube.com/embed/' + id + query;
}