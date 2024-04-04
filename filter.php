<?php
// Conexão com o banco de dados
include_once './connection.php';

// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
  die("Erro na conexão: " . $conn->connect_error);
}

// Monta a consulta SQL baseada nos parâmetros do formulário
$sql = "SELECT * FROM products WHERE 
        (product_category = ? OR ? IS NULL) AND 
        (product_price >= ? OR ? IS NULL) AND 
        (product_price <= ? OR ? IS NULL)";

// Prepara a declaração SQL
$stmt = $conn->prepare($sql);

// Liga os parâmetros
$stmt->bind_param("ssdddd", $categoria, $categoria, $preco_min, $preco_min, $preco_max, $preco_max);

// Obtém os valores do formulário
$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : null;
$preco_min = isset($_GET['preco_min']) ? floatval($_GET['preco_min']) : null;
$preco_max = isset($_GET['preco_max']) ? floatval($_GET['preco_max']) : null;

// Executa a consulta
$stmt->execute();

// Obtém o resultado da consulta
$result = $stmt->get_result();

// Exibe os resultados
while ($row = $result->fetch_assoc()) {
  echo "Nome do Produto: " . $row['product_name'] . "<br>";
  echo "Descrição: " . $row['product_description'] . "<br>";
  echo "Preço: $" . $row['product_price'] . "<br>";
  echo "<hr>";
}

// Fecha a declaração e a conexão
$stmt->close();
$conn->close();
?>
