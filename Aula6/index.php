<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once "ControleRemoto.php";

        $c = new ControleRemoto();

        $c->ligar();
        $c->abrirMenu();
//        $c->setVolume(100); Os métodos estão privados, portanto não podem ser acessados.
        $c->maisVolume( );
        $c->abrirMenu();
        ?>
    </body>
</html>
