<?php 
include (__DIR__ . '/Auto.php');
include (__DIR__ . '/Vrachtwagen.php');

$vw1 = new Vrachtwagen('aqk-834', 123, 100); 
print ('<pre>');
var_dump($vw1);
print( "</pre>\n");

$vw1->setLaadVermogen(120);
  
print ('<pre>');
var_dump($vw1);
print ("</pre>\n");

print ($vw1);
print ("stop<br/>\n");

