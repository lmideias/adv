<?php
include ('db.php');
$pdo = conectar();


$data = json_decode(file_get_contents("php://input"));

$userid = "";
$celular = $data->celular;
$senha = $data->senha;
$ativo = "1";
$mycode = "0";
 
$q = "INSERT INTO `usuario` (`userid`,`celular`, `senha`, `ativo`, `mycode`) VALUES (:userid,:celular, :senha, :ativo,:mycode)";

$query = $pdo->prepare($q);

$execute = $query->execute(array(
	":userid" => $userid,
	":celular" => $celular,
	":senha" => $senha,
	":ativo" => $ativo,
	":mycode" => $mycode
));

echo json_encode($celular);

?>
