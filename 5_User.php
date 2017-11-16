<?php
/**
 5. Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.

Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.

Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.

Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.
 */

class User
{
    protected $name;
    protected $age;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }
}

class Worker extends User
{
    private $salary;

    public function getSalary(){
        return $this->salary;
    }

    public function setSalary($salary){
        $this->salary=$salary;
    }
}

$worker1 = new Worker;
$worker1 ->setName('Иван');
$worker1 ->setAge(25);
$worker1 -> setSalary(1000);

$worker2 = new Worker;
$worker2->setName('Вася');
$worker2 -> setAge(26);
$worker2 -> setSalary(2000);

echo 'Сумма зарплат: ' . ($worker1->getSalary() + $worker2 -> getSalary()). '<p>';

class Student extends User
{
    private $grant;
    private $course;

    public function setGrant($grant){
        $this->grant = $grant;
    }

    public function getGrant(){
        return $this->grant;
    }

    public function setCourse($course){
        $this->course = $course;
    }

    public function getCourse(){
        return $this -> course;
    }
}