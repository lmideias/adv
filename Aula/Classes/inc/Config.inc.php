<?php
function __autoload($Class){
  $dirName = 'Classes';

  if(file_exists("{$dirName}/{$Class}.class.php")):
    require_once("{$dirName}/{$Class}.class.php");
  else:
    die("Erro ao incluir arquivo");
  endif;

}


 ?>
