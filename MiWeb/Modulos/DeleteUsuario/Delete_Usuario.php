<?php

include "../../conexion.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Aquí irá el código para procesar el formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

if (empty($email) || empty($password)) {
    $_SESSION['error'] = 'Por favor, completa todos los campos del formulario.';
    exit;
}

$sql = "UPDATE `tbl_users` SET status = 0 WHERE email = '$email' and password = '$password'";

if (mysqli_query($conn, $sql)) {
    exit;
} else {
    
    $_SESSION['error'] = 'Error al eliminar el usuario : '. mysqli_error($conn);
    
    exit;
}
}
?>
