
<?php

 $bdd = new PDO("mysql:host=localhost;dbname=taData","root","");

if(isset($_POST['loginuser']))
{
  $celular = htmlspecialchars($_POST['celular']);
  $senha = htmlspecialchars($_POST['senha']);

    if(!empty($_POST['celular']) AND !empty($_POST['senha']))
   {
     $requser = $bdd->prepare("SELECT * FROM usuario WHERE celular = ? AND senha = ?");
     $requser->execute(array($celular, $senha));
     $userexist = $requser->rowCount();

     if( $userexist == 1)
     {
       $userinfo = $requser->fetch();
       $_SESSION['userid'] = $userinfo['userid'];
       $_SESSION['mycode'] = $userinfo['mycode'];
       header("Location: myadv.php?userid=".$_SESSION['userid']);
     }
     else
     {
         $erro = "Erro ao fazer o login";
      }
   }
   else
   {
       $erro = "Digite o login corretamente";
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

         <form action="" method="POST" >
            <a href="cadastro.php">Cadastrar</a>
            <br /><br />
            <input type="text"  id="celular" name="celular" placeholder="celular" /><br /><br />
            <input type="text"  id="senha" name="senha" placeholder="Senha" /><br /><br />
            <input type="submit" name="loginuser" value="Logar">

          </form>

          <?php
            if(isset( $erro)){
              echo  $erro;
            }

          ?>


  </body>
</html>
