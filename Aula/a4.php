<?php

//---Tabuada Simples

function Tabuada(){
  echo "<b>Tabuada de 5 </b><br>";
  for($x = 1; $x <= 10; $x++):
    echo"5 x {$x} = ". 5 * $x ."<br>";
  endfor;
  echo "------------------------------<br>";

}

echo Tabuada();



//---Tabuada recursiva

function myTabuada($numero){
  echo "<b>Tabuada de {$numero} </b><br>";
  for($x = 1; $x <= 10; $x++):
    echo"{$numero} x {$x} = ". $numero * $x ."<br>";
  endfor;
  echo "------------------------------<br>";

}

echo myTabuada(4);
echo myTabuada(5);
echo myTabuada(7);

//--funçao validar email


function EmailValidade($email){
  if(filter_var($email, FILTER_VALIDATE_EMAIL)):
    return true;
  else:
    return false;
  endif;
}

$nome = "Luciano eun";
$email = "lucianoeun@lmi.com";

//--testar se os campos foram preenchidos

if(empty($nome) || empty($email)):
  echo "Informe seu nome e email";

  elseif(!EmailValidade($email)):
      echo "Informe seu email valido";
  else:
    $users = [
      'curso@lmi.com',
      'luciano@lmi.com'
    ];

//verifica se o conteudo da variavel email existe na fonte de dados users

    if(in_array($email, $users)):
      echo "Esses dados ja existem, insira outro";
    else:
        echo "Cadastrado com sucesso";
    endif;
endif;


//--comprar bolçacontecer

$bolsa = "marrom";

if(!empty($bolsa)):
  if($bolsa == "vermelha"):
    echo "Amor, comprei a bolsa que voce queria";
  elseif($bolsa == "preta"):
     echo "Amor, comprei a preta nao tinha vermelha";
  else:
    echo "Amor, nao tem as cores posso levar outra";
    $amor = true;
    if($amor):
        echo "Pode sim, traga uma";
    else:
        echo "Pode nao, ta fudido";
    endif;
  endif;
else:
  echo "Amor, nao tem mais bolsas";
endif;


 ?>
