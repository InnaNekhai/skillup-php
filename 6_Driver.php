<?php
/**
6.  Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).
 видимо, часть условия пропущена
 */

include'5_User.php';

class Driver extends Worker
{
    private $experience;
    private $category;

    public function setExperience($experience){
        $this->experience = $experience;
    }

    public function getExperience(){
        return $this->experience;
    }

    private function checkCategory($category){
        if ($category=='A'|| $category=='B'|| $category=='C'){
            return true;
            } else {
            return false;
            }
        }

    public function setCategory($category){
        if ($this->checkCategory($category)){
            $this->category = $category;
        } else {
            echo 'Категория указана неверно';
        }
    }

    public function getCategory(){
        return $this->category;
    }
}

$driver = new Driver();
$driver->setCategory('g');
echo '<p>'.'Категория водителя: '.$driver->getCategory();