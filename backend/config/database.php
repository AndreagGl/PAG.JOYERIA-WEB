<?php

/**
 * ==========================================
 * CONEXIÓN A BASE DE DATOS
 * ==========================================
 *
 * Motor: MySQL
 * Base de datos: joyeria
 * Host: 127.0.0.1
 * Puerto: 3306
 * Usuario: root
 *
 */

// Datos de conexión
$host = '127.0.0.1';
$port = '3306';
$dbname = 'joyeria';
$username = 'root';
$password = ''; // XAMPP normalmente utiliza contraseña vacía


try {

    // Crear conexión PDO
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );


    // Activar errores de PDO
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );


    // Configurar resultados como arrays asociativos
    $pdo->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );


    // Desactivar emulación de consultas preparadas
    $pdo->setAttribute(
        PDO::ATTR_EMULATE_PREPARES,
        false
    );


} catch (PDOException $e) {

    die(
        'Error de conexión con la base de datos: '
        . $e->getMessage()
    );

}