<?php

//--- estrutura de controle --------

//---se , senao
$teste = true;
if($teste)
{
  echo "true";
}
else
{
  echo "false";
}

echo "<br />";

//--se, senao se, senao--

$teste = true;
$resultado = "";
if($teste && !empty($resultado)):
  echo "positivo e com resultado";
elseif($teste && empty($resultado)):
  echo "positivo e sem resultado";
else:
  echo"Teste negativo";
endif;

echo "<br />";

//---switch -----

$mes = 2;

switch ($mes):
  case 1:
      echo"janeiro";
    break;
    case 2:
        echo"fevereiro";
      break;
      case 3:
          echo"março";
        break;

  default:
    echo"escolha errada";
    break;
endswitch;


echo "<br />";echo "<br />";

//--- estrutura de controle --------

//---while - enquanto acontecer --

$i = 1;
while($i <= 10):
  echo "{$i} X 8 = " . $i * 8 . "<br />";
  $i ++;
endwhile;

echo "<br>";echo "<br>";

//--for - execute x vezes

for($e = 1; $e <= 10; $e++):
   echo "{$e} X 10 = " . $e * 10 . "<br />";
endfor;

echo "<br>";echo "<br>";

//foreach - Array

$arr = ["php","css","html"];

foreach ($arr as $cursos):
  echo"Meu curso de {$cursos}<br>";
endforeach;

echo "<br>";echo "<br>";

$arrName = ["Nome" =>'Luciano',"Idade" => 39];

foreach ($arrName as $key => $value):
  echo"{$key} = {$value} <br>";
endforeach;



 ?>
