<?php

require 'collar.php';
require 'cat.php';

$collier = new \Animals\Collar('8', 'bleu');
$felix  = new \Animals\Cat('Oliver', "noir");
$felix->setImage('imagechat');
$felix->setFatigue('25');

$mistigri = new \Animals\Cat('stef', 'jaune', $collier);
$mistigri->setImage('gechat');
$mistigri->setFatigue('8');


$felix->__toString();
echo $felix;

echo $mistigri->__toString();


echo $felix->walk();
echo $felix->walk();
echo $felix->walk();
echo $felix->walk();
echo $felix->walk();
echo $felix->walk();
echo $felix->walk();
echo $felix->walk();
if ($felix->isTired()){
    $felix->rest();
}


echo $felix->__toString();


?>