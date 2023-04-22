<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="refresh" content="20">
    <title>Usuario</title>
    <link rel="stylesheet" href="estilos_read.css">

</head>
<body>

<?php include "../../template/header.php" ?>
    <br>
    <h1>Lista de Usuarios</h1>
    <div>
        <table class="d-flex align-items-center justify-content-center">
            <tr>
            <th>Id Usuario</th>
            <th>Email</th>
            <th>Puesto</th>
        </tr>
        <?php
            include "../../conexion.php";

        // Consulta a la base de datos para obtener la lista de usuarios
        $mysql = "SELECT id_Usuario, email, name_role AS Role from tbl_users inner join tbl_role on tbl_users.id_role = tbl_role.id_role where status = 1;";
        $result = $conn->query($mysql);

        if ($result->num_rows > 0) {
            // Mostrar los usuarios en la tabla
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_Usuario"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["Role"] . "</td>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay puestos registrados</td></tr>";
        }

        $conn->close();
        
        ?>
        </table>
    </div>
</body>
</html>