'use strict';

var plusButton = document.getElementById('plus'),
    minusButton = document.getElementById('minus'),
    op1 = document.getElementById('po1'),
    op2 = document.getElementById('po2'),
    result = document.getElementById('result'),
    buttons = document.getElementsByTagName("button"),
    i;

function onClick(event){
    switch (event.target.innerHTML){
        case '+': result.innerHTML = parseFloat(op1.value) + parseFloat(op2.value); break;
        case "-": result.innerHTML = parseFloat(op1.value) - parseFloat(op2.value); break;
        case "*": result.innerHTML = parseFloat(op1.value) * parseFloat(op2.value); break;
        case "/": result.innerHTML = parseFloat(op1.value) / parseFloat(op2.value); break;
    }
}

for(i = 0; i < buttons.length; i++){
    buttons[i].onclick = onClick;
}






























/*'use strict';

var arr = [3, -4, 50, 34, 8, -20, 20, -12],
    i,
    sum = 0;

for (i = 0; i < arr.length; i++){
    if (arr[i] > 0){
        sum +=arr[i]
    }
}

alert(sum);
*/


/*
'use strict';

function ask() {
    var day;

    day = prompt('Какой сегодня день недели (от 1 до 7)?');

    switch (day) {
        case '1': alert('Выходные закончились'); break;
        case '2':
        case '3':
        case '4': alert('Cегодня на работу'); break;
        case '5': alert('Скоро выходные'); break;
        case '6':
        case '7': alert('Ура, отдыхаем'); break;
        default:
            alert('Будь внемитальнее!');
            ask();
    }
}

ask();
alert('Молодец');
*/