<?php
$password = "daniel";
$cifrado = password_hash($password, PASSWORD_DEFAULT);
echo "El password cifrado es ".$cifrado."<br>";

echo "El password es ".$password;

?>