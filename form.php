<?php

function agregarUsuario($arrayusuario,$nombre,$edad,$email){
$arrayusuarios = array(
    "nombre" => $nombre,
    "edad" => $edad,
    "email" => $email
);}
echo agregarUsuario($arrayusuario);