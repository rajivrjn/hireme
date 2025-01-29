$(document).click(function (event) {
    if (!$(event.target).closest('.mobile-menu').length) {
        $('.mobile-menu').removeClass('active');
        $('.bars').removeClass('active');
    }
});


$('#main_menu .bars').click(function () {
    $(this).toggleClass('active');
    $('.navigation-container').toggleClass('active');
    $('body').toggleClass('fixed');
})