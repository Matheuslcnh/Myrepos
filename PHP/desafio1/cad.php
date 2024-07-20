<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
        <main>
            <h1>Resultado Final</h1>
            <?php
                $num = $_GET["numero"];
                $ant = $num - 1;
                $sus = $num + 1;
                echo "<p>Seu número é o $num.<br> Seu antecessor é o $ant.<br> Seu sucessor é o $sus<br>"
            ?>
            <p></p>
            <input type="button" value="Voltar" onclick="javascript:window.location.href='index.php'">
        </main>
        
    
</body>
</html>