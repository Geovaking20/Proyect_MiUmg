<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="refresh" content="20">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="estilos_update.css">

</head>
<body>

<?php include "../../template/header.php" ?>
    <br>
    <h1>Lista de Usuarios</h1>
    <table>
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

    <h2>Actualizar usuario</h2>
    <form action="update_usuario.php" method="POST">

        <label for="Email">Email:</label>
        <input type="varchar" id="email" name="email">
        <br>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
        <br>
        <br>
        <input type="submit" value="Actualizar">
        
    </form>

</body>
</html>