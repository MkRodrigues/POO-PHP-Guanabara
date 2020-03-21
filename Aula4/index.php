<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once "Caneta.php";

//            $c1 = new Caneta();
//            $c1->setModelo("Bic Cristal");
//            $c1->setPonta(0.5);
//            O ato de colocar os métodos entre parênteses dentro de duas chaves se chama Interpolação, como visto em Angular./
//            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
//            print_r($c1);

            $c2 = new Caneta("Caneta Tinteiro", "Preto", 0.5);
            $c3 = new Caneta("Caneta Roller Ball", "Azul Claro", 0.7);
            print_r($c2);
            print_r($c3);
            ?>
        </pre>
    </body>
</html>
