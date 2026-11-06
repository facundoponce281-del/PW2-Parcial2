<?php

$secciones_validas = [
    "Sobre",
    "Reparto",
    "Produccion-y-Curiosidades",
    "pelicula",
    "inicio",
    "Formulario",
    "Registro",
    "Login",
    "Perfil",
    "Logout",
    "Error-404",
    "Confirmacion"
];

$seccion = isset($_GET["seccion"]) ? $_GET["seccion"] : "inicio";

if (in_array($seccion, $secciones_validas)) {
    $vista = $seccion;
} else {
    $vista = "Error-404";
}

?>
