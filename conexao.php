<html lang="PT-BR">
<head>
<meta charset="utf-8">
<title>Aula 1</title>
<link href="cssteste/cssteste.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
try {
    // PDO em ação!
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=bancoTeste", "root", "");//3306 é a porta padrão do mysql
	echo "Funcionou";
	$sql = "DELETE FROM `filmes` WHERE nome='Curitiba'";
	$pdo->query($sql);
	$sql = "INSERT INTO `filmes`(`idFilme`, `ano_publicacao`, `nome`, `sinopse`) VALUES (33,34,'Cinderela','sinopseteste')";
	$pdo->query($sql);

} catch( PDOException $e ) {
    echo $e->getMessage();
}
?>



</body>
</html>
