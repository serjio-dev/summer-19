<?php
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'ShowAnimal.php';

$cat = new Cat('Gary', 'home animal');

echo 'Животное типа: <b>' . $cat->getType() . '</b> зовут ' . $cat->getName() . '<br>';


$dog = new Dog('Wood', 'home animal');

echo 'Животное типа: <b>' . $dog->getType() . '</b> зовут ' . $dog->getTraitName() . '('. $dog->getName() .')<br>';



$show = new ShowAnimal($dog);
$show->showDisplay();