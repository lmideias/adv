<?php
include ('db.php');
$pdo = conectar();


$data = json_decode(file_get_contents("php://input"));

$userid = "";
$celular = $data->celular;
$senha = $data->senha;
$ativo = "1";
$mycode = "0";

//Prepara o Cadastro
 
$buscasegura=$pdo->prepare("INSERT INTO `usuario` (`userid`,`celular`, `senha`, `ativo`, `mycode`) VALUES (:userid,:celular, :senha, :ativo,:mycode)");

$buscasegura->bindValue(":userid",$userid);
$buscasegura->bindValue(":celular",$celular);
$buscasegura->bindValue(":senha",$senha);
$buscasegura->bindValue(":ativo",$ativo);
$buscasegura->bindValue(":mycode",$mycode);

//valida os dados

$validar=$pdo->prepare("SELECT * FROM usuario WHERE celular=?");
$validar->execute(array($celular));

if( $validar->rowCount() == 0):
   
	$buscasegura->execute();
    echo"<script type='text/javascript'>";
	echo "alert('Cadastrado com sucesso');";
    echo "</script>";

else:
	
    echo"<script type='text/javascript'>";
	echo "alert('Atenção, não foi possível enviar o cadastro.');";
    echo "</script>";

endif;

echo json_encode($celular);

?>
