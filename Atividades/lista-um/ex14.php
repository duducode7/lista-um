<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano Bissexto</title>
</head>
<body>

    <h1>Verificar se é um ano bissexto</h1>
    <form method="POST">
        <label for="ano">Informe o ano:</label>
        <input type="number" name="ano" required>
        <input type="submit" name="Verificar_ano" value="Verificar">
    </form>
</body>
</html>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['Verificar_ano'])) {

            $ano = $_POST['ano'];


            if (($ano % 4 == 0) || ($ano % 400 == 0)) {
                echo "<p>$ano é um ano bissexto.</p>";
            } else {
                echo "<p>$ano não é um ano bissexto.</p>";
            }
        }
    }
    ?>

