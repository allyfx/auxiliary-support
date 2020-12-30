<?php
	try {
		$conn = new PDO(
		  "mysql:host=localhost;dbname=projeto_2;charset=utf8",
		  "root",
		  ""
	    );
	} catch ( PDOException $err) {
		header('Location: /projeto_3/error.phtml');
	}

	$query = 'select id, nome, email, senha from tb_usuarios where email = :email and senha = :senha';

	$stmt = $conn->prepare($query);

	$stmt->bindValue(':email', $_POST['email']);
	$stmt->bindValue(':senha', $_POST['senha']);

	$stmt->execute();

	$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

	if(isset($usuario['id'])) {
		session_start();

		$_SESSION['id'] = $usuario['id'];
		$_SESSION['nome'] = $usuario['nome'];
		$_SESSION['email'] = $usuario['email'];
		$_SESSION['senha'] = $usuario['senha'];

		header('Location: /projeto_3/success.phtml');
	} else {
		header('Location: /projeto_3/error_login.phtml');
	}
?>