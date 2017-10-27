'use strict';

var arr=[[[1, 2], [3, 4]], [[5, 6], [7, 8]]],
    sum=0;

for (var i=0; i < arr.length; i++){
    for (var j=0; j < arr[i].length; j++){
        for (var k=0; k < arr[i][j].length; k++){
            sum += arr[i][j][k];
        }
    }
}
alert(sum);




/*'use strict';

var arr=[[1, 2, 3], [4,5],[6]],
    sum=0;

for (var i=0; i < arr.length; i++){
    for (var j=0; j < arr[i].length; j++){
        sum +=arr[i][j];
    }
}
alert(sum);
console.log(sum);
*/



/*
'use strict';

var arr=[8, 1, 2, 3, 5],
    mass=[],
    i;

    for (i=arr.length-1; i>=0; i--){
        mass.push(arr[i]);
    }
console.log(mass);
 */


/*
'use strict';


var arr=[8, 1, 2, 3, 5],
    sum=0,
    i;

    for (i = 0; i < arr.length; i++) {
        sum += arr[i];

        if (sum > 10) {
            alert(i+1);
            break;
        }
    }
*/








/*'use strict';

function arrayFill(s, count){
    var i,
        res="";

    for (i=0; i<count; i++){
        res+=s;
    }
    return res;
}

var i,
    arr=[];

for (i=1; i<=9; i++){
    arr.push(arrayFill(i,i));
}
console.log(arr);
*/