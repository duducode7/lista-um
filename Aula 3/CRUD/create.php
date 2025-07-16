<?php

include 'db.php';

if(($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['create']))){

    $name = $_POST ['name'];
    $email = $_POST ['email'];

    $sql = "INSERT INTO usuarios (name,email) VALUE ('$name','$email')";

    if ($conn ->query($sql) === true){
        echo "Novo registro no banco!";
        echo "<br>";
    }else{
        echo "erro: " . $sql . "<br>". $conn->$error;
    };

    $conn -> close();

};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>

    <form action="POST" action="create.php">
        <label for="name">Nome:</label>
        <input type=text name="name" required>
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <br>
        <input type="submit" name="create" value="Adicionar">
    </form>

    <div class="tabela_de_consulta">

        <?php
        include 'read.php'
        ?>

    </div>

</body>
</html>