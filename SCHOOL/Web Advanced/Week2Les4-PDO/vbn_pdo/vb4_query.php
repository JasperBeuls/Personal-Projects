<?php

$user = 'root';
$password = 'root';
$pdo = null;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=cdcol', $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query('SELECT * from cds');
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if ($stmt->rowCount() > 0) {
        $columnNames = array();
        for ($i = 0; $i < $stmt->columnCount(); $i++) {
            $col = $stmt->getColumnMeta($i);
            $columnNames[] = $col['name'];
        }

        print("<table>");
        print('<tr><th>' . implode('</th><th>', $columnNames) .
                '</th></tr>');

        while ($row = $stmt->fetch()) {
            print('<tr><td>' . implode('</td><td>', $row) .
                    '</td></tr>');
        }
        print("</table>");
    }
} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();
}
$pdo = null;

