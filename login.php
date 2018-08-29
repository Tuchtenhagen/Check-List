<?php session_start() ?>

<?php include_once 'includes/header.inc.php' ?>

<?php include_once 'includes/menu.inc.php' ?>




	<!--PAINEL DE LOGIN-->
	<div class="row container" style="padding: 32px 200px 0px 200px">
		<p>&nbsp;</p>
		<form action="banco_de_dados/read.php" method="POST" class="col sl12"></form>
		<fieldset class="formulario">
			<legend>Login</legend>


			<!--LOGIN E SENHA-->
			<div class="row" >
    			<form class="col s12">
      				<div class="row">
        				<div class="input-field col s12">
          					<i class="material-icons prefix">account_circle</i>
          					<input id="usuario" type="text" class="validate">
          					<label for="usuario">Usuário</label>
        				</div>
        				<div class="input-field col s12">
          					<i class="material-icons prefix">lock_outline</i>
          					<input id="senha" type="password" class="validate">
          					<label for="senha">Senha</label>
        				</div>
      				</div>

      				<!--BOTÕES-->
					<div class="input-field col sl2"  style="padding: 0px 120px 0px 120px">
						<input type="submit" value="logar" class="btn green">
						<input type="reset" value="limpar" class="btn red">
					</div>
    			</form>
  			</div>

		</fieldset>	
	</div>

	


<?php include_once 'includes/footer.inc.php' ?>