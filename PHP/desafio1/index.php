<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Informe um número</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="numero">Número: </label>
            <input type="number" name="numero" id="inumero" placeholder="Digite um número">
            <input type="submit" style="background-color: blue;" value="Enviar" onclick="msg()">
        </form>
    </section>
    <script>
        function msg(){
            var numero = document.getElementById('inumero').value;
            if (numero == ""){
                event.preventDefault();
                alert("Digite um número")
                
            }
        }
    </script>
</body>
</html>