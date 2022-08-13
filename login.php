<?php
	// session_start();

	// $login = $_POST['usuario'];
	// $senha = $_POST['senha'];

	// $servername = "localhost";
	// $username = "ifpb";
	// $password = "ifpb";
	// $dbname = "secitec";

	
	// $conn = new mysqli($servername, $username, $password, $dbname);

	// if ($conn->connect_error) {
	// 	die("Connection failed: " . $conn->connect_error);
	// }

	// $sql = "SELECT usuario, senha FROM usuario WHERE usuario = '$login' AND senha = '$senha'";
	// $result = $conn->query($sql);

	// if ($result->num_rows > 0) {

	// 		$_SESSION['usuario'] = $login;
	// 		$_SESSION['senha'] = $senha;
	// 		header('location:areacliente.php');
			
	// }
	// 	else {
	// 	echo "0 results";
	// 	unset ($_SESSION['usuario']);
	// 	unset ($_SESSION['senha']);
	// 	header('location:login.html');
	// }
	// $conn->close();


?>

<?php
// session_start inicia a sessão
	session_start();
	// as variáveis login e senha recebem os dados digitados na página anterior
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
	$servername = "localhost";
	$username = "ifpb";
	$password = "ifpb";
	$dbname = "secitec";

	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT usuario, senha FROM usuario WHERE usuario = '$login' AND senha = '$senha'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

			$_SESSION['usuario'] = $login;
			$_SESSION['senha'] = $senha;
			header('location:areacliente.php');
			
	}
		else {
		echo "0 results";
		unset ($_SESSION['usuario']);
		unset ($_SESSION['senha']);
		header('location:login.html');
	}
	$conn->close();
?>

