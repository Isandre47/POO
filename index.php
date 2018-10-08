<?php

// apeller les 2 fichiers des classes chat et collier

require 'collar.php';
require 'cat.php';

//création d'un objet collier

$collier = new \Animals\Collar('8', 'bleu');

// création d'un objet chat

$felix  = new \Animals\Cat('Oliver', "noir");

// définition d'une image pour le chat félix

$felix->setImage('');

// définition d'une valeur de fatigue pour le chat félix
$felix->setFatigue('25');



echo $felix->__toString();

// faire marcher le chat

$felix->walk();
$felix->walk();
$felix->walk();
$felix->walk();

// afficher le résultat de cette marche

echo $felix->__toString();

// fatigue du chat à 25

$felix->setFatigue(25);

// afficher le chat et sa fatigue à 25
echo $felix->__toString();

$felix->setFatigue(102);

// afficher le chat et sa fatigue à 25, la valeur 102 n'a pas été prise en compte
echo $felix->__toString();

// faire manger le félix
$felix->eat();

// la fatigue a baissée de 10
echo $felix->__toString();


// félix a une couleur bleu mais n'est pas prise en compte
$felix->setColor('Bleu');
echo $felix->__toString();


// félix a une couleur grise mais est prise en compte
$felix->setColor('gris');
echo $felix->__toString();

?>