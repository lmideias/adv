<!DOCTYPE html>
<html ng-app="myApp">
  <head>
   
    <title>My Adventures</title>
   
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" type="text/css" href="Css/MyAdv.css" />   
    <link rel="stylesheet" type="text/css"  href="../Libs/bootstrap.css" />   
    <link rel="stylesheet" type="text/css"  href="../Libs/reset.css" />  

    <script type="text/javascript" src="../Libs/angular-angular.js"></script>
    <script type="text/javascript" src="../Libs/angular-router.js"></script>
    <script type="text/javascript" src="../Libs/angular-animate.js"></script>

     <script type="text/javascript" src="Js/myadv.js"></script>

  </head>
  <body class="ma-body" ng-controller="locadCtrl">

      <div ng-view>
      </div>

  </body>
</html>
