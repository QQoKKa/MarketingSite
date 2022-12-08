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

$('.serviceli').click(function() {
        $('html, body').animate({
        scrollTop: $('#contact').offset().top
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

const year = new Date().getFullYear();
$('.li4').text('©'+year+' GrowItUpMarketing');


$('#message').focus(function() {
    $(this).css('height', '200px');
})

$('#message').blur(function() {
    $(this).css('height', '50px');
})


// $(document).ready(function(){
//     $('.contactbtn').attr('disabled',true);
//     $('#message').keyup(function(){
//         if($(this).val().length !=0 && $('#email').val().length !=0 && $('#name').val().length !=0 && $('#checkboxin').is(':checked'))
//             $('.contactbtn').attr('disabled', false);            
//         else
//             $('.contactbtn').attr('disabled',true);
//     })
// });

// if #message is not empty and checkbox is checked, then enable the button
$('.contactbtn').attr('disabled', true);
$('#message').keyup(function() {
    if($(this).val().length !=0 && $('#email').val().length !=0 && $('#checkboxin').is(':checked')) {
        $('.contactbtn').attr('disabled', false);
    } else {
        $('.contactbtn').attr('disabled',true);
    }
}) 