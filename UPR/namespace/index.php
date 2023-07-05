<?php
use School\Teachers;
use School\Students;
include 'nameSpace.php';

$Zah = new Teachers\School;
$Zah->createTeachers('Zah');
var_dump( $Zah->getTeachers());

$Vesko = new Students\School;
$Vesko->createTeachers('Vesko');
var_dump( $Vesko->getTeachers());
