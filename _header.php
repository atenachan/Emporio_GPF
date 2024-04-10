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
            <a href="index.php" id="catalogLink">Inicio</a>
            <a href="about.php" id="aboutLink">Sobre nós</a>
            <a href="contact.php" id="contactLink">Contato</a>
            <a href="premium.php" id="premiumLink">Premium</a>
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

            <script>
                document.getElementById('submitButton').addEventListener('click', function() {
                    const checkedValues = Array.from(document.querySelectorAll('.filter-checkbox:checked'))
                        .map(checkbox => checkbox.value);

                    const queryString = checkedValues.length > 0 ? `filters=${checkedValues.join(',')}` : '';

                    const newUrl = window.location.pathname + '?' + queryString;
                    window.location.href = newUrl;
                });
            </script>

        <?php else : ?>

            <p>biscoitoS</p>

        <?php endif; ?>

    </aside>



    <main id="content">