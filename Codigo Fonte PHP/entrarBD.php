<?php
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	if (!$login || !$senha) {
		die("Faltam dados usuario e/ ou senha ");
	}
	@  $db = mysqli_connect('localhost','root','Vitor@1213');
	if (!$db) {
		die("Falha na conexao");
	}
	mysqli_select_db($db,'bd_financas');
	$SQL = "SELECT login, senha
		FROM tb_login
		WHERE login = '$login' AND senha=md5('$senha')";
		$result_id = mysqli_query($db,$SQL) or die("Erro no banco de dados");
		$total = mysqli_num_rows($result_id);
		if ($total>0)	

		{header('location: CookieTest.php');}
		
		else
			{echo "Ususario ou senha invalido";}
?>