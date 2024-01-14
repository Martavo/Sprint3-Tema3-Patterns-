<?php
include 'tigger.php';

// Se crea la instancia de tigger
$tigger = Tigger::getInstance();
$tigger->roar(); // Se imprime "Grrr!"
$tigger->roar(); 
$tigger->roar(); 
$tigger->roar(); 


echo "Tigger ha rugit " . $tigger->getCounter() . " vegades." . PHP_EOL;

?>