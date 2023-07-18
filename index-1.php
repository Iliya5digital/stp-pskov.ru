Journal.notificationTimer = parseInt('1500', 10);

Journal.quickviewText = 'QuickView';

Journal.scrollToTop = parseInt('1', 10);



Journal.BASE_HREF = 'url(' + $('base').attr('href') + ')';

$(document).ready(function () {

Journal.productPage();

$('.product-tabs').insertAfter('.product-info');

Journal.enableProductOptions();
Journal.updatePrice = true;

Journal.enableSideBlocks();

Journal.searchAutoComplete();


Journal.quickViewStatus = false;

if ($('html').hasClass('product-page') || $('html').hasClass('quickview')) {
    Journal.enableCloudZoom('inner');
}

Journal.productPageGallery();


$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
            $('.scroll-top').fadeIn(200);
        } else {
            $('.scroll-top').fadeOut(200);
    }
});

$('.scroll-top').click(function () {
    $('html, body').animate({scrollTop: 0}, 700);
});

$('#top-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');
$('#bottom-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');

$('#top-modules .gutter-on').parent().addClass('gutter');
$('#bottom-modules .gutter-on').parent().addClass('gutter');

$(window).resize();

Journal.init();
});

/* Custom JS */
