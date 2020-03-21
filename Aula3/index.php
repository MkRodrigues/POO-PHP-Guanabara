<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Poo Php - Aula 2</title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Caneta.php';
            $c1 = new Caneta();
            $c1->modelo = "Bic Cristal";
            var_dump($c1);
            ?>
        </pre>
    </body>
</html>
