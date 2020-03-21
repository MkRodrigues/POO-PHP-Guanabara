<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once "ContaBanco.php";

            $cb = new ContaBanco(1211, "Mikael Assis Silva");
            $cb->abrirConta("PP");
            $cb->depositar(300);
            $cb->sacar(150);
            $cb->pagarMensalidade();
            $cb->sacar(280);

            print_r($cb);

            $cb1 = new ContaBanco(1251, "Ruth Assis Pereira");
            $cb1->abrirConta("CC");
            $cb1->pagarMensalidade();
            print_r($cb1);
//            var_dump($cb1);
//            var_dump($cb);
            ?>
        </pre>
    </body>
</html>
