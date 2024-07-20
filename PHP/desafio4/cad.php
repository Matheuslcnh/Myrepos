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
            <h1>Analisador de Número Real</h1>
            <?php 
                $num = $_GET["numero"];
                echo "<p>Analisando o número ". number_format($num, 3, ',', '.') . " informado pelo usuário:</p>";

                $int = (int) $num;
                $fra= $num - $int;

                echo "<ul><li> A parte inteira do Número é <strong>". number_format($int, 0, ',', '.') ."</strong></li>";
                echo "<li> A parte fracionária do Número é <strong>". number_format($fra, 3, ',', '.') ."</strong></li></ul>";
                
            ?>
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