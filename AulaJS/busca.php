<?php
include ('../Php/db.php');
$pdo = conectar();

$buscarusuario =$pdo->prepare("SELECT * FROM `usuario`");
$buscarusuario->execute();


while($linha = $buscarusuario->fetch(PDO::FETCH_ASSOC)){

	$data[]=$linha;
}

print json_encode($data);

?>
