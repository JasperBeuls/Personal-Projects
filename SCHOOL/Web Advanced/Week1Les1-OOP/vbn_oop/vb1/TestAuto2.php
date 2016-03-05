<?php 
include (__DIR__ . '/Auto.php');

$auto1 = new Auto('aqk-834', 150); 		//stap 1
$auto2  = $auto1;				//stap 2
$auto1->setMaxSnelheid(123);			//stap 3
print('<pre>');
var_dump($auto1);
var_dump($auto2);
print("</pre>\n");
unset($auto1);
unset($auto2);

