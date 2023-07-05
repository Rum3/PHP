<?php
class Person {
    private $name;
    private $age;
    private $email;

   public function getName(){
    return $this->name;
   }

   public function setName($name){
    $this->name = $name;
   }

   public function getAge(){
    return $this->age;
   }

   public function setAge($age){
    $this->age = $age;
   }

   public function getEmail(){
    return $this->email;
   }

   public function setEmail($email){
    $this->email = $email;
   }
}

$Zah = new Person();

$Zah->setName("Zah");
$Zah->setAge("18");
$Zah->setEmail("exaple@eho"); 

echo $Zah->getName(),"\n";
echo $Zah->getAge(),"\n";
echo $Zah->getEmail(),"\n";