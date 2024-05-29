<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            background-color: rgb(170, 247, 28);
            margin: 20px;
        }
        .box {
            background-color: aqua;
            border-radius: 20px;
            border: 2px solid rgb(199, 13, 13);
            padding: 20px;
            width: 300px; 
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
        }
        .box input {
            border-radius: 20px;
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            width: calc(100% - 20px);
            padding: 5px;
            margin-bottom: 10px;
        }
        .box button {
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
        .box button:hover {
            background-color: brown;
            box-shadow: 0 0 10px gray;
        }
        .box button:focus {
            outline: none;
            background-color: brown;
            box-shadow: 0 0 10px gray;
        }
        .box img {
            max-height: 200px;
            max-width: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="box">
        <img src="png/1.png" alt="">
        <form action="usuario.php" method="Get">
            <label for="username">Iniciar Sesión</label><br><br>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Contraseña</label><br><br>
            <input type="password" id="password" name="password"><br>
            <a href="">¿has olvidado la contraseña?</a> <br>
            <button type="submit">Iniciar</button>
        </form>
    </div>
</body>
</html>

