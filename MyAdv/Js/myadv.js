
var aApp = angular.module('myApp', ['ngRoute', 'ngAnimate']);

aApp.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'Views/locad.php',
            controller: 'locadCtrl'
        })

         .when('/home', {
            templateUrl: 'Views/locad.php',
            controller: 'locadCtrl'
        })  

         .when('/myadv', {
            templateUrl: 'Views/myadv.php',
            controller: 'mysdvCtrl'
        });



});

aApp.controller('locadCtrl', function($scope, $http) {    
    

    var carregarUsuario = function(){
        $http.get("../Php/insertUserMostrar.php").success(function(data, status){
           $scope.usuarios = data;
           
        });

    };

    $scope.adicionarUsuario = function(usuario){
        usuario.data = new Date();
        $http.post('../Php/cadUser.php', usuario).success(function(data){
              delete $scope.usuario;             
               carregarUsuario();

        });                
    };

   
    carregarUsuario();
   
   
});




aApp.controller('mysdvCtrl', function($scope) {    

    $scope.nome = "Luciano Oliveira Silva";
    

    $scope.mycode = "100";

    $scope.myNumber = 0;
    
   // function to evaluate if a number is even
   $scope.isEven = function(value) {

           if (value == 0)
             return true;
          else 
            return false;

           };
   
});