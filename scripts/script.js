$('.homebtn').click(function() {
        $('html, body').animate({
        scrollTop: $('#aboutus').offset().top
    }, 1000);
})

$('.ab1').hover(function() {
    $(this).css('background-color', 'black');
    $('.bi-people-fill').css('color', 'white');
    $('.as1').css('color', 'white');
}, function() {
    $(this).css('background-color', 'white');
    $('.bi-people-fill').css('color', 'black');
    $('.as1').css('color', 'black');
})

$('.ab2').hover(function() {
    $(this).css('background-color', 'black');
    $('.bi-building-fill').css('color', 'white');
    $('.as2').css('color', 'white');
}, function() {
    $(this).css('background-color', 'white');
    $('.bi-building-fill').css('color', 'black');
    $('.as2').css('color', 'black');
})

$('.ab3').hover(function() {
    $(this).css('background-color', 'black');
    $('.bi-trophy-fill').css('color', 'white');
    $('.as3').css('color', 'white');
}, function() {
    $(this).css('background-color', 'white');
    $('.bi-trophy-fill').css('color', 'black');
    $('.as3').css('color', 'black');
})