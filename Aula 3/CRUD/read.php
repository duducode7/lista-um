<?php

    include 'db.php';

    $sql = "SELECT * FROM usuario";
    $result = $conn -> query($sql);

    if($result -> num_rows > 0){
        echo "<table border='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Data de Criação </th>
            <th> Ações </th>
        </tr>";

        while($row = $result -> fetch_assoc()) {

            echo "<tr>
                    <td> {$row['id']} </td>
                    <td> {$row['name']} </td>
                    <td> {$row['email']} </td>
                    <td> {$row['create_at']} </td>
                    <td>
                        <a href='delete.php?id={$row['id']}'>Editar<a>
                        <a href='delete.php?id={$row['id']}'>Excluir<a>
                     </td>
                </td>
            ";
        };

        echo "</table>";

    }else{

        echo "Nenhum Registro encontrado.";

    };

    $conn -> close();

?>