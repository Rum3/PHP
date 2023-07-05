<?php
namespace School\Teachers;
class School {
    private $teachers;

    public function createTeachers($name){
        $this->teachers[] = $name;
    }

    public function getTeachers(){
        return $this->teachers;
    }
}

namespace School\Students;
class School {
    private $students;

    public function createTeachers($name){
        $this->students[] = $name;
    }

    public function getTeachers(){
        return $this->students;
    }
}