<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma das vogais</title>
</head>
<body>

    <h1>Receber uma palavra e exibir a quantidade de vogais.</h1>
    <form method="POST">
        <label for="palavra">Escolha sua palavra:</label>
        <input type="text" name="palavra" required>
        <input type="submit" name="Verificar_string" value="Verificar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {       
        if (isset($_POST['Verificar_string'])) {
            $palavra = $_POST['palavra'];
            
            $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
            $quantidade_vogais = 0;

            for ($i = 0; $i < strlen($palavra); $i++) {
    
                if (in_array($palavra[$i], $vogais)) {
                    $quantidade_vogais++;
                }
            }

            echo "<h2>A quantidade de vogais na palavra $palavra é: $quantidade_vogais</h2>";
        }
    }
    ?>

</body>
</html>