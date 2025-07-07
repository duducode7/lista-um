<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> soma dos números</title>
</head>
<body>

    <h1>Exibir a soma de todos os números entre dois números</h1>
    <form method="POST">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required>
        <input type="submit" name="Verificar" value="Verificar">
    </form>

</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {       

    if (isset($_POST['Verificar'])) { 
         $contador = 0;

        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
       
      
        for ($i= $numero1; $i <= $numero2; $i++) {
             
                $contador = $i + $contador; 
            
        }


        echo "<p>Existem $contador </p>";
    }
}
?>