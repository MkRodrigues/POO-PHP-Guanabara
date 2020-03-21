<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Poo Php - Aula 2</title>
    </head>
    <body>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta();
        $c1->modelo = "Bic Cristal";
        $c1->cor = 'Azul';
        $c1->ponta = 0.5;
        $c1->carga = 50;
//        $c1->tampada = false;

        $c1->tampar();
        var_dump($c1);
        $c1->rabiscar();


        echo "<br>";
        echo "<br>";

        $c2 = new Caneta();
        $c2->modelo = "Bic Normal";
        $c2->cor = "Preta";
        $c2->ponta = 1.0;
        $c2->carga = 100;
        $c2->destampar();
//        var_dump($c2);
//        O método print_r não mostra a situação do boolean como true/false e sim como 0 ou vazio para false e 1 para true
        print_r($c2);
        $c2->rabiscar();
        ?>
    </body>
</html>
