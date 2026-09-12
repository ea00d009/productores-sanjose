<?php
/**
 * ARCHIVO DE CREDENCIALES (Reemplazo de .env)
 * 
 * Usá este archivo si tu servidor de hosting te da error 403 al intentar
 * editar o crear el archivo oculto ".env".
 * 
 * Completá tus datos reales aquí y subí este archivo (env.php) a la carpeta
 * 'config' de tu servidor mediante FTP.
 */

return [
    'DB_HOST' => 'localhost',         // Usualmente 'localhost' en cPanel
    'DB_PORT' => '3306',
    'DB_NAME' => 'u479325780_turismoDB',  // Ej: sanjose_productores
    'DB_USER' => 'u479325780_rootTURISMO',        // Ej: sanjose_admin
    'DB_PASS' => 'exvvtujl0Pzspyf'      // Tu contraseña real de MySQL
];