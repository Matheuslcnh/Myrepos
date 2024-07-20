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
            <h1>Conversor de Moedas v1.0PHP</h1>
            <?php 
                $num = $_GET["numero"];
                $euro = $num / 6.10;
                $numeroFormatado = number_format((float)$euro, 2, '.', '');
                echo "Seus R$ $num equivalem a <strong>€ $numeroFormatado</strong>"
            ?>
            <p></p>
            <strong>*Cotação fixa de R$ 6,10</strong> informada diretamente no código
            <p></p>
            <input type="button" value="Voltar" onclick="voltar()">
        </main>
        <script>
            function voltar(){
                history.go(-1)
            }
        </script>
        
    
</body>
</html>