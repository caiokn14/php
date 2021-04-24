<?php
    setcookie("nome", "Caio Kenji Nakakita", time()+3600, "/", "", 0);
    setcookie("idade", "19", time()+3600, "/", "", 0);
?>
<html>
    <head>
        <title>Cookies com PHP</title>
    </head>
    <body>
        <?php echo "envio cookie"?>
    </body>
</html>