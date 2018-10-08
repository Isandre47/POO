<?php

// appel des classes collier et chat
require 'collar.php';
require 'cat.php';

// création d'un objet collier
$collier = new \Animals\Collar('8', 'bleu');

// création d'un objet chat nommé félix sans collier, ensuite une image et un niveau de fatigue
$felix  = new \Animals\Cat('Oliver', "noir");
$felix->setImage('imagechat');
$felix->setFatigue('25');

// création d'un objet chat nommé mistigri avec un collier, ensuite une image et un niveau de fatigue
$mistigri = new \Animals\Cat('stef', 'jaune', $collier);
$mistigri->setImage('');
$mistigri->setFatigue('8');


echo $felix->__toString();

echo $mistigri->__toString();

 $felix->walk();
 $felix->walk();
 $felix->walk();
 $felix->walk();
 $felix->walk();
 $felix->walk();
 $felix->walk();
 $felix->walk();
if ($felix->isTired()){
    $felix->rest();
}

echo $felix->__toString();


?>