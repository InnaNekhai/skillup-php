<?php
include 'Worker.php';

$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');


/*  1. Выбрать работника с id = 3*/

echo '<b><i>Задача 1:</i></b>' .'<p>';
$sql='SELECT * FROM workers WHERE id=:id';
$result = $pdo->prepare($sql);
$result->execute(['id'=>3]);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field=>$value){
        echo $field .'-' .$value .' | ';
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
        echo $field .'-' .$value .' | ';
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
        echo $field .'-' .$value .' | ';
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
        echo $field .'-' .$value .' | ';
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
        echo $field .'-' .$value .' | ';
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
        echo $field .'-' .$value .' | ';
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
        echo $field .'-' .$value .' | ';
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
        if ($value){
            echo $field .'-' .$value .' | ';
        }
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
        echo $field . '-' . $value . '  |  ';
    }
    echo '<p>';
}


 // 10. Выбрать работника Петю. Показать решение.
echo '<b><i>Задача 10:</i></b>' .'<p>' ;
$sql='SELECT * FROM workers WHERE name=:name';
$result = $pdo->prepare($sql);
$result->execute(['name'=>'Петя']);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field => $value) {
        echo $field . '-' . $value . ' | ';
    }
    echo '<p>';
}

 // 11. Выбрать работников Петю и Васю. Показать решение.

echo '<b><i>Задача 11:</i></b>' .'<p>' ;
$sql='SELECT * FROM workers WHERE name=:name1 OR name=:name2';
$result = $pdo->prepare($sql);
$result->execute(['name1'=>'Петя', 'name2'=>'Вася']);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field => $value) {
        echo $field . '-' . $value . ' | ';
    }
    echo '<p>';
}

 // 12. Выбрать всех, кроме работника Петя. Показать решение.
echo '<b><i>Задача 12:</i></b>' .'<p>' ;
$sql='SELECT * FROM workers WHERE name!=:name';
$result = $pdo->prepare($sql);
$result->execute(['name'=>'Петя']);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field => $value) {
        echo $field . '-' . $value . ' | ';
    }
    echo '<p>';
}

 // 13. Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$. Показать решение.
echo '<b><i>Задача 13:</i></b>' .'<p>' ;
$sql='SELECT * FROM workers WHERE age=:age OR salary=:salary';
$result = $pdo->prepare($sql);
$result->execute(['age'=>27, 'salary'=>1000]);

while ($row = $result->fetchObject(Worker::class)) {
    foreach ($row as $field => $value) {
        echo $field . '-' . $value . ' | ';
    }
    echo '<p>';
}

/* 14.  Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно)
или с зарплатой 1000$. Показать решение.*/

echo '<b><i>Задача 14:</i></b>' .'<p>' ;

$sql='SELECT * FROM workers WHERE age>=23 AND age<27';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}


 // 15. Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$. Показать решение.
echo '<b><i>Задача 15:</i></b>' .'<p>' ;
$sql='SELECT * FROM workers WHERE (age>23 AND age<27) OR (salary>400 AND salary<1000)';
$result=$pdo->query($sql);
while($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

// 16.  Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$. Показать решение.
echo '<b><i>Задача 16:</i></b>' .'<p>' ;
$sql='SELECT *FROM workers WHERE age=27 OR salary!=400';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

// 17.	Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом. Показать решение.

echo '<b><i>Задача 17:</i></b>' .'<p>' ;

/*$add='INSERT INTO workers SET name="Никита", age=26, salary=300';
$newRow=$pdo->exec($add);

$del='DELETE FROM workers WHERE name="Никита" AND id>25';
$new=$pdo->exec($del);*/


$sql='SELECT * FROM workers WHERE age=26 ';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}


 // 18. Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом. Показать решение.
echo '<b><i>Задача 18:</i></b>' .'<p>' ;
/*$sql='INSERT INTO workers (name, salary) VALUES ("Светлана", 1200)';
$newRow=$pdo->exec($sql);
echo $newRow;*/
$sql='SELECT * FROM workers WHERE name="Светлана" ';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        if ($value){
            echo $key .'-' .$value .' | ';
        }
    }
    echo '<p>';
}

 // 19. Добавьте двух новых работников одним запросом: Ярослава с зарплатой 1200$ и возрастом 30,
// Петра с зарплатой 1000$ и возрастом 31. Показать решение.
echo '<b><i>Задача 19:</i></b>' .'<p>' ;
/*$sql='INSERT INTO workers (name, salary, age) VALUES ("Ярослав", 1200, 30), ("Петр", 1000, 31)';
$newRow=$pdo->exec($sql);
echo $newRow;*/

/*$sql='DELETE FROM workers WHERE id=31 OR id=32';
$del=$pdo->exec($sql);*/

$sql='SELECT * FROM workers WHERE name="Ярослав" OR name="Петр"';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

// 20. Удалите работника с id=7. Показать решение.
echo '<b><i>Задача 20:</i></b>' .'<p>' ;
$sql='DELETE FROM workers WHERE id=7';
$del=$pdo->exec($sql);

$sql='SELECT * FROM workers WHERE id=id';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

 // 21 . Удалите Колю. Показать решение
echo '<b><i>Задача 21:</i></b>' .'<p>' ;
$sql='DELETE FROM workers WHERE name="Коля"';
$del=$pdo->exec($sql);

$sql='SELECT * FROM workers WHERE id=id';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

//  22. Удалите всех работников, у которых возраст 23 года.
echo '<b><i>Задача 22:</i></b>' .'<p>' ;
$sql='DELETE FROM workers WHERE age=23';
$del=$pdo->exec($sql);

$sql='SELECT * FROM workers WHERE id=id';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

// 23. Поставьте Васе зарплату в 200$.
// поставлю Кириллу, Васю удалили в 22 задаче

echo '<b><i>Задача 23:</i></b>' .'<p>' ;
$sql='UPDATE workers SET salary=200 WHERE name="Кирилл"';
$upd=$pdo->exec($sql);

$sql='SELECT * FROM workers WHERE name="Кирилл"  ';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

// 24. Работнику с id=4 поставьте возраст 35 лет. Показать решение.
//  работника c id=4 уже в процессе где-то удалили, поставлю 2-му
echo '<b><i>Задача 24:</i></b>' .'<p>' ;
$sql='UPDATE workers SET age=35 WHERE id=2';
$upd=$pdo->exec($sql);

$sql='SELECT * FROM workers WHERE id=2  ';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

// 25. Всем, у кого зарплата 500$ сделайте ее 700$. Показать решение.
echo '<b><i>Задача 25:</i></b>' .'<p>' ;
$sql='UPDATE workers SET salary=700 WHERE salary=500';
$upd=$pdo->exec($sql);

$sql='SELECT * FROM workers WHERE salary=700  ';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

// 26.Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23. Показать решение.

echo '<b><i>Задача 26:</i></b>' .'<p>' ;
$sql='UPDATE workers SET age=23 WHERE id>=2 AND id<=5';
$upd=$pdo->exec($sql);

$sql='SELECT * FROM workers WHERE id=id  ';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

// 27. Поменяйте Васю на Женю и прибавьте ему зарплату до 900$. Показать решение.

echo '<b><i>Задача 27:</i></b>' .'<p>' ;
$sql='UPDATE workers SET name="Женя" WHERE name="Кирилл"';
$upd=$pdo->exec($sql);

$sql='SELECT * FROM workers WHERE id=id  ';
$result=$pdo->query($sql);
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
    foreach ($row as $key=>$value){
        echo $key .'-' .$value .' | ';
    }
    echo '<p>';
}

