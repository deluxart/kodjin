AOS.init();
// Fixed header on scroll
jQuery(document).ready(function($){
    if ( jQuery(document).scrollTop() === 0) {
        if (!jQuery("#header").hasClass("transparent_on_top")) {
            jQuery('#header a.btn').removeClass('white').addClass('dark');
        }
    }
    const checkOffset = () => {
        if ( $(document).scrollTop() > 0){
            $('#header').addClass('fixed');
            $('#header a.btn').removeClass('white').addClass('dark');
        } else {
            $('#header').removeClass('fixed');
            if (jQuery("#header").hasClass("transparent_on_top")) {
                $('#header a.btn').removeClass('dark').addClass('white');
            }
        }
    }
    checkOffset();
    $(window).scroll(function() {
        checkOffset();
    });
});

if (typeof jQuery !== 'undefined') {
    jQuery(document).ready(function () {
        const checkNewsTicker = jQuery('#newsTicker').length;
        const checkTickerStatus = localStorage.getItem('kodjin_newsTicker_05');

        if (checkNewsTicker && checkTickerStatus !== 'closed') {
            const t = jQuery('#newsTicker');
            t.addClass('active');

            jQuery('#newsTicker').eocjsNewsticker({
                timeout: 0.1,
                speed: 25,
                divider: "•",
            });

            const tClose = jQuery('#newsTicker .close');
            tClose.on('click', function () {
                localStorage.setItem('kodjin_newsTicker_05', 'closed');
                t.removeClass('active');
            });
        }
    });
} else {
    console.error('jQuery is required for this script to work');
}

// Custom spoiler
jQuery('.spoiler > .head').on('click', function(e){
    jQuery('div.spoiler').not(this).children('.cont').stop().slideUp(300);
    jQuery(this).closest('div.spoiler').children('.cont').stop().slideUp(300);
    jQuery('.spoiler > .head').not(this).removeClass('active');
    jQuery('.spoiler > .cont').not(this).removeClass('active');
    jQuery(this).closest('div.spoiler').children('.cont').stop().slideToggle(300).toggleClass('active');
    jQuery(this).toggleClass('active');
    e.preventDefault();
});

// Animate scroll on page
jQuery(document).ready(function () {
    jQuery('a[href*="#"]').on("click", function (e) {
        const anchor = jQuery(this);
        jQuery('html, body').stop().animate({
            scrollTop: jQuery(anchor.attr('href')).offset().top - 60
        }, 777);
        e.preventDefault();
        return false;
    });
});

const articlesScreens = jQuery('#blog .articles').length;
if (articlesScreens >= 1) {
    const articlesSlider = new Swiper('.articles', {
        slidesPerView: 'auto',
        spaceBetween: 18,
        navigation: {
            nextEl: '#blog .button-next',
            prevEl: '#blog .button-prev',
        },
    });
}

const featuredScreens = jQuery('#features_posts').length;
if (featuredScreens >= 1) {
    const featuredSlider = new Swiper('#features_posts .articles', {
        slidesPerView: 'auto',
        spaceBetween: 18,
        navigation: {
            nextEl: '#features_posts .button-next',
            prevEl: '#features_posts .button-prev',
        },
    });
}

const kodjin_updatesScreens = jQuery('#kodjin_updates').length;
if (kodjin_updatesScreens >= 1) {
    const featuredSlider = new Swiper('#kodjin_updates .articles', {
        slidesPerView: 'auto',
        spaceBetween: 18,
        navigation: {
            nextEl: '#kodjin_updates .button-next',
            prevEl: '#kodjin_updates .button-prev',
        },
    });
}

const webinarsScreens = jQuery('#webinars .articles').length;
if (webinarsScreens >= 1) {
    const webinarsSlider = new Swiper('#webinars .articles', {
        slidesPerView: 'auto',
        spaceBetween: 18,
        navigation: {
            nextEl: '#webinars .button-next',
            prevEl: '#webinars .button-prev',
        },
    });
}

const whitepapersScreens = jQuery('.other_whitepapers_slider').length;
if (whitepapersScreens >= 1) {
    const whitepapersSlider = new Swiper('.other_whitepapers_slider', {
        slidesPerView: 1,
        spaceBetween: 16,
        navigation: {
            nextEl: '.other_whitepapers_slider .button-next',
            prevEl: '.other_whitepapers_slider .button-prev',
        },
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            },
        }
    });
}

const resourcesScreens = jQuery('.resourcesSlider').length;
if (resourcesScreens >= 1) {
    const resourcesSlider = new Swiper('.resourcesSlider', {
        slidesPerView: 1,
        spaceBetween: 16,
        navigation: {
            nextEl: '.resourcesSlider .button-next',
            prevEl: '.resourcesSlider .button-prev',
        },
    });
}

const testimonialsScreens = jQuery('#testimonials .testimonials-slider').length;
if (testimonialsScreens >= 1) {
    const testimonialsSlider = new Swiper('#testimonials .testimonials-slider', {
        slidesPerView: 1,
        spaceBetween: 16,
        navigation: {
            nextEl: '#testimonials .button-next',
            prevEl: '#testimonials .button-prev',
        },
    });
}

// CF7 - Options
document.addEventListener( 'wpcf7mailsent', function( event ) {
    const unitTag = event.detail.unitTag;
    jQuery(`#${unitTag}`).closest('.wrapForm').hide();
    jQuery(`#${unitTag}`).closest('.contactForm').find('.successForm').show();
}, false );

jQuery('.wpcf7 input, .wpcf7 textarea').on('focusin', function(){
    jQuery(this).parents('label').addClass('active');
});

jQuery('.wpcf7 input,.wpcf7 textarea').on('focusout', function(){
    if (jQuery(this).val() == ''){
        jQuery(this).parents('label').removeClass('active');
        jQuery(this).parent('label').prev().show();
    }
});

jQuery('.contactForm .btn.again').on('click', function(e){
    jQuery(this).closest('.contactForm').find('.successForm').hide();
    jQuery(this).closest('.contactForm').find('.wrapForm').show();
    jQuery(this).closest('.contactForm').find('.wpcf7-response-output').html('').hide();
    e.preventDefault();
});

jQuery('.close-clear-form').on('click', function(e){
    jQuery(this).closest('.daModal').find('.successForm').hide();
    jQuery(this).closest('.daModal').find('.wrapForm').show();
    jQuery(this).closest('.daModal').find('.wpcf7-response-output').html('').hide();
    e.preventDefault();
});
// Add modal
jQuery(document).ready(function () {
    jQuery('button.da-modal, a.da-modal').click(function (e) {
        const modal_id = jQuery(this).attr('data-name');
        jQuery('.da-modal-open-bg').addClass("open");
        jQuery("#"+modal_id).addClass("open");
        e.preventDefault();
    });

    jQuery('button.da-modal-close, .da-modal-open-bg').click(function () {
        jQuery('.daModal').removeClass('open');
        jQuery('.da-modal-open-bg').removeClass('open');
    });

    const $this = jQuery('#faq .list');
    if ($this.find('.spoiler').length > 5) {
        jQuery('#faq .questions').append('<button class="btn dark border load_more">Load more</button>');
    }

    // If more than 2 Education items, hide the remaining
    jQuery('#faq .list .spoiler').slice(0,5).addClass('shown');
    jQuery('#faq .list .spoiler').not('.shown').hide();
    jQuery('#faq .questions .load_more').on('click',function(){
        const btnText = jQuery(this).text() === 'Load more' ? 'Show less' : 'Load more';
        jQuery('#faq .list .spoiler').not('.shown').slideToggle(300);
        jQuery(this).toggleClass('showLess');
        jQuery(this).text(btnText);
    });
});

jQuery(window).on('load',function(){
    jQuery('#partners_head .logos').liMarquee({
        circular: true,
        startShow: true,
        scrollStop: false,
    });

    jQuery('#partners .logos').liMarquee({
        circular: true,
        startShow: true,
        scrollStop: false,
    });
})
