<?php 
// autoload zie http://php.net/manual/en/language.oop5.autoload.php
function __autoload($class_name) {
    include __DIR__. '/'. $class_name . '.php';
}

$ts = new TraversableString();
$ts->setInhoud("abcde");
$a="abcdefgh";

foreach ($ts as $k => $v) {
    print ("$k, $v<br/>\n");
}


