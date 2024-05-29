<link rel="stylesheet" href="graficos.css">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han recibido respuestas
    if (!empty($_POST)) {
        // Obtener la dirección IP del usuario que envió el formulario
        $ip_usuario = $_SERVER['REMOTE_ADDR'];

        // Crear una cadena con las respuestas formateadas
        $respuestas = "";
        foreach ($_POST as $pregunta => $respuesta) {
            $respuestas .= "$pregunta: $respuesta\n";
        }

        // Formar el mensaje completo con la información del usuario
        $mensaje = "Usuario: $ip_usuario\n$respuestas\n";

        // Definir la ruta del archivo de texto
        $archivo = "respuestas.txt";

        // Abrir el archivo en modo de escritura
        $gestor = fopen($archivo, "a");

        // Escribir el mensaje en el archivo
        fwrite($gestor, $mensaje);

        // Cerrar el archivo
        fclose($gestor);

        // Mostrar un mensaje de confirmación
        echo "<p>Las respuestas han sido enviadas, seran analizadas ahora mismo por una <br>inteligencia artificial.</p>";
    } else {
        echo "<p>No se recibieron respuestas.</p>";
    }
} else {
    echo "<p>No se recibió ninguna respuesta.</p>";
}
?>
<a href="index.html" class="button">Volver a la pagina principal</a>




