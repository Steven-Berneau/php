<?php
echo "bonjour";
var_dump($_GET);
if ((isset($_GET['page']) && ($_GET['page'] == 'toto')))
    echo "je n'ai pas de blague de toto";
else
    echo "wesh cousin";

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="index.php?page=toto">toto</a>
        <a href="index.php?page=tata">tata</a>
    </body>
    </html>