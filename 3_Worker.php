<?php
/**
 3.  Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
 */

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setAge($age){
        if ($this->checkAge($age)){
            $this->age = + $age;
        } else {
            echo "Возраст указан неверно";
        }
    }

    public function getAge(){
        return $this->age;
    }

    public function setSalary($salary){
        $this->salary = + $salary;
    }

    public function getSalary(){
        return $this->salary;
    }

    private function checkAge($age){
        if ($age>1&&$age<100){
            return true;
        } else{
            return false;
        }
    }
}

$worker = new Worker;
$worker->setName('Иван');
$worker->setAge(25);
$worker->setSalary(1000);

$worker->setAge(15);
echo $worker->getAge() .'<p>';

$worker->setAge(101);
