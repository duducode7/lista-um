<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Números Pares</title>
</head>
<body>

    <h1>Contar Números Pares entre 1 e um Número Informado</h1>
    <form method="POST" action="">
        <label for="numero">Escolha um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="contar_pares">Contar</button>
    </form>

</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['contar_pares'])) {
       
        $numero = $_POST['numero'];
        $contadorPares = 0; 
        $numerosPares = []; 

        for ($i = 1; $i <= $numero; $i++) {
            if ($i % 2 == 0) { 
                $contadorPares++; 
                $numerosPares[] = $i; 
            }
        }


        echo "<p>Existem $contadorPares números pares entre 1 e $numero.</p>";
        echo "<p>Os números pares são: " . implode(", ", $numerosPares) . ".</p>"; 
    }
}
?>