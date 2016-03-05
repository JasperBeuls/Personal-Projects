<?php 
include (__DIR__. '/Auto.php');

$auto1 = new Auto('aqk-834', 123); 
$auto1->setMaxSnelheid(150);
print ('<pre>');
var_dump($auto1);
print ('</pre>');
print("maxSnelheid = " . $auto1->getMaxSnelheid(). "<br/>\n");

$auto2 = new Auto('lsf-132', 129);
print('<br/>aantalAutos = ' . Auto::getAantalAutos());
unset ($auto2);

print('<br/>aantalAutos = ');
print(Auto::getAantalAutos());
print('<br/> ');
