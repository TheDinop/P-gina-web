<?php

use mysqli;
use SQLite3;
use Exception;

$host = "local";
$user = "root";
$pass = "";

$db = "pagina-dem";

$conn = new mysqli($hist, $user, $pass, $db);

if($conn->connect_error){
    die("La conexion no fue exitosa: " . $conn->connect_error);
}
function insertarUsuario($nombre, $test){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, test) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $test);

    $stmt->execute();
    $stmt->close();
}
function obtenerUsuarios(){
    global $conn;
    $result = $conn->qyery("SELECT * FROM usuarios");

    while($row = $result->fetch_assoc()){
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Test: " . $row["test"] . "<br>";
    }
}
?>