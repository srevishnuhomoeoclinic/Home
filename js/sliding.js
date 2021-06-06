$(document).ready(function() {
    var Duration = 500; 

    $('p a').hover(function() {
        $(this).find('.arrow').animate({
            marginLeft: '3px'
        }, Duration);
    }, function() {
        $(this).find('.arrow').animate({
            marginLeft: '0px'
        }, Duration);
    });



});