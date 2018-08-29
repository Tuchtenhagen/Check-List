<?php 
	session_start();
	include_once 'conexao.php';

	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);


	$querySelect = $link->query("select nome,senha from usuario");

	while($registros  = $querySelect->fetch_assoc()):
		$usuariobanco = $registros['nome'];
		$senhabanco = $registros['senha'];
	endwhile;


	if(usuario == usuariobanco && md5($senha) == senhabanco):  //NÃO SEI SE ISSO VAI FUNCIONAR!!!!

		$_SESSION['msg'] = "<p class= 'center red-text'>".'Senha incorreta'."</p>";
		header("location:../");
	endif;
 ?>