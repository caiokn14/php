<?php
session_start();

$_SESSION["nome"] = "Caio";

// $msg = "Sessão dois utilizando a session contador ". $_SESSION["contador"];
?>

<html>
    <head>
        <title>PHP Session</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php echo $_SESSION["nome"] ?>
    </body>
</html>