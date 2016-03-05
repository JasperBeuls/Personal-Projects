<?php

$user = 'root';
$password = 'root';
$pdo = null;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=cdcol', $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $nr = $pdo->exec("DELETE FROM cds WHERE " .
            "titel LIKE 'T%'");
    print("$nr rows modified");
} catch (PDOException $e) {
    print "Exeption!: " . $e->getMessage();
}
$pdo = null;

