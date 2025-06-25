<?php

//Define o nome do servidor onde o banco de dados está hospedado (geralmente "localhoat" em ambiente local)
$servidor = "localhost";

//Define o nome de usuário do banco de dados (por padrão no XAMPP, é "root")
$usuario = "root";

//Define a senha do banco de dados (vazia por padrão no XAMPP)
$senha = "";

//Define o nome do banco de dados que será utilizado
$banco = "banco_cadastro";

//Cria uma nova conexão como banco de dados usando a classe mysqli
$conn = new mysqli($servidor, $usuario, $senha, $banco);

//Verifica se houve algum erro na conexão
if($conn->connect_error){
    //Se houve erro, exibe a mensagem e encerra o script
    die("Conexão falhou: " . $conn->connect_error);
}

//Se a conexão for bem sucedida, exibe a mensagem de sucesso
echo "Conexão bem-secedida!";

?>