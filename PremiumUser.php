<?php
/**
 * Created by PhpStorm.
 * User: SkillUP student
 * Date: 14.11.2017
 * Time: 20:35
 */

class PremiumUser extends User
{
    protected function validate(array $user)
    {
        $errors = parent::validate($user);
        if (substr($user['email'], -9)!= '@test.com'){
        $errors[] = 'Email должен заканчиваться на test.com';
    }
    return $errors;
    }

}