<?php

include "../../conexion.php";


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Aquí irá el código para procesar el formulario
   
    $Email = $_GET['Email'];
    $password = $_GET['password'];

if (empty($Email) || empty($password)) {
    $_SESSION['error'] = 'Por favor, completa todos los campos del formulario.';
    exit;
}

$sql = "update tbl_usuarios ( email, password) VALUES ('$Email','$password')";
if (mysqli_query($conn, $sql)) {

    echo '<script>alert("usuario editado correctamente")</script>';
    exit;
} else {
    $_SESSION['error'] = 'Error al editar el puesto: '. mysqli_error($conn);
    
    exit;
}
}
?>