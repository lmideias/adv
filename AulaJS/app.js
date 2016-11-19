var app = angular.module("myApp",[]);

$titulo = "Titulo universal";

app.controller("aController", function($scope, $http){
$scope.nome ="Controller A";
$dia = 25;
$mes= 11;
$ano = 2016
$dian = 26;
$mesn = 11;
$anon= 1976;

$anoh = $ano - $anon;
if($dia >= $dian && $mes >= $mesn){
  $idade = $ano - $anon;
}else {
  {
    $idade = ($ano - $anon)-1;
  }
}

$scope.idade = $idade;


$scope.adicionarUsuario = function(usuario){
    usuario.data = new Date();
    $http.post('../AulaJS/inserir.php', usuario).success(function(data){
          delete $scope.usuario;
    });
};


});

app.controller("bController", function($scope){
$scope.nome ="Controller B";
$scope.titulo = $titulo;
$scope.numero = 10;

});

app.controller("cController", function($scope, $http){

  var carregarUsuario = function(){
      $http.get("../AulaJS/busca.php").success(function(data, status){
         $scope.usuarios = data;
         console.log(data);
      });
    };
     carregarUsuario();
});
