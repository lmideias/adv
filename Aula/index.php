<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP OO</title>
  </head>
  <body>
    <?php
       require('./Classes/ClassesObjetos.class.php');
        require('./Classes/AtributosMetodos.class.php');

       $teste = new ClassesObjetos();
       $teste->getClass('De introduçao','mostrar uma classe');
       $teste->verClass();

       $teste->Classe = 'Classe 2';
       $teste->Funcao = 'ver as atributos';
       $teste->verClass();
 echo "<br>";
      echo "--- Primeiro metodo-----<br>";
 echo "<br>";
       $pessoa = new AtributosMetodos();
       $pessoa->setUsuario('LucianoEun', 30, 'webmaster');
       $usuario = $pessoa->getUsuario();
        echo "<br>";
       echo $usuario;

       echo "<br>"; echo "<br>";

       echo "------ segundo Metodo ------<br>";
       echo "<br>";
        $pessoa->Idade = "banana";

        $pessoa->setUsuario('LucianoEun', 30, 'webmaster');
        $pessoa->setIdade(28);
        $pessoa->Envelhecer();
        $pessoa->Envelhecer();
        $pessoa->getClasse();




     ?>
  </body>
</html>
