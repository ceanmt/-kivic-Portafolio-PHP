<?php
// registro.php - Procesa el registro y crea cuenta demo

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);
    $negocio = trim($_POST['negocio']) ?: 'Mi Tienda KIVIC';

    // Validación básica
    if (empty($nombre) || empty($email) || empty($telefono)) {
        die("Todos los campos obligatorios son requeridos.");
    }

    // Conexión a MySQL (ajusta tus datos)
    $pdo = new PDO("mysql:host=localhost;dbname=kivic_db", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Crear usuario demo
    $token = bin2hex(random_bytes(16));
    $dominio = strtolower(preg_replace('/[^a-z0-9]/', '', $negocio)) . ".kivic.store";

    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, telefono, negocio, dominio, token, fecha_registro) VALUES (?, ?, ?, ?, ?, ?, NOW())");
    $stmt->execute([$nombre, $email, $telefono, $negocio, $dominio, $token]);

    $user_id = $pdo->lastInsertId();

    // Enviar correo de bienvenida (opcional con PHPMailer)
    // mail($email, "¡Bienvenido a KIVIC!", "Tu tienda: https://$dominio\nAcceso: https://app.kivic.com/login?token=$token");

    // Redirigir al dashboard simulado
    header("Location: https://app.kivic.com/onboarding?token=$token&email=" . urlencode($email));
    exit;
}
?>