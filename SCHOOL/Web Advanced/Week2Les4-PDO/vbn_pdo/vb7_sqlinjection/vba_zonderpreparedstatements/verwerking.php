<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo basename(__FILE__); ?></title>
    </head>
    <body>
        <?php
        $user = 'root';
        $password = 'root';
        $pdo = null;

        try {
            $pdo = new PDO('mysql:host=localhost;dbname=vbsqlinjection', $user, $password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $id = $_POST['user'];
            $pw = $_POST['password'];

            $query = 'SELECT * FROM gebruikers WHERE id = ' . $id . ' AND password = MD5(\'' . $pw . '\') ';

            $stmt = $pdo->query($query);

            echo '<pre>' . $stmt->queryString . '</pre>';

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $rij = $stmt->fetch();
            if ($rij !== false) {
                echo "<p>Ingelogd als " . $rij['id'] . ' ' . $rij['username'] . "</p>";
            } else {
                echo "<p>Login gefaald</p>";
            }
        } catch (PDOException $e) {
            print "Exeption!: " . $e->getMessage();
        }

        $pdo = null;
        ?>

    </body>
</html>

