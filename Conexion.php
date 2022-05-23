<?php
$host = '192.168.10.20';
$dbname = 'dbprueba';
$port=5432;
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port", 'root','');
    echo "La conexion a la base de datos $dbname fue exitosa.";
} catch (PDOException $pe) {
    die("No fue exitosa la conexion a la base de datos $dbname");
}
?>