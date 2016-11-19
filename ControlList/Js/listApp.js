

var aApp = angular.module('myApp', ['ngRoute', 'ngAnimate']);

aApp.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'views/home.php',
            controller: 'homeController'
        })

         .when('/home', {
            templateUrl: 'views/home.php',
            controller: 'homeController'
        })

        .when('/usuario', {
            templateUrl: 'views/cUsuario.php',
            controller: 'usuarioController'
        })
        .when('/evento', {
            templateUrl: 'views/cEvento.php',
            controller: 'eventoController'
        })

         .when('/lista', {
            templateUrl: 'views/cLista.php',
            controller: 'listaController'
        });


});

aApp.controller('homeController', function($scope) {
    $scope.pageClass = 'aLeft';
    $scope.titulo = "Evento";

    $scope.contatos = [
    {nome: "gavea", vagas:"100", livre:"100", participante:"0"},
     {nome: "Urca", vagas:"100", livre:"100", participante:"0"},
      {nome: "Papagaio", vagas:"100", livre:"100", participante:"0"},
       {nome: "gavea", vagas:"100", livre:"100", participante:"0"},
     {nome: "Urca", vagas:"100", livre:"100", participante:"0"},
      {nome: "Papagaio", vagas:"100", livre:"100", participante:"0"},
       {nome: "Costao", vagas:"100", livre:"100", participante:"0"}

    ];

    $scope.participantes = "0";

    $scope.imagens = [
        {img1:"../Imagens/config.png"}       
    ];
});

aApp.controller('usuarioController', function($scope) {
    $scope.pageClass = 'aLeft';

     $scope.titulo = "Usuario";
});

aApp.controller('eventoController', function($scope) {
    $scope.pageClass = 'aLeft';

     $scope.titulo = "Evento";
});

aApp.controller('listaController', function($scope) {
    $scope.pageClass = 'aLeft';
    $scope.titulo = "Lista de Presença";
    $scope.participantes = [
    {nome: "Rodrigo maia", contato:"20140 0254", crianca:"x"},
     {nome: "Rodrigo maia", contato:"20140 0254", crianca:"x"},
      {nome: "Rodrigo maia", contato:"20140 0254", crianca:"x"},
       {nome: "Rodrigo maia", contato:"20140 0254", crianca:"x"},
        {nome: "Rodrigo maia", contato:"20140 0254", crianca:"x"},

    ];




});