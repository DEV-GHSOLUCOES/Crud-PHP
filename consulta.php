<?php 

//fazendo a conexão com o banco de dados test 
$link = mysqli_connect("localhost", "root", "", "test"); 

//checando a conexão 
if(!$link) { 
printf ("Erro ao conectar ao banco de dados: ", mysqli_connect_errno()); 
} 

//query SQL para selecionar os dados 
$lista = mysqli_query($link, "SELECT * FROM etepac"); 

?> 

<!DOCTYPE html>

<html> 
<head> 
<style> 
table, th, td { 
border-collapse: collapse; 
} 
th, td { 
padding: 5px; 
} th { text-align: left; } 
</style> 

</head> 

<body> 
	<h2>Notas</h2> 
	<table style="width:100%"> 
		<tr>
		    <th>Nome do Aluno</th> 
			<th>Disciplina</th> 
			<th>Nota 1</th> 
		</tr> 
		<?php 
		while($linha = mysqli_fetch_array($lista)) { 
		?> 
		<tr> 
			<td><?= $linha['aluno'] ?></td> 
			<td><?= $linha['disciplina'] ?></td> 
			<td><?= $linha['nota1'] ?></td> 
			<td><a href="formularioalterar.php?id=<?= $linha['id'] ?>">Alterar</td>
			<td><a href="excluir.php?id=<?= $linha['id'] ?>">Excluir</td>
			<td><a href="criarpdf.php?id=<?= $linha['id'] ?>">Gerar Boletim</td>
		</tr> 
		<?php 
	   } 
		?> 
	</table> 

	</body> 
	</html>
