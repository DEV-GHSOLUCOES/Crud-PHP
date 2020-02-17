<?php

 $link =  mysqli_connect("localhost", "root",  "", "test");

 //checando a conexao
 if (!$link) {

 		printf("Erro ao conectar ao banco de dados: ", mysqli_connect_errno());
 	}
 //Definindo as variaveis para receber os dados do formulario
 $aluno = $_POST['aluno'];
 $disciplina = $_POST['disciplina'];
 $nota1 = $_POST['nota1'];
 $nota2 = $_POST['nota2'];
 $nota3 = $_POST['nota3'];


//criando a query em SQL para inserir os dados no banco
 $query = "INSERT INTO etepac ( aluno, disciplina, nota1, nota2, nota3) 
 VALUES ('$aluno', '$disciplina', '$nota1', '$nota2', '$nota3')";

//executando o comando SQL
 mysqli_query($link, $query);

 //exibe mensagem de confirmação
 echo "Dados Inseridos" ;


?>