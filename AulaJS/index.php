<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <title>Aula de angular</title>
    <script src="../Libs/angular-angular.js" ></script>
    <style media="screen">
      .box1{width: 500px; height: auto; background-color: #ccc; padding:20px; margin-top: 15px;}
    </style>
  </head>
  <body>
      <script src="../AulaJS/app.js" ></script>
  <div class="box1" ng-controller="aController">

    <input type="text" ng-model="usuario.celular" name="" placeholder="Celular" /><br />
    <input type="text" ng-model="usuario.senha" name="" placeholder="Senha" /> <br />
    <button ng-click="adicionarUsuario(usuario)" ng-disabled="!usuario.celular || !usuario.senha" >Logar</button>


  </div>

  <div class="box1" ng-controller="bController">

  </div>
  <div class="" ng-controller="cController">
    <div class="box1" ng-class="{selecionado: usuario.selecionado}" ng-repeat="usuario in usuarios">
           <div class="tl1">
                 <h5>{{usuario.userid}}</h5>
             </div>
             <div class="tl2">
                 <h5>{{usuario.celular}}</h5>
             </div>
             <div class="tl3">
                 <h5>{{usuario.senha}}</h5>
                  <h5>{{usuario.ativo}}</h5>
                   <h5>{{usuario.mycode}}</h5>
             </div>
             <div class="tl4">
                  <h5><input type="checkbox" ng-model="usuario.selecionado" /></h5>
             </div>
        </div>


  </div>



  </body>
</html>
