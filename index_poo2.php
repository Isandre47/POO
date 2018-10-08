<?php
/**
 * Created by PhpStorm.
 * User: isandre
 * Date: 08/10/18
 * Time: 21:25
 */

require 'src/Unit.php';
require 'src/Elf.php';

$peon = new \Unite\Unit();
echo $peon->getPosition() .'<br>';

$peon->walk('right');
echo $peon->getPosition() .'<br>';;

$peon->walk('top');
echo $peon->getPosition() .'<br>';

$peon->walk('left');
echo $peon->getPosition() .'<br>';

$peon->walk('left');
echo $peon->getPosition() .'<br>';

$peon->walk('top');
echo $peon->getPosition() .'<br>';

$peon->walk('down');
echo $peon->getPosition() .'<br>';

$peon->setSpeed(8);
$peon->walk('down');

echo $peon->getPosition() .'<br>';

$elf = new \Unite\Elf();
$elf->walk('down');
echo 'bas ' . $elf->getPosition() .'<br>';

$elf->walk('left');
echo 'gauche '. $elf->getPosition() .'<br>';