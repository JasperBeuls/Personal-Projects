<?php 
// autoload zie http://php.net/manual/en/language.oop5.autoload.php
function __autoload($class_name) {
    include __DIR__. '/'. $class_name . '.php';
}

$c = new Cirkel(12.22);
print($c);
print ('<br/>'. $c->berekenOppervlak());

