<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entra 0 e 100...</p>
        <?php 
        $numero = rand(1, 100);
        echo "<p id='numero'>O valor gerado foi $numero</p>";
        ?>
        <input type="button" value="Gerar outro" onclick="javascript:document.location.reload()">
    </section>
    
    
</body>
</html>