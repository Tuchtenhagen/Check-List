<?php session_start() ?>

<?php include_once 'includes/header.inc.php' ?>

<?php include_once 'includes/menu.inc.php' ?>


	<div class="row container">
		<p>&nbsp;</p>
		<form action="banco_de_dados/read.php" method="POST" class="col sl12"></form>
		<fieldset class="formulario">
			<legend>PROCEDIMENTOS AQUI DENTRO </legend>

			<ul class="collapsible">
		  		<li>
		   	 		<div class="collapsible-header">
		      			<i class="material-icons">format_list_bulleted</i>
		      			<h5>Titulo 1</h5>
		      		</div>
		    		<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
		  		</li>

		  		<li>
		   	 		<div class="collapsible-header">
		      			<i class="material-icons">format_list_bulleted</i>
		      			<h5>Titulo 2</h5>
		      		</div>
		    		<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
		  		</li>

		  		<li>
		   	 		<div class="collapsible-header">
		      			<i class="material-icons">format_list_bulleted</i>
		      			<h5>Titulo 3</h5>
		      		</div>
		    		<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
		  		</li>		  				  		
			</ul>
			

		</fieldset>	

	</div>


	

<?php include_once 'includes/footer.inc.php' ?>