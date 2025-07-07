<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Perfeito</title>
</head>
<body>

    <h1>Verificar se um número é perfeito</h1>
    <form method="POST" action="">
        <label for="numero">Escolha um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_perfeito">Verificar</button>
    </form>

</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_perfeito'])) {
  
        $numero = $_POST['numero'];

        function somaDivisores($num) {
            $soma = 0;
      
            for ($i = 1; $i < $num; $i++) {
                if ($num % $i == 0) { 
                    $soma += $i; 
                }
            }
            return $soma; 
        }

      
        $somaDivisoresNumero = somaDivisores($numero);
 
        if ($somaDivisoresNumero == $numero) {
            echo "<p>O número $numero é perfeito!</p>";
        } else {
            echo "<p>O número $numero não é perfeito.</p>";
        }
    }
}
?>