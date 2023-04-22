<!-- url a mi web -->
<?php $url_base = "http://localhost/MiWeb/" ?>
<!doctype html>
<html lang="en">

<head>
    <title>UMG</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Estilos css para hacer responsiva las paginas -->
    <style type="text/css">
        
        
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        /* Estilos para pantallas pequeñas */
        @media screen and (max-width: 600px) {
            table {
                width: 100%;
            }

            thead {
                display: none;
            }

            tr:nth-child(even) {
                background-color: #16F5DD;
            }

            td:before {
                content: attr(data-th);
                font-weight: bold;
                display: inline-block;
                width: 100px;
            }
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <nav class="navbar navbar-expand navbar-light bg-info">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo $url_base; ?>Pagina/index.php" aria-current="page"><b>SISTEMA</b> <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo $url_base; ?>Modulos/CreateUsuario/index.php"><b>CREAR USUARIO</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo $url_base; ?>Modulos/DeleteUsuario"><b>ELIMINAR USUARIO</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo $url_base; ?>Modulos/ReadUsuario"><b>VER USUARIOS</b></a>
            </li>
           <li class="nav-item">
            <a class="nav-link active" href="<?php echo $url_base; ?>Modulos/UpdateUsuario"><b>ACTUALIZAR USUARIOS</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo "http://localhost/MiWeb/index.html";?>"cerrar.php"><b>CERRAR SESIÓN</b></a>
            </li>
        </ul>
</nav>

    <main class="container">
