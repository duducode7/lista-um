<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Palíndromo</title>
</head>
<body>

<h1>Verificar se uma palavra é um palíndromo</h1>
<form method="POST">
    <label for="palavra">Escolha uma palavra:</label>
    <input type="text" name="palavra" required> 
    <input type="submit" name="verificar_palavra" value="Verificar"> 
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_palavra'])) { 

        $palavra = $_POST['palavra']; 
        $palavra_invertida = strrev($palavra); 

     
        if (strcasecmp($palavra, $palavra_invertida) == 0) { 
            echo "<h2>\"$palavra\" é um palíndromo!</h2>";
        } else {
            echo "<h2>\"$palavra\" não é um palíndromo.</h2>";
        }
    }
}
?>