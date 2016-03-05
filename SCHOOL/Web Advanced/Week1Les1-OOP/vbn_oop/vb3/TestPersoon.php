<?php 
function __autoload($class_name) {
    include __DIR__. '/'. $class_name . '.php';
}

$auto1 = new Auto('aqk-834', 123); 

$pers1 = new Persoon('jan',$auto1);
print ('<br/>');
print ($pers1);
print ('<br/>');


$pers2 = new Persoon('kurt');
print ('<br/>');
print ($pers2);
print ('<br/>');

$auto2 = new Auto('nws-334', 120);
$pers2->setAuto($auto2);
print ('<br/>');
print ($pers2);
print ('<br/>');


