<?php

$user = 'root';
$password = 'root';
$pdo = null;

$titel = 'a';
$interpret = 'b';
$year = 1977;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=cdcol', $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO cds " .
            "(titel, interpret, jahr) VALUES (?, ?, ?);");
    $stmt->bindParam(1, $titel, PDO::PARAM_STR);
    $stmt->bindParam(2, $interpret, PDO::PARAM_STR);
    $stmt->bindParam(3, $year, PDO::PARAM_INT);
    $nr = $stmt->execute();
    print("$nr rows modified");
} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();
}
$pdo = null;

