<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Números Amigos</title>
</head>
<body>
    <h1>Verificar se dois números formam um número amigo</h1>
    

    <form method="POST">
        <label for="primeiro">Número 1:</label>
        <input type="number" name="primeiro" required>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lê os dados usando $_POST
        $primeiro = $_POST['primeiro'];
        $numero2 = $_POST['numero2'];


        function somaDivisores($num) {
            $soma = 0;

            for ($i = 1; $i < $num; $i++) {
                if ($num % $i == 0) { 
                    $soma += $i; 
                }
            }
            return $soma; 
        }

   
        $soma1 = somaDivisores($primeiro);
        $soma2 = somaDivisores($numero2);

  
        if ($soma1 == $numero2 && $soma2 == $primeiro) {
            echo "<p>Os números $primeiro e $numero2 são amigos!</p>";
        } else {
            echo "<p>Os números $primeiro e $numero2 não são amigos.</p>";
        }
    }
    ?>

    <!-- //não sabia o que era número amigo então pesquisei para fazer// -->
