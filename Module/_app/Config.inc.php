<?php

//--dados para conexao

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','adventure');


//--auto load
function __autoload($Class){

$cDir = ['Conn'];
$iDir = null;

foreach ($cDir as $dirName):
  if(!$iDir && file_exists(__DIR__ . "\\{$dirName}\\{$Class}.class.php") && !is_dir(__DIR__ . "\\{$dirName}\\{$Class}.class.php")):
    include_once(__DIR__ . "\\{$dirName}\\{$Class}.class.php");
    $iDir = true;
endif;
endforeach;


if(!$iDir):
  trigger_error("Nao foi possivel incluir {$Class}.class.php", E_USER_ERROR);
    die;
endif;

}



 ?>
