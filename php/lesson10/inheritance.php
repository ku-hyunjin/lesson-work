<?php
class Person 
{
    public function who()
    {
        return '私は人です。';
    }
}

class Student extends Person
{
}

$student = new Student();
echo $student->who();
