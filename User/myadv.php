<?php
session_start();

 $bdd = new PDO("mysql:host=localhost;dbname=taData","root","");

 if(isset($_GET['userid']) AND $_GET['userid'] > 0)
 {
   $getid = intval($_GET['userid']);
   $requser = $bdd->prepare("SELECT * FROM usuario WHERE userid = ?");
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trilhas Adventures</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" type="text/css"  href="../Css/teste.css" />
  </head>
  <body >
    <div class="userdata">
      MyCode:<?php echo $userinfo['mycode']; ?>
      UserId:<?php echo $userinfo['userid']; ?>
      Celular:<?php echo $userinfo['celular']; ?>
        <a href="sairuser.php">Sair</a>
    </div>


    <?php
      if(isset($_SESSION['userid']) AND $userinfo['userid'] == $_SESSION['userid'])
      {
    ?>
    <div class="userdata">
      <a href="#">Configuração</a>
      <a href="sairuser.php">Sair</a>
    </div>

    <?php
        }
        else {
          echo 'nao tem o que mostrar';
        }
    ?>

  </body>
</html>

<?php
}
 ?>
