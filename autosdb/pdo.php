<?php
    $pdo = new PDO
    (  
        'mysql:host=localhost;
        port=3306;
        dbname=autosdata',
        'sajid',
        'msq'
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      // See the "errors" folder for details...

?>



