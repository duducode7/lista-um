<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Votação</title>
</head>
<body>
    <h1>Receber nome e idade e informar se a pessoa pode votar.</h1>

    <form method="POST">
        <label for="nome">Informe seu nome:</label>
        <input type="text" name="nome" required>
        <label for="idade">Informe sua idade:</label>
        <input type="number" name="idade" required>
        <input type="submit" name="verificar" value="Verificar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['verificar'])) {
            $nome = $_POST['nome'];
            $idade = $_POST['idade']; 

           
            if ($idade >= 18) {
                echo "<p>Olá, $nome! Você pode votar.</p>";
            } else {
                echo "<p>Olá, $nome! Você não pode votar.</p>";
            }
        }
    }
    ?>
</body>
</html>