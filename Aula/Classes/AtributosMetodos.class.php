<?php

class AtributosMetodos
{
  var $Nome;
  var $Idade;
  var $Profissao;

  function setUsuario($Nome, $Idade, $Profissao)
  {
     $this->Nome = $Nome;
     $this->Idade = $Idade;
     $this->Profissao = $Profissao;
  }

//--metodo pegar usuario

  function getUsuario(){
    return "{$this->Nome} tem {$this->Idade} Anos de Idade e trabalha{$this->Profissao}";
  }

  //--pegar o objeto ClassesObjetos

  function getClasse(){
    echo"<pre>";
    print_r($this);
    echo"</pre>";
  }

//--metodo inserir idade

function setIdade($Idade){
  if(!is_int($Idade)):
    die('Idade errada');
  else:
    $this->Idade = $Idade;
  endif;
}

//--metodo atribuir Idade
  function Envelhecer(){
      $this->Idade =   $this->Idade +1;
  }

}




 ?>
