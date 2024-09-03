<?php
// Definir usuarios y contraseñas
$users = array(
    "user1" => "password1",
    "user2" => "password2"
);

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar si el usuario existe y la contraseña es correcta
if (isset($users[$username]) && $users[$username] == $password) {
    echo "<h2 align = center>Correcto.<h/2><br><h2 align = center> Bienvenido, " . $username . "!</h2>";
} else {
    echo "Usuario o contraseña incorrecta.";
}
?>