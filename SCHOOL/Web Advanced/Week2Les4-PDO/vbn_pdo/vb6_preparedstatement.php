<?php

$user = 'root';
$password = 'root';
$pdo = null;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=cdcol', $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = 1;
    $stmt = $pdo->prepare('SELECT * FROM cds WHERE id = :id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    var_dump($stmt->fetch());
} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();
}
$pdo = null;

