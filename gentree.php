<?php

class Person {
private $name;
private $lastname;
private $age;
private $mother;
private $father;

function __construct($name, $lastname, $age, $mother=null, $father=null)
{
$this->name = $name;
$this->lastname = $lastname;  
$this->age = $age;
$this->mother = $mother;
$this->father = $father;
}
function sayHi($name)
  {
    return "Hi $name, I`m " . $this->name;
  }
function getName() {
    return $this->name;
}
function getLastname() {
    return $this->lastname;
}
function getAge() {
    return $this->age;
}
function getMother() {
    return $this->mother;
}
function getFather() {
    return $this->father;
}
function getInfo() {
    return "<h3>Пара слов обо мне: </h3><br>" . "Меня зовут " . $this->getName().
    "<br> Моя фамилия " . $this->getLastname().
    "<br> Мне " . $this->getAge().
    "<br> Моего папу зовут " . $this->getFather()->getName(). 
    "<br> Его фамилия " . $this->getFather()->getLastname().
    "<br> Ему " . $this->getFather()->getAge().
    "<br> Мою маму зовут " . $this->getMother()->getName().
    "<br> Ее фамилия " . $this->getMother()->getLastname().
    "<br> Ей " . $this->getMother()->getAge(). 
    "<br><br> Моего деда по папе зовут " . $this->getFather()->getFather()->getName().
    "<br> Его фамилия " . $this->getFather()->getFather()->getLastname().
    "<br> Ему " . $this->getFather()->getFather()->getAge(). 
    "<br> Мою бабушку по папе зовут " . $this->getFather()->getMother()->getName().
    "<br> Ее фамилия " . $this->getFather()->getMother()->getLastname().
    "<br> Ей " . $this->getFather()->getMother()->getAge(). 
    "<br><br> Моего деда по маме зовут " . $this->getMother()->getFather()->getName().
    "<br> Его фамилия " . $this->getMother()->getFather()->getLastname().
    "<br> Ему " . $this->getFather()->getMother()->getAge(). 
    "<br> Мою бабушку по маме зовут " . $this->getMother()->getMother()->getName().
    "<br> Ее фамилия " . $this->getMother()->getMother()->getLastname().
    "<br> Ей " . $this->getMother()->getMother()->getAge(); 
}
}
$egor = new Person("Егор", "Максимов", 77, null, null);
$polina = new Person("Полина", "Максимова", 73);
$inna = new Person("Инна", "Максимова", 50, $polina, $egor);
$igor = new Person("Игорь", "Фетисов", 76);
$olga = new Person("Ольга", "Фетисова", 74);
$vadim = new Person("Вадим", "Фетисов", 53, $olga, $igor);
$artem = new Person("Артем", "Фетисов", 27, $inna, $vadim);


echo $artem->getInfo();
