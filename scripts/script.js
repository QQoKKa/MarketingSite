$('.homebtn').click(function() {
        $('html, body').animate({
        scrollTop: $('#aboutus').offset().top
    }, 1000);
})

$('.bic').click(function() {
        $('html, body').animate({
        scrollTop: $('#service').offset().top
    }, 1000);
})

$('.ab1').hover(function() {
    $(this).css('background-color', '#9A031E');
    $('.bi-people-fill').css('color', 'white');
    $('.as1').css('color', 'white');
}, function() {
    $(this).css('background', 'none');
    $('.bi-people-fill').css('color', 'white');
    $('.as1').css('color', 'white');
})

$('.ab2').hover(function() {
    $(this).css('background-color', '#9A031E');
    $('.bi-building-fill').css('color', 'white');
    $('.as2').css('color', 'white');
}, function() {
    $(this).css('background', 'none');
    $('.bi-building-fill').css('color', 'white');
    $('.as2').css('color', 'white');
})

$('.ab3').hover(function() {
    $(this).css('background', '#9A031E');
    $('.bi-trophy-fill').css('color', 'white');
    $('.as3').css('color', 'white');
}, function() {
    $(this).css('background', 'none');
    $('.bi-trophy-fill').css('color', 'white');
    $('.as3').css('color', 'white');
})

// create trademark text on bottom of site in position absolute and center it
var trademark = document.createElement('p');
trademark.innerHTML = '© 2021 - All Rights Reserved';
trademark.style.position = 'absolute';
trademark.style.top = $(document).height() -20 + 'px';
trademark.style.left = '50%';
trademark.style.transform = 'translateX(-50%)';
trademark.style.color = 'white';
trademark.style.fontSize = '0.7rem';
document.body.appendChild(trademark);


