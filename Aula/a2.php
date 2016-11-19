<?php

$arr = array();

$arr['nome'] = "Robson";
$arr['idade'] = 29;
$arr['letra'] = "R";
var_dump($arr);

$int = 10;
$float = 1.0;
echo"<br />";echo"<br />";
echo $int, $float;
echo"<br />";echo"<br />";

//mostra o objeto
var_dump($float);

//------------
echo"<br />";echo"<br />";
//variavel int e bool
$idade = 20;
$velho = ($idade > 19);

echo"<br />";echo"<br />";

var_dump($velho);
echo"<br />";echo"<br />";

//if
if($idade > 19):
  echo "Velho";
endif;
echo"<br /> <br /> <br />";echo"<br />";


$obj = new stdClass();
$obj->Nome = "Maria";
$obj->Idade = 30;
var_dump($obj);

echo"<br /> <br /> <br />";

$data = 1976;
$datah = 2016;
$idadeh = ($datah - $data);
echo $idadeh;


const DEV_NAME = "eun";
const DEV_AGE = 29;
echo"<br /> <br /> <br />";
echo "Meu nome: ".DEV_NAME."Eu tenho".DEV_AGE."anos";


echo"<br /> <br /> <br />";

$nome2 = "Luciano";
define("DB_NAME",$nome2);
echo DB_NAME;

//--variaveis e operaçoe

$var = 10;
$var += 10;
$var -= 10;
$var *= 10;
$var /= 10;

$a = 10;
$b = 2;
$c = $a + $b;
$d = ($a * $b)/$b;
$e = $d - $b;
echo"<br />";
echo $c; echo"<br />";

echo $d;echo"<br />";
echo $e;echo"<br />";

//--relaçoes
$v = 5;
$x = 2;

if($v == $x): endif; //se igual
if($v === $x): endif; //se identico

if($v != $x): endif; //se diferente
if($v !== $x): endif; //se nao identico

if($v > $x): endif; //se maior
if($v >= $x): endif; //se maior ou igual
if($v < $x): endif; //se menor
if($v <= $x): endif; //se menor ou igual
if($v == $x): endif; //se igual

if($v): endif; //se existe

if(isset($v)): endif; //se existe
if(!isset($v)): endif; //se nao existe

if(empty($v)): endif; //se estiver vazio
if(!empty($v)): endif; //se nao estiver vazio

//operadores logicos

echo"<br />";
if($v && $x):
  echo "existe";
endif;
echo"<br />";
if($v || $x):
  echo "existe";
endif;
echo"<br />";
if($v and $x):
  echo "existe";
endif;
echo"<br />";
if($v && $x && empty($v)):
  echo "existe sim";
else:
    echo "nao existe";
endif;

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

     ?>
  </body>
</html>
