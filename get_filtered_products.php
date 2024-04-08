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

// Receber as categorias selecionadas
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

if (isset($request->categories)) {
    $categories = $request->categories;

    // Montar a consulta SQL com base nas categorias selecionadas
    $sql = "SELECT * FROM products WHERE product_category IN ('" . implode("','", $categories) . "')";

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
} else {
    // Se nenhuma categoria for selecionada, retornar uma lista vazia
    echo json_encode(array());
}

// Fechar conexão com o banco de dados
$conn->close();
?>
