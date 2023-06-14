$('.gear-nav-dropdown').on('mouseenter', function() {
    $('.gear-nav-bottom').addClass('show');
    $('.gear-nav-top').addClass('show');

})
.on('mouseleave', function() {
    $('.gear-nav-bottom').removeClass('show');
    $('.gear-nav-top').removeClass('show');
}) 