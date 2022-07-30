<?php


	function criarSessao($usuario){
		session_start();
		$_SESSION["login"] = $_POST["login"];
		header('Location:areacliente.php');
		exit;
	}

	if (isset($_POST['login'])) {
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];


		try {
			$bd = new PDO("mysql:host=localhost; dbname=secitec", 'ifpb', 'ifpb');
			$consulta = "select usuario, senha from usuario where usuario = '$usuario' and senha = '$senha'"; 

			foreach ($bd->query($consulta) as $tupla) {
				criarSessao($usuario);
			}

		}
		catch(PDOException $e) {
			echo $e->getMessage();
			
		}

	}

	include "login.html";

?>