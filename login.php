<?php
session_start();
include('Conexao/conexao.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$conexao = abreConexao();

$usuario = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "select usuario_id, nome, email, permissao from usuario where email = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $sql);
if (mysqli_num_rows($result)>0)
{
	$row = mysqli_fetch_array($result);
	$_SESSION['usuario'] = $row['nome'];     
	$_SESSION['permissao'] = $row['permissao'];
	mysqli_free_result($result);
	header('Location: home.php');
	lembra_login($linha);
		exit();
		
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
fechaConexao($conexao);

function lembra_login($sql){
	if (!isset($_COOKIE["lembrar_login"])) {
		$sql.= " AND senha = '" . $_POST["senha"] . "'";
		if (!empty($_POST["remember"])) {
			setcookie("lembrar_login", $_POST["email"], time() + (10 * 365 * 24 * 60 * 60));
		} else {
			if (isset($_COOKIE["lembrar_login"])) {
				setcookie("lembrar_login", "");
			}
		}
	}
}
