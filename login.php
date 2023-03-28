<!DOCTYPE html>
<html>
<head>
	<title>Página de Login</title>
</head>
<body>

	<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$login = $_POST["login"];
		$senha = $_POST["senha"];

		if($login == "usuario" && $senha == "12345") {
			header("Location: principal.php");
			exit;
		} else {
			echo "<p>usuario e/ou senha invalidos</p>";
		}
	}
	?>

	<h2>Login</h2>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="login">Usuário:</label>
		<input type="text" id="login" name="login"><br>

		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha"><br>

		<input type="submit" value="Entrar">
	</form>

</body>
</html>
