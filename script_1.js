'use strict'

var i,
    j;

for (i = 1; i <= 9; i++ ){
    for (j = 1; j<=9; j++){
        document.write(i+'x'+j+'='+(i*j));
        document.write('<br>');
    }
    document.write('<p>');
}