<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data valida</title>
</head>
<body>
    <h1>Receber uma data (dia, mês, ano) e validar se é uma data válida.</h1>

    <form method="POST" action="">
        <label for="dia">Digite o dia: </label>
        <input type="number" id="dia" name="dia" required>
        <br><br>
        <label for="mes">Digite o mês: (em número!)</label>
        <input type="number" id="mes" name="mes" required>
        <br><br>
         <label for="ano">Digite o ano: </label>
        <input type="number" id="ano" name="ano" required>
        <br><br>
        <button type="submit" name="verificar_data">Verificar</button>
    </form>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_data'])) {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];
    };
    if ($dia<=31 and $dia>=1 and $mes<=12 and $mes>=1 and $ano<=2025) {
        echo "A data " ,$dia,"/",$mes,"/",$ano," é valida"; 
    }else {
        echo " data " ,$dia,"/",$mes,"/",$ano," não é valida";
    };
};
?>