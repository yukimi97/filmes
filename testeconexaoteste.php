<?php

	include (Conectar.php);
	class ConexaoTeste{
		
		try {
			$conectar = new Conectar();
			$pdo=$conectar->conectando();
			$sql = "DELETE FROM `filmes` WHERE nome='Aracaju'";
			$sql = "INSERT INTO `filmes`(`idFilme`, `ano_publicacao`, `nome`, `sinopse`) VALUES (31,34,'MalevolaSSS','sinopseteste')";
			$pdo->query($sql);
		} catch( PDOException $e ) {
			echo $e->getMessage();
		}
		
	}

?>