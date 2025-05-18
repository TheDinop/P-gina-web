<?php
include 'database/database.php';

insertarUsuario("Juan", "Test 1");

echo "<h1>Usuarios registrados</h1>";
ontenerUsuarios();
?>