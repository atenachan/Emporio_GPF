<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Empório GPF</title>
</head>

<body>

    <header>
        <div class="h">
            <h1><img src="./assets/img/logo.png" alt="logo do empório gpf"></h1>

        </div>
        <nav>
            <a href="index.php" class="rightlink" id="catalogLink">Inicio</a>
            <a href="about.php" class="rightlink" id="aboutLink">Sobre nós</a>
            
            <a href="contact.php" class="leftlink" id="contactLink">Contato</a>
            <a href="premium.php" class="leftlink" id="premiumLink">Premium</a>
        </nav>
    </header>

    <aside>


        <?php if ($_SERVER['SCRIPT_NAME'] == '/index.php') : ?>

            <h2>Filtros</h2>
            <form action="/" method="GET" id="form">
                <ul>
                    <li><input name="filters" type="checkbox" class="filter-checkbox" value="Eletronicos">Eletronicos</li>
                    <li><input name="filters" type="checkbox" class="filter-checkbox" value="Roupas">Roupas</li>
                    <li><input name="filters" type="checkbox" class="filter-checkbox" value="Maquiagem">Maquiagem</li>
                    <li><input name="filters" type="checkbox" class="filter-checkbox" value="Perfumes">Perfumes</li>
                    <li><input name="filters" type="checkbox" class="filter-checkbox" value="Alimentos">Alimentos</li>
                </ul>
                <button type="button" id="submitButton">Exibir</button>
            </form>

                <form id="orderForm">
                    <label id="orden">Ordenar por preço:</label>
                    <div>
                    <button type="button" id="ascButton" class="orderButton"><i class="fa-solid fa-arrow-up"></i></button>
                    <button type="button" id="descButton" class="orderButton"><i class="fa-solid fa-arrow-down"></i></button>
                    </div>
                    <input type="hidden" name="order" id="orderInput">
                </form>


            <script>
                document.getElementById('submitButton').addEventListener('click', function() {
                    const checkedValues = Array.from(document.querySelectorAll('.filter-checkbox:checked'))
                        .map(checkbox => checkbox.value);

                    const queryString = checkedValues.length > 0 ? `filters=${checkedValues.join(',')}` : '';

                    const newUrl = window.location.pathname + '?' + queryString;
                    window.location.href = newUrl;
                });

                document.addEventListener('DOMContentLoaded', function () {
                    const ascButton = document.getElementById('ascButton');
                    const descButton = document.getElementById('descButton');
                    const orderInput = document.getElementById('orderInput');

                    orderInput.value = 'random';

                    ascButton.addEventListener('click', function () {
                        orderInput.value = 'asc';
                        updateUrlAndReload();
                    });

                descButton.addEventListener('click', function () {
                    orderInput.value = 'desc';
                    updateUrlAndReload();
                });

                function updateUrlAndReload() {
                    const currentUrl = new URL(window.location.href);
                    currentUrl.searchParams.set('order', orderInput.value);
                    window.location.href = currentUrl.toString();
                }
                });

            </script>

        <?php else : ?>

            <p class="cookie">Anuncios</p>

            <style>
                .cookie {
                    color: #ffff;
                }
                aside {
                    height: 70%;
                }
            </style>

        <?php endif; ?>


    </aside>



    <main id="content">