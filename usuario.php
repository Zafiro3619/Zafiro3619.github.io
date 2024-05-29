<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            background-color: rgb(170, 247, 28);
            margin: 0; /* Ajustar el margen del cuerpo a 0 */
            display: flex;
            justify-content: center; /* Centrar horizontalmente */
            align-items: center; /* Centrar verticalmente */
            height: 100vh; /* Establecer altura al 100% del viewport */
        }
        .box {
            background-color: aqua;
            border-radius: 20px;
            border: 2px solid rgb(199, 13, 13);
            padding: 20px;
            width: 300px; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
        }
        input[type="text"], input[type="password"] {
            border: none; /* Eliminar el borde */
            background-color: transparent; /* Hacer el fondo transparente */
            width: calc(100% - 40px); /* Largar el input */
            margin-bottom: 20px; /* Espacio inferior */
            text-align: center; /* Centrar el texto */
            box-sizing: border-box; /* Incluir el padding en el ancho total */
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="" method="get">
            <h1>Registro completado</h1>
            <input type="text" name="username" placeholder="Usuario" value='
            <?php
// Verificar si se ha recibido el nombre de usuario y la contraseña
if (isset($_GET["username"]) && isset($_GET["password"])) {
    // Obtener el nombre de usuario y la contraseña enviados desde el formulario
    $username = $_GET["username"];
    $password = $_GET["password"];

    // Verificar si el usuario y la contraseña son correctos
    if ($username === "marcelo" && $password === "1234") {
        // Iniciar sesión correctamente, redirigir a otra página
        header("Location: otra_pagina.php");
        exit(); // Importante: asegúrate de detener la ejecución del script después de la redirección
    } else {
        // Mostrar un mensaje de error si el usuario o la contraseña son incorrectos
        echo "Error: Usuario o contraseña incorrectos.";
    }
} else {
    // Si no se han recibido ambos datos, mostrar un mensaje de error
    echo "Error: No se han recibido el nombre de usuario y la contraseña.";
}
?>'>

        </form>
    </div>
</body>
</html>





