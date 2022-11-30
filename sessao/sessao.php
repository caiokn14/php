<?php
session_start();

if(isset($_SESSION["contador"])){
    $_SESSION["contador"] += 1;
}else{
    $_SESSION["contador"] = 1;
}
$msg = "Quantidade de acesso ". $_SESSION["contador"];
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