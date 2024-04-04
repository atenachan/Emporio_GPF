<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/index.css">
  <title>Empório GPF</title>
  
</head>
<body>

<header>
  <div class="h">
    <h1><img src="./assets/img/logo/logo.png" alt="logo do empório gpf"></h1>
  <form action="/search" method="get">
    <input type="text" id="search" name="q" placeholder="busque aqui...">
    <button id="searchButton" type="submit"><i class="fa fa-search"></i></button>
  </div>
  <nav>
    <a href="#" id="catalogLink">Catálogo</a>
    <a href="#" id="aboutLink">Sobre nós</a>
    <a href="#" id="contactLink">Contato</a>
    <a href="#" id="premiumLink">Premium</a>
  </nav>
</header>

<aside>
<h2>Filtros</h2>
<form action="" method="GET">
  <ul>
    <li><input type="checkbox" name="category[]" value="Electronics">Eletronicos</li>
    <li><input type="checkbox" name="category[]" value="Clothing">Roupas</li>
    <li><input type="checkbox" name="category[]" value="Makeup">Maquiagem</li>
    <li><input type="checkbox" name="category[]" value="Perfume">Perfumes</li>
    <li><input type="checkbox" name="category[]" value="Food">Alimentos</li>

    <input type="submit" value="Filter">
  </ul>
  </form>
</aside>

<main id="content">
<h2>Bem Vindo!</h2>
</main>

<div id="ad">
  <h2>Propaganda</h2>
</div>

<?php
    // Verifica se a categoria foi selecionada no formulário
    if (isset($_GET['category'])) {
        // Conexão com o banco de dados
        $conn = mysqli_connect("localhost", "root", "", "gpf");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepara a consulta SQL
        $category = $_GET['category'];
        $sql = "SELECT * FROM products WHERE product_category = '$category'";

        // Executa a consulta SQL
        $result = mysqli_query($conn, $sql);

        // Verifica se há resultados
        if (mysqli_num_rows($result) > 0) {
            // Exibe os resultados
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div>";
                echo "<h3>" . $row['product_name'] . "</h3>";
                echo "<p>Description: " . $row['product_description'] . "</p>";
                echo "<p>Price: $" . $row['product_price'] . "</p>";
                echo "<img src='" . $row['product_image'] . "' alt='" . $row['product_name'] . "' width='100'>";
                echo "</div>";
            }
        } else {
            echo "No products found.";
        }

        // Fecha a conexão com o banco de dados
        mysqli_close($conn);
    }
    ?>


<script src="./assets/js/main.js" type="module"></script>
</body>
</html>