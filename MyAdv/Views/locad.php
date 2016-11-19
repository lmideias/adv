  <div class="locad-box-forms" >
    
     <div class="lbf-login" >
     	 <h1>Login</h1>
     	 <a href="#myadv" class="btnA orange">MyAdv</a>
     	 <br />
     	  <input type="text" class="form-control input-sm " ng-model="usuario.celular" name="" placeholder="Celular" /><br />
          <input type="text" class="form-control input-sm" ng-model="usuario.senha" name="" placeholder="Senha" /> <br />

          <button class="btn btn-link btn-success" ng-click="adicionarUsuario(usuario)" ng-disabled="!usuario.celular || !usuario.senha" >Logar</button> 


     </div>

      <div class="lbf-cadastro">
     	  <div class="table-linha" ng-class="{selecionado: usuario.selecionado}" ng-repeat="usuario in usuarios">
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



  </div>