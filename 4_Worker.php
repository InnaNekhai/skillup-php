<?php
/**
На __construct
4. Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ). Сделайте также public методы getName, getSalary.

Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.
 */

class Worker
{
    private $name;
    private $salary;
    private $age; //я так понимаю, просто в условии напутано и дальше требуются все эти поля

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName(){
        return $this->name;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function getAge(){
        return $this->age;
    }
}

$worker = new Worker('Дима', 25, 1000);
echo $worker->getAge()*$worker->getSalary();