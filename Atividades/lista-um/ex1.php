<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body

    <h1>Par ou Impar</h1>
    
    <form method="POST" action="">
        <label for="numero_par">Verifica se é um número par ou impar:</label>
        <input type="number" id="numero_par" name="numero_par" required>
        <button type="submit" name="verificar_par">Verificar</button>
    </form>

   

</body>
</html>
 <?php
    function verificarPar($numero){
        if($numero %2 == 0) {
            return "O número $numero é par";
        }else{
            return "O número $numero é impar";
        }
    };

     if($_SERVER['REQUEST_METHOD'] == 'POST') {
         if(isset($_POST['verificar_par'])) {
            $numero = $_POST['numero_par'];
            $ehPrimo = true;
            echo verificarPar($numero);
         };
    }; 
    ?>