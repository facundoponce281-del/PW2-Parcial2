<?php
session_start();

 date_default_timezone_set("America/Argentina/Cordoba");

$ultima_visita = $_COOKIE["ultima_visita"] ?? "";

setcookie(
  "ultima_visita",
  date("d/m/Y H:i:s"),
  time() + (30 * 24 * 60 * 60),
  "/"
);


require_once "Componentes/funciones.php";

if ($vista === "Logout") {
    require_once "Vistas/Logout.php";
    exit;
}


require_once "Componentes/head.php";
require_once "Componentes/header.php";

if (isset($_SESSION["mensaje_flash"])):

    echo "<p style='color: white !important;'>" .
    htmlspecialchars($_SESSION["mensaje_flash"], ENT_QUOTES, "UTF-8") .
    "</p>";

    unset($_SESSION["mensaje_flash"]);

endif;

require_once "Vistas/" . $vista . ".php";

require_once "Componentes/footer.php";

?>