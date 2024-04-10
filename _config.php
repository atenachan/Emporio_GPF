<?php
// Conexão com o banco de dados (substitua as credenciais conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpf";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function debug($target, $exit = false)
{
    echo "<pre>";
    print_r($target);       // Exibe um debug mais simplificado e limpo
    // var_dump($target);   // Exibe um debug mais completo
    echo "</pre>";
    if ($exit) exit();
}
