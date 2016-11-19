<div class="mabox" ng-controller="mysdvCtrl">
	<div class="mabox-center">

	 <a href="#home" class="btnA orange">Home</a>
    </div>

    <div class="box-ad1">

          <h1>{{mycode}}</h1><h1>{{nome}}</h1>   <button class="btn btn-warning " ng-click="" ng-disabled="" >*</button>   
    	
    </div>


    <div class="box-ad2" ng-show="isEven(myNumber)">

      <input type="text" class="form-control input-sm" ng-model="usuario.senha" name="" placeholder="Senha" /> <br />

          <button class="btn btn-warning " ng-click="adicionarUsuario(usuario)" ng-disabled="!usuario.senha" >Salva</button> 
    
    	
    </div>













</div>