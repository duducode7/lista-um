<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>


    <h1>Calcular Tabuada</h1>
    
    <form method="POST" action="">
        <label for="tabuada">Escolha um número para saber se:</label>
        <input type="number" id="tabuada" name="tabuada" required>
        <button type="submit" name="verificar_tabuada">Verificar</button>
    </form>

    

</body>
</html>
<?php

     if($_SERVER['REQUEST_METHOD'] == 'POST') {
         if(isset($_POST['verificar_tabuada'])) {
            $numero = $_POST['tabuada'];
            for ($i=1; $i<=10;$i++){
                $resultado = $numero * $i;
                echo "$numero * $i = $resultado <br>";
            }
         };
    }; 
    ?>
