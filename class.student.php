<?php
class Student
{
    const ID = 6540259113;
    public $school = "LRU";
    public function info() 
    {
        $data = self::ID . " : " . $this->school;
        return $data;
    }
}
?>