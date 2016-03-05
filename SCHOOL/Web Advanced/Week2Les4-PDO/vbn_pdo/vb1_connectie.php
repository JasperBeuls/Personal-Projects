<?php

$user = 'root';
$password = 'root';
$pdo = null;
try {

    // connectie maken met databank test
    $pdo = new PDO('mysql:host=localhost;dbname=test', $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print('Geconnecteerd met databank test');

} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();
}
// connectie sluiten
$pdo = null;

