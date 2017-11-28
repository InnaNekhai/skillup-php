<?php
include 'Worker.php';

$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');

/*$sql='SELECT * FROM workers WHERE salary=:salary';
$result = $pdo->prepare($sql);
$result->execute(['salary'=>500]);

while ($row = $result->fetchObject(Worker::class)){
    var_dump($row);
}*/



/*  1. Выбрать работника с id = 3*/

echo '<b><i>Задача 1:</i></b>' .'<p>';
$sql='SELECT * FROM workers WHERE id=:id';
$result = $pdo->prepare($sql);
$result->execute(['id'=>3]);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field=>$value){
        echo $field .'-' .$value .'|';
    }
    echo '<p>';
}

/* 2. Выбрать работников с зарплатой 1000$. Показать решение.*/

echo '<b><i>Задача 2:</i></b>' .'<p>' ;
$sql='SELECT * FROM workers WHERE salary=:salary';
$result = $pdo->prepare($sql);
$result->execute(['salary'=>1000]);

while ($row = $result->fetchObject(Worker::class)) {
        foreach ($row as $field=>$value){
        echo $field .'-' .$value .'|';
    }
    echo '<p>';
}

/*. 3. Выбрать работников в возрасте 23 года. Показать решение.*/
echo '<b><i>Задача 3:</i></b>' .'<p>' ;
$sql='SELECT * FROM workers WHERE age=:age';
$result = $pdo->prepare($sql);
$result->execute(['age'=>23]);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field=>$value){
        echo $field .'-' .$value .'|';
    }
    echo '<p>';
}
echo '<p>';

/* 4. Выбрать работников с зарплатой более 400$. Показать решение.*/
echo '<b><i>Задача 4:</i></b>' .'<p>' ;
$sql='SELECT * FROM workers WHERE salary>:salary';
$result = $pdo->prepare($sql);
$result->execute(['salary'=>400]);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field=>$value){
        echo $field .'-' .$value .'|';
    }
    echo '<p>';
}

/* 5. Выбрать работников с зарплатой равной или большей 500$. Показать решение.*/

echo '<b><i>Задача 5:</i></b>' .'<p>' ;
$sql='SELECT * FROM workers WHERE salary>=:salary';
$result = $pdo->prepare($sql);
$result->execute(['salary'=>500]);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field=>$value){
        echo $field .'-' .$value .'|';
    }
    echo '<p>';
}

/* 6. Выбрать работников с зарплатой НЕ равной 500$. Показать решение.*/

echo '<b><i>Задача 6:</i></b>' .'<p>' ;
$sql='SELECT * FROM workers WHERE salary!=:salary';
$result = $pdo->prepare($sql);
$result->execute(['salary'=>500]);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field=>$value){
        echo $field .'-' .$value .'|';
    }
    echo '<p>';
}

/*  7. Выбрать работников с зарплатой равной или меньшей 900$. Показать решение.*/
echo '<b><i>Задача 7:</i></b>' .'<p>' ;

$sql='SELECT * FROM workers WHERE salary<=:salary';
$result = $pdo->prepare($sql);
$result->execute(['salary'=>900]);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field=>$value){
        echo $field .'-' .$value .'|';
    }
    echo '<p>';
}


/* 8.  Узнайте зарплату и возраст Васи. Показать решение.*/
echo '<b><i>Задача 8:</i></b>' .'<p>' ;
$sql="SELECT salary, age FROM workers WHERE name=:name";
$result = $pdo->prepare($sql);
$result->execute(['name'=>'Вася']);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field=>$value){
        echo $field .'-' .$value .'|';
    }
    echo '<p>';
}

//* 9. 	Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).
echo '<b><i>Задача 9:</i></b>' .'<p>' ;
$sql="SELECT * FROM workers WHERE age>:age1 AND age<=:age2 ";
$result = $pdo->prepare($sql);
$result->execute(['age1'=>25, 'age2'=>28]);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field => $value) {
        echo $field . '-' . $value . '|';
    }
    echo '<p>';
}

/*$sql='SELECT * FROM workers WHERE age>25 AND age<=28';
$result = $pdo->query($sql);

while ($row = $result->fetch()) {
    foreach ($row as $field=>$value){
        echo $field .'-' .$value .'|';
    }
    echo '<p>';
}*/


 // 10. Выбрать работника Петю. Показать решение.

$sql='SELECT * FROM workers WHERE name=:name';

 // 11. Выбрать работников Петю и Васю. Показать решение.

 // 12. Выбрать всех, кроме работника Петя. Показать решение.

 // 13. Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$. Показать решение.

// 14.  Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$. Показать решение.

 // 15. Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$. Показать решение.

// 16.  Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$. Показать решение.


/// 17.	Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом. Показать решение.

 // 18. Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом. Показать решение.

 // 19. Добавьте двух новых работников одним запросом: Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31. Показать решение.

// 20. Удалите работника с id=7. Показать решение.

 // 21 . Удалите Колю. Показать решение


