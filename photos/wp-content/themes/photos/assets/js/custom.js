$('.order-button').on('click', function(e) {
    e.preventDefault();
    $('section.order').removeClass('hidden');
    $('section.order').addClass('shown');


    $('.make-darker').addClass('darker');

});

// $('.check-button').on('click', function(e) {
//     e.preventDefault();
//     $('section.check').removeClass('hidden');
//     $('section.check').addClass('shown');
// });

$('.close').on('click', function(e) {
    e.preventDefault();
    $('section.order').removeClass('shown');
    $('section.order').addClass('hidden');
    $('section.check').removeClass('shown');
    $('section.check').addClass('hidden');
    $('section.result').removeClass('shown');
    $('section.result').addClass('hidden');

    $('.make-darker').removeClass('darker');
});


var codes = {};
var statuses = {};
var count = 0;

$('.order').each(function() {
    count++;
    codes[count] = $(this).find('.code').html();
    statuses[count] = $(this).find('.status').html();
});

$('.check-form').on('submit', function(e) {
   e.preventDefault();
   currentCode = $(this).find('.order-number').val();

   var currentIndex = -1;

   $.each(codes, function(index, value) {
       if (value == currentCode) {
           currentIndex = index;
       }
   });


    $('section.result').removeClass('hidden');
    $('section.result').addClass('shown');

    if(currentIndex < 0) {
        $('.currentStatus').html('Код заказа не найден');
    } else {
        $('.currentStatus').html(statuses[currentIndex]);
    }


    $('.make-darker').addClass('darker');
});






