<?php

// Importar la conexión
// Incluye el header
require 'includes/app.php';

$db = conectarDB();

// Crear un email y password
$email = "admin@admin.com";
$password = "admin";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);


// Query para crear el usuario
$query = " INSERT INTO usuarios (email, password) VALUES ( '${email}', '${passwordHash}'); ";

echo $query;

// Agregarlo a la base de datos
mysqli_query($db, $query);