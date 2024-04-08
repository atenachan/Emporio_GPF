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

// Montar a consulta SQL para recuperar todos os produtos
$sql = "SELECT * FROM products";

// Executar a consulta SQL
$result = $conn->query($sql);

$products = array();
if ($result->num_rows > 0) {
    // Transformar os resultados em um array associativo
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Retornar os produtos como JSON
echo json_encode($products);

// Fechar conexão com o banco de dados
$conn->close();
?>
