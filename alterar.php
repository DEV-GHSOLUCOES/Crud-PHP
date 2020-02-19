<?php


$link = mysqli_connect("localhost", "root", "", "test");

//checando a conexao
if (!$link) {
	printf("Erro ao conectar ao banco de dados: ", mysqli_connect_errno());
}

//definindo as variaveis para receber os dados do formulario 
$id = $_POST['id'];
$aluno = $_POST['aluno'];
$disciplina = $_POST['disciplina'];
$nota1 = $_POST['nota1'];


//criando a query em SQL para inserir os dados

$query = "UPDATE etepac SET aluno='$aluno', disciplina='$disciplina', nota1='$nota1' WHERE id=$id";

//executando o comando SQL
mysqli_query($link, $query);


//exibe mensagem de confirmação
echo "Dados Atualizados!"

?>