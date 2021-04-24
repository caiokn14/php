<?php
    setcookie("nome", "", time()-60, "/", "", 0);
    setcookie("idade", "", time()-60, "/", "", 0);
?>
<html>
    <head>
        <title>Cookies com PHP</title>
    </head>
    <body>
        <?php echo "Excluido cookie"?>
    </body>
    
</html>