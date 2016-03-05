<?php

$user = 'root';
$password = 'root';
$pdo = null;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=cdcol', $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query('SELECT * from cds');
    $i = 0;
    while ($row = $stmt->fetch()) {
        print("$i\n");
        print_r($row);
        $i++;
    }
} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();
}
$pdo = null;

