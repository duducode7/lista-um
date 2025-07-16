<?php

include 'db.php';

$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>

    <form action="POST" action="update.php?id=<?php echo $row['id'];?>">
        <label for="name">Nome:</label>
        <input type=text name="name" value="<?php echo $row['name'];?>" required>
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email'];?>" required>
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