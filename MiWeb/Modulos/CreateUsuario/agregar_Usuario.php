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

$sql = "INSERT INTO `tbl_users`(`id_role`, `email`, `password`, `status`) VALUES (1,'$email','$password',1)";
if (mysqli_query($conn, $sql)) {
    
    exit;
} else {
    $_SESSION['error'] = 'Error al agregar el puesto: '. mysqli_error($conn);
    
    exit;
}
}
?>
