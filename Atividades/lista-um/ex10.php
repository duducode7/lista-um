<html lang="pt-BR"> <!-- Mudamos para 'pt-BR' já que estamos em português -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>

<h1>Receber um número e exibir a sequência de Fibonacci até esse número</h1>
<form method="POST">
    <label for="numero">Escolha o número:</label>
    <input type="number" name="numero" required> 
    <input type="submit" name="verificar_numero" value="Verificar"> 
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_numero'])) {

        $numero = $_POST['numero']; 
        $fibonacci = [0, 1]; 


        while (true) {
            $proximo = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2]; 
            if ($proximo > $numero) { 
                break;
            }
            $fibonacci[] = $proximo; 
        }

        echo "<h2>Sequência de Fibonacci até $numero:</h2>";
        echo implode(", ", $fibonacci); 
    }
}
?>

</body>
</html>