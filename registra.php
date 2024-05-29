<!DOCTYPE html>
<html lang="en">
<head>
    
    <
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    
    <
<style>
        body {
            background-color: rgb(170, 247, 28);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
        input[type="text"], input[type="password"], input[type="email"] {
            border: none;
            background-color: white; /* Fondo blanco */
            width: calc(100% - 40px);
            margin-bottom: 10px; /* Reducir espacio inferior */
            text-align: center;
            box-sizing: border-box;
            color: black; /* Color del texto */
            font-size: 16px;
            padding: 10px; /* Añadir padding */
            border-radius: 5px; /* Bordes redondeados */
        }
        input[type="text"]::placeholder, input[type="password"]::placeholder, input[type="email"]::placeholder {
            color: gray; /* Color del placeholder */
        }
        button {
            border-radius: 20px;
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px 20px;
            margin: 10px auto;
            background-color: rgb(199, 13, 13);
            color: white;
            border: none;
            cursor: pointer;
            width: calc(100% - 40px);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        button:hover {
            background-color: brown;
            box-shadow: 0 0 10px gray;
        }
        button:focus {
            outline: none;
            background-color: brown;
            box-shadow: 0 0 10px gray;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="#" method="get">
        <u> <h1>Iniciar Sesión</h1></u>
            <label for="username">Nombre</label><br><br>
            <input type="text" id="username" name="username" placeholder="Ingresa tu nombre"><br><br>
            <label for="apel">Apellido</label><br><br>
            <input type="text" id="apel" name="apel" placeholder="Ingresa tu apellido"><br><br>
            <label for="correo">Correo</label><br><br>
            <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo"><br><br>
            <label for="password">Contraseña</label><br><br>
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña"><br><br>
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>