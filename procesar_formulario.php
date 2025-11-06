<?php
// ================================
// procesar_formulario.php
// ================================

// Verificar si el formulario fue enviado mediante POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Capturar los datos enviados
    $nombre = $_POST['nombre_completo'];
    $correo = $_POST['correo_electronico'];
    $pais = $_POST['pais'];
    $edad = $_POST['edad'];
    $plataforma = $_POST['plataforma'];
    $personaje = $_POST['personaje_favorito'];
    $nivel = $_POST['nivel_dificultad'];
    $comentarios = $_POST['comentarios'];
    $suscripcion = isset($_POST['suscripcion']) ? "Sí" : "No";
    $fecha = $_POST['fecha_envio'];

    // Mostrar los datos recibidos (solo como ejemplo)
    echo "<h2>Datos recibidos del formulario</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>País:</strong> $pais</p>";
    echo "<p><strong>Edad:</strong> $edad</p>";
    echo "<p><strong>Plataforma:</strong> $plataforma</p>";
    echo "<p><strong>Personaje favorito:</strong> $personaje</p>";
    echo "<p><strong>Dificultad:</strong> $nivel</p>";
    echo "<p><strong>Comentarios:</strong> $comentarios</p>";
    echo "<p><strong>Suscripción:</strong> $suscripcion</p>";
    echo "<p><strong>Fecha de envío:</strong> $fecha</p>";
} else {
    echo "<p>No se recibieron datos del formulario.</p>";
}
?>
