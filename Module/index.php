<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modulo</title>
  </head>
  <body>
     <?php
       require('./_app/Config.inc.php');
      // $conn = new Conn();
       //$conn->getConn();
       //var_dump( $conn->getConn());

       $PDO = new Conn();
       $celular = 'Luciano';
       $senha = 'abcd';
       $ativo = 1;

       try {

         $QRCreate = "INSERT INTO usuario (celular, senha, ativo)VALUES(?,?,?)";
         $Create = $PDO->getConn()->prepare($QRCreate);

        //$Create->bindValue(1,'983173530', PDO::PARAM_STR);
        //$Create->bindValue(2,'abcde', PDO::PARAM_STR);
        //$Create->bindValue(3,'1', PDO::PARAM_INT);


        $Create->bindParam(1,$celular, PDO::PARAM_STR, 10);
        $Create->bindParam(2,$senha, PDO::PARAM_STR, 10);
        $Create->bindParam(3,$ativo, PDO::PARAM_INT, 2);
        //$Create->execute();

        if($Create->rowCount()):
          echo"{$PDO->getConn()->lastInsertId()} - Cadastrado com sucesso <hr>";
        endif;

        //select

        $QrSelect = "SELECT * FROM usuario WHERE userid >= :id";
        $Select = $PDO->getConn()->prepare($QrSelect);

        $Select->bindValue(':id','1');
        $Select->execute();

        if($Select->rowCount() >= 1):
          echo"Retornou {$Select->rowCount()} resultados <hr>";
          $resultado = $Select->fetchAll(PDO::FETCH_ASSOC);
          var_dump($resultado);
        else:
          echo "Nada foi retornado";
        endif;





       } catch (PDOException $e) {
         PHPError($e->getCode(), $e->getMessage(),$e->getFile(),$e->getFile());
       }


      ?>
  </body>
</html>
