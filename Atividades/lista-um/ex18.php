<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobrir qual número é maior</title>
</head>
<body>
    <h1>Digite 3 números para descobrir o maior dos mesmos</h1>

    <form method="POST" action="">
        <label for="primeiro">Digite o primeiro número: </label>
        <input type="number" id="primeiro" name="primeiro" required>
        <br><br>
        <label for="segundo">Digite o segundo número:</label>
        <input type="number" id="segundo" name="segundo" required>
        <br><br>
         <label for="terceiro">Digite o terceiro número: </label>
        <input type="number" id="terceiro" name="terceiro" required>
        <br><br>
        <button type="submit" name="verificar_numeros">Verificar</button>
    </form>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_numeros'])) {
        $primeiro = $_POST['primeiro'];
        $segundo = $_POST['segundo'];
        $terceiro = $_POST['terceiro'];
    };
    if ($primeiro > $segundo and $terceiro) {
        echo 'Primeiro número maior';
    } else if ($segundo > $primeiro and $terceiro) {
        echo "Segundo número maior";
    } else if ($terceiro > $segundo and $primeiro) {
        echo "Terceiro número maior";
    };
};
?>