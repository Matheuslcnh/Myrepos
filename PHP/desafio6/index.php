
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $sal = $_GET["sal"] ?? 0;
        $salmin = 1400;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário : </label>
            <input type="number" name="sal" id="sal" step="0.001" placeholder="Digite seu Salário">
            <p>Considerando o salário mínimo de R$ <?=number_format($salmin, 2, ',', '.')?></p>
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h1>Resultado Final</h1>
        <?php 
            $fim = $sal / $salmin;
            $fim_inteiros = floor($fim);
            $res =  $sal - ($fim_inteiros * $salmin) ;
            echo "Uma pessoa que ganha um salário de R$ ". number_format($sal, 2, ',', '.') . " ganha ". number_format($fim_inteiros, 0, ',', '.') . " salários mínimos + <p>R$ ". number_format($res, 2, ',', '.') . "";
            echo "<p></p>"

        ?>
    </section>
</body>
</html>