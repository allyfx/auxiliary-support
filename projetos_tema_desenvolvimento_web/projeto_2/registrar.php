<?php
	try {
		$conn = new PDO(
		  "mysql:host=localhost;dbname=projeto_2;charset=utf8",
		  "root",
		  ""
	    );
	} catch ( PDOException $err) {
		header('Location: /projeto_2/error.phtml');
	}

	$query = 'insert into tb_usuarios(nome, email, senha)values(?, ?, ?)';

	$stmt = $conn->prepare($query);

	$stmt->bindValue(1, $_POST['nome']);
	$stmt->bindValue(2, $_POST['email']);
	$stmt->bindValue(3, $_POST['senha']);

	$stmt->execute();

	header('Location: /projeto_2/success.phtml');
?>