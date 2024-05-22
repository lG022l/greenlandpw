<?php

if (isset($_GET['id'])) {
    // Obtener los datos de los parámetros de consulta
    $id = $_GET['id'];
}

$servername = "aws-0-us-west-1.pooler.supabase.com";
$username = "postgres.fodptioxlruabujgvcgw";
$password = "greenland022_db";
$dbname = "postgres";
$port = 5432; // Especifica el puerto aquí

$connect = pg_connect("host=$servername port=$port user=$username password=$password dbname=$dbname");

    // Preparar y ejecutar la consulta de manera segura
    $result = pg_query_params($connect, 'SELECT nombre FROM usuarios WHERE id = $1', array($id));

    if ($result) {
        if (pg_num_rows($result) > 0) {
            $row = pg_fetch_assoc($result);
            echo $row['nombre'];
        } else {
            echo "No se encontraron resultados.";
        }
    } else {
        echo "Error en la consulta.";
    }

    // Cerrar la conexión
    pg_close($connect);

?>
