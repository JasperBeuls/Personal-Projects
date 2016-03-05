<?php

$user = 'root';
$pass = 'root';
$pdo = null;

$from = 1;
$to = 2;
$amount = 10.0;
try {
    $pdo = new PDO('mysql:host=localhost;dbname=bank', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
}

if ($pdo != null) {
    try {

        $pdo->beginTransaction();

        $sql = 'SELECT amount FROM accounts WHERE id=:from';

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':from', $from, PDO::PARAM_INT);
        $stmt->execute();

        $originalAmount = (double) $stmt->fetchColumn();
        if ($originalAmount < $amount) {
            throw new Exception();
        }

        $stmt = null;
        $sql = 'UPDATE accounts SET amount = amount - :amount WHERE id = :from';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':from', $from, PDO::PARAM_INT);
        $stmt->bindParam(':amount', $amount, PDO::PARAM_INT);
        $stmt->execute();


        $sql = 'UPDATE accounts SET amount = amount + :amount WHERE id = :to';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':to', $to, PDO::PARAM_INT);
        $stmt->bindParam(':amount', $amount, PDO::PARAM_INT);
        $stmt->execute();
        $pdo->commit();
        echo 'succes';
    } catch (Exception $e) {
        echo 'failure';
        $pdo->rollBack();
        var_dump($e);
    }
}




