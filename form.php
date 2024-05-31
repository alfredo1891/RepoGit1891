<?
function agregarUsuario($arrayusuarios,$nombre,$edad,$email){
    $arrayusuarios = array(
        "nombre" => $nombre,
        "edad" => $edad,
        "email" => $email
    );
}
$arrayusuarios = [];
$arrayusuarios= agregarUsuario($arrayusuarios,"Juan","24","juanperez@gmial.com");
var_dump($arrayusuarios);