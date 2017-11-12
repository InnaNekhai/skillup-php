'use strict';

$(document).ready(function(){




//$('h2').html('!');//№1
$('h3').css('color', 'red');//№2
$('h2').css({color:'blue', fontSize:'30px'});//№3

$('.test').css('color', 'red');//№4
$('h2.test').css('color', 'red');//№5
$('p+p').css('color', 'red');//№6
$('li.www+li').css('color', 'red');//№7
$('h1:has(i)').css('color', 'red');//№8
$('h1:has(>i)').css('color', 'blue');//№9

$(':header').css('color', 'red');//№10
$('h2:not(.test)').css('color', 'green');//№11
$(':header:not(.test)').css('color', 'orange');//№12
$(':header+:header').css('color', 'green');//№13
$(':header+:header:has(b)').css('color', 'yellow');


//№16
    $('p:first').css('color', 'red');

//№17
    $('p:last').css('color', 'red');

//№19
    $('h2:has(i)').css('color', 'blue');

//№20
    $('h2:has(>i)').css('color', 'red');

//№21
    $('li:eq(2)').css('color', 'green');

//№23
    $('li:lt(10)').css('color', 'red');



    /*  рассмотренные задачи
        $('h3').html('!!!');
        $('h3').css('color', 'green');
        $('h3').css({color: 'green', fontWeight: 'bold'});
        $('.zzz').css('color', 'red');
        $(':header').css('color', 'red');
        $(':header.zzz').css('color', 'red');

    $(':header:not(.zzz)').css('color','red');

        $('li').css('color', 'blue');
        $('li').each(function (index, elem) {
            $(this).html(index);
        })*/


});