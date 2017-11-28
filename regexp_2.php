<?php

/* 1. Дана строка 'aa aba abba abbba abbbba abbbbba'.
Напишите регулярку, которая найдет строки abba, abbba, abbbba и только их. */

echo '1: ' . preg_replace('/ab{2,4}a/', '-', 'aa aba abba abbba abbbba abbbbba') .'<p>';

/* 2. Дана строка 'aa aba abba abbba abbbba abbbbba'.
Напишите регулярку, которая найдет строки вида aba, в которых 'b' встречается менее 3-х раз (включительно).*/

echo '2: ' .preg_replace('/ab{0,3}a/', '-', 'aa aba abba abbba abbbba abbbbba') .'<p>';

/*  3. Дана строка 'aa aba abba abbba abbbba abbbbba'.
Напишите регулярку, которая найдет строки вида aba, в которых 'b' встречается более 4-х раз включительно*/

echo '3: ' .preg_replace('/ab{4,}a/', '-', 'aa aba abba abbba abbbba abbbbba') .'<p>';


/* 4. Дана строка 'a1a a2a a3a a4a a5a aba aca'.
Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a',
а между ними одна цифра  */

echo '4: ' .preg_replace('/a\da/', '-', 'a1a a2a a3a a4a a5a aba aca') .'<p>';


/*  5. Дана строка 'a1a a22a a333a a4444a a55555a aba aca'.
Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a',
а между ними любое количество цифр.*/

echo '5: ' .preg_replace('/a\d+a/', '-', 'a1a a22a a333a a4444a a55555a aba aca') .'<p>';

/*  6. Дана строка 'aa a1a a22a a333a a4444a a55555a aba aca'.
Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a',
а между ними любое количество цифр (в том числе и ноль цифр, то есть строка 'aa').*/

echo '6: ' .preg_replace('/a\d*a/', '-', 'aa a1a a22a a333a a4444a a55555a aba aca') .'<p>';

/*  7. Дана строка 'avb a1b a2b a3b a4b a5b abb acb'.
Напишите регулярку, которая найдет строки следующего вида:
по краям стоят буквы 'a' и 'b', а между ними - не число. */

echo '7: ' .preg_replace('/a[\D]b/', '-', 'avb a1b a2b a3b a4b a5b abb acb') .'<p>';

/*  8. Дана строка 'ave a#b a2b a$b a4b a5b a-b acb'.
Напишите регулярку, которая найдет строки следующего вида:
по краям стоят буквы 'a' и 'b', а между ними - не буква и не цифра.*/

echo '8: ' .preg_replace('/a\Wb/', '-', 'ave a#b a2b a$b a4b a5b a-b acb') .'<p>';

/*  9. Дана строка 'ave a#a a2a a$a a4a a5a a-a aca'.
Напишите регулярку, которая заменит все пробелы на '!'.*/

echo '9: ' .preg_replace('/\s/', '!', 'ave a#a a2a a$a a4a a5a a-a aca') .'<p>';

/* 10.  Дана строка 'aba aea aca aza axa'.
Напишите регулярку, которая найдет строки aba, aea, axa, не затронув остальных.*/

echo '10: ' .preg_replace('/a[bex]a/', '!', 'aba aea aca aza axa') .'<p>';

/* 11. Дана строка 'aba aea aca aza axa a.a a+a a*a'.
Напишите регулярку, которая найдет строки aba, a.a, a+a, a*a, не затронув остальных. */

echo '11: ' .preg_replace('/a[b\.\+\*]a/', '!', 'aba aea aca aza axa a.a a+a a*a') .'<p>';

/* 12. Напишите регулярку, которая найдет строки следующего вида:
по краям стоят буквы 'a', а между ними - цифра от 3-х до 7-ми.*/

echo '12: ' .preg_replace('/a[3-7]a/', '-', 'avb a1a a2a a3a a4a a5a aba acb') .'<p>';

/*  13. Напишите регулярку, которая найдет строки следующего вида:
по краям стоят буквы 'a', а между ними - буква от a до g.*/

echo '13: ' .preg_replace('/a[a-g]a/', '-', 'avb aba a2a a3a aca a5a aba acb') .'<p>';

/*  14.Напишите регулярку, которая найдет строки следующего вида:
по краям стоят буквы 'a', а между ними - буква от a до f и от j до z*/

echo '14: ' .preg_replace('/a[a-fj-z]a/', '-', 'avb aba a2a a3a aca a5a ata acb') .'<p>';

/*  15. Напишите регулярку, которая найдет строки следующего вида:
по краям стоят буквы 'a', а между ними - буква от a до f и от A до Z*/

echo '15: ' .preg_replace('/a[a-fA-Z]a/', '-', 'avb aba a2a a3a aca a5a aTa acb') .'<p>';


/*  16.Дана строка 'aba aea aca aza axa a-a a#a'. Напишите регулярку, которая найдет строки следующего вида:
по краям стоят буквы 'a', а между ними - не 'e' и не 'x'.*/

echo '16: ' .preg_replace('/a[^ax\s]a/', '-', 'aeb aba a2a a3a aca axa aTa acb') .'<p>';

/*  17.  Дана строка 'wйw wяw wёw wqw'. Напишите регулярку,
которая найдет строки следующего вида: по краям стоят буквы 'w', а между ними - буква кириллицы.*/

echo '17: ' .preg_replace('/w[а-яё]w/u' , '-', 'wйw wяw wёw wqw') .'<p>';

/*   18. Дана строка 'aAXa aeffa aGha aza ax23a a3sSa'. Напишите регулярку, которая найдет строки следующего вида:
по краям стоят буквы 'a', а между ними - маленькие латинские буквы, не затронув остальных. */

echo '18: ' .preg_replace('/a[a-z]+a/', '-', 'aAXa aeffa aGha aza ax23a a3sSa') .'<p>';

/* 19.Дана строка 'aAXa aeffa aGha aza ax23a a3sSa'. Напишите регулярку, которая найдет строки следующего вида:
по краям стоят буквы 'a', а между ними - маленькие и большие латинские буквы, не затронув остальных*/

echo '19: ' .preg_replace('/a[a-zA-Z]+a/', '-', 'aAXa aeffa aGha aza ax23a a3sSa') .'<p>';










