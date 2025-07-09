<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graus para Fahrenheit</title>
</head>
<body>

    <h1>Converter graus Celsius para Fahrenheit</h1>
    <form method="POST">
        <label for="temp">Qual a temperatura em Celsius:</label>
        <input type="number" name="temp" required>
        <input type="submit" name="Verificar_temp" value="Verificar">
    </form>
</body>
</html>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['Verificar_temp'])) {

            $temp = $_POST['temp'];


            function Verificar_temp($temp) {

                $multiplicacao18 = 1.8;

                $tempFinal = ($temp * $multiplicacao18) + 32;
                return $tempFinal; 
            }

  
            $resultado = Verificar_temp($temp);

            echo "<h2>A temperatura em Fahrenheit é: $resultado °F</h2>";
        }
    }
    ?>

