<?php
// Configurações de conexão com o banco de dados
$host = 'localhost'; // Host do banco de dados
$user = 'root'; // Usuário do banco de dados
$password = ''; // Senha do banco de dados
$dbname = 'blog'; // Nome do banco de dados

// Criando conexão usando MySQLi
$conn = new mysqli($host, $user, $password, $dbname);

// Verificando conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Configurando charset para evitar problemas com caracteres especiais
$conn->set_charset("utf8");
?>
