
<?php

 $bdd = new PDO("mysql:host=localhost;dbname=taData","root","");

if(isset($_POST['cadUser']))
{
if(!empty($_POST['celular']) AND !empty($_POST['senha']))
{
   $celular = htmlspecialchars($_POST['celular']);
   $senha = htmlspecialchars($_POST['senha']);
   $ativo = "1";
   $mycode = "1";

   $celularlength = strlen($celular);
   $senhalength = strlen($senha);

   if($celularlength == 9)
   {
       if($senhalength >= 8)
        {
          $reqcelular = $bdd->prepare("SELECT * FROM usuario WHERE celular = ?");
          $reqcelular->execute(array($celular));
          $celularexist = $reqcelular->rowCount();

          if($celularexist == 0)
          {
              $insertuser = $bdd->prepare("INSERT INTO usuario(celular, senha, ativo, mycode)VALUES(?,?,?,?)");
              $insertuser->execute(array($celular, $senha, $ativo,$mycode));
              $erro = "Usuario cadastrado com sucesso";
          }
          else {
              $erro = "O número de celular informado ja esta cadastrado";
            }
        }
        else
        {
            $erro = "Digite a senha entre 6 e 8 digitos";
        }

   }
   else
   {
       $erro = "Digite o Número corretamente";
   }
}
else
{
   $erro = "deu ruim na porra";
}
}

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trilhas Adventures</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

  </head>
  <body >
    <a href="login.php">Logar</a>
    <br /><br />
         <form action="" method="POST" >

            <input type="text"  id="celular" name="celular" placeholder="celular" /><br />
            <input type="text"  id="senha" name="senha" placeholder="Senha" /><br />
            <input type="submit" name="cadUser" value="Cadastro">

          </form>

          <?php
            if(isset( $erro)){
              echo  $erro;
            }

          ?>


  </body>
</html>
