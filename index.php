<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/index.css">
  <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <title>Empório GPF</title>
  
</head>
<body>

<header>
  <div class="h">
    <h1><img src="./assets/img/logo.png" alt="logo do empório gpf"></h1>
  <form action="/search" method="get">
    <input type="text" id="search" name="q" placeholder="busque aqui...">
    <button id="searchButton" type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
  </div>
  <nav>
    <a href="#" id="catalogLink">Inicio</a>
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

</main>

<div id="ad">
  <h2>Propaganda</h2>
</div>

<script src="./assets/js/main.js" type="module"></script>
</body>
</html>