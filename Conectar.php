<?php
	class Conectar{
		
		
		public function conectando(){
			try {
			// PDO em ação!
			$pdo = new PDO("mysql:host=localhost;port=3306;dbname=bancoTeste", "root", "");//3306 é a porta padrão do mysql
			echo "Funcionou";

			} catch( PDOException $e ) {
				echo 'Não funcionou';
				echo $e->getMessage();
			}
			return $pdo;
		}
	}	

?>