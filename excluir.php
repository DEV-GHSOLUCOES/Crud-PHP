<?php


$link = mysqli_connect("localhost", "root", "", "test");

//checando a conexao
if (!$link) {
	printf("Erro ao conectar ao banco de dados: ", mysqli_connect_errno());
}

//definindo as variaveis para receber os dados do formulario 
$id = $_GET['id'];



//criando a query em SQL para deletar os dados

$query = "DELETE FROM etepac WHERE id=$id";

//executando o comando SQL
mysqli_query($link, $query);


//exibe mensagem de confirmação
echo "Dados excluidos com sucesso!"

?>