<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET["n"] ?? 0;

    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número: </label>
            <input type="number" name="n" id="n" placeholder="Digite um número">
            <input type="submit" value="Calcular raízes">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
            <?php 
                $raiz = sqrt($num);
                $cubica = pow($num, 1/3);
                echo "Analisando o número $num, temos:";
                echo "<ul>";
                echo "<li>Sua raíz quadrada é ". number_format($raiz, 3, ',', '.') ."</li>";
                echo "<li>Sua raíz cúbica é ". number_format($cubica, 3, ',', '.') ."</li></ul>";
            ?>
    </section>
</body>
</html>