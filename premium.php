<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Assinatura</title>
</head>
<body>
    <h1>Escolha o seu plano de assinatura:</h1>
    <form action="processar_assinatura.php" method="post">
        <input type="radio" name="plano" value="bronze" id="bronze">
        <h2><label for="bronze">Plano Bronze - R$29,99/mês</label><br></h2>

        <input type="radio" name="plano" value="prata" id="prata">
        <h2><label for="prata">Plano Prata - R$49,99/mês</label><br></h2>
       
        
     
        <input type="radio" name="plano" value="ouro" id="ouro">
        <h2><label for="ouro">Plano Ouro - R$79,99/mês</label><br></h2>
        <h3>Acesso livre a nossa plataforma de stream</h3>
        <h3>Entregas grátis ilimitadas </h3>
        
        <input type="submit" value="Assinar">

    </form>
</body>
</html>
