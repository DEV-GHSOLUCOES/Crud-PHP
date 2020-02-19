<?php
//usando o metodo get para capturar o valor do campo id do formulario
$id = $_GET['id'];

//fazendo a conexao
$link = mysqli_connect("localhost", "root", "", "test");

//checando a conexao
if (!$link) {
	printf("Erro ao conectar ao banco de dados: ", mysqli_connect_errno());
}

//query SQL para selecionar o daddos 
$lista = mysqli_query($link, "SELECT * FROM etepac WHERE id='$id'");


//Retorna a alinha selecionada
$linha = mysqli_fetch_array($lista);


?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Formulario de cadastro</title>
 	<style>
 		
 		body {

 			text-align: center;
 		}

 		.retangulo{
 			margin: auto;
 			border: 1px solid black;
 			position: relative;
 		}

 		#ret {width: 450px; background-color: georgian;}


 		#ret div{

 			margin: 20px auto;
 			width: 50px;
 			height: 50px;
 		}
 	</style>
 </head>
 <body>
 	<div id="ret" class="retangulo" style="text-align: center;">
 		<br>
 		<label id="texto01">ATUALIZAÇÃO DE CADASTRO</label>
 		<br><br>
 		<form action="alterar.php" method="post">
 			<p>Nome do Aluno:<input type="text" name="aluno" value="<?= $linha['aluno'] ?> "/></p>  	
 			<p>Disciplina:<input type="text" name="disciplina" value="<?= $linha['disciplina'] ?> "/></p>  
 			<p>Nota1:<input type="text" name="nota1" value="<?= $linha['nota1'] ?> "/></p>
			<input type="hidden" name="id" value="<?= $linha['id'] ?>" />  			
 			<p><input type="submit" name="submit" value="alterar"/></p>  


 		</form>


 
 </body>
 </html>


