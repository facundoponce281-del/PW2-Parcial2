<?php

$error = "";

$nombre = "";
$apellido = "";
$correo = "";
$motivo = "";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"] ?? "");
    $apellido = trim($_POST["apellido"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $motivo = trim($_POST["motivo"] ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    if (empty($nombre) || empty($apellido) || empty($correo) || empty($motivo) || empty($mensaje)) {

        $error = "Por favor completar todos los datos";

    } elseif (strlen($nombre) < 4) {

        $error = "El nombre debe tener al menos 4 caracteres";

    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {

        $error = "El correo electronico no es valido";

    } else {

        $nombre = htmlspecialchars($nombre);
        $apellido = htmlspecialchars($apellido);
        $correo = htmlspecialchars($correo);
        $motivo = htmlspecialchars($motivo);
        $mensaje = htmlspecialchars($mensaje);

        $enviado = true;
    }

} else {

    $error = "No se puede acceder a esta pagina";

}

?>

<main class="confirmacion">

    <?php if (isset($enviado) && $enviado): ?>

        <h2>Formulario enviado correctamente</h2>

        <p>
            Gracias <?php echo $nombre . " " . $apellido; ?>
            por comunicarte con nosotros
        </p>

        <p>
            Recibimos tu consulta, te respondemos por correo:
            <?php echo $correo; ?>
        </p>

        <p>
            Motivo de consulta: <?php echo $motivo; ?>
        </p>

        <?php if ($motivo == "Consulta sobre la pelicula"): ?>

            <p>
                Tu consulta sobre la pelicula fue recibida correctamente
            </p>

        <?php elseif ($motivo == "Consulta sobre los actores"): ?>

            <p>
                Tu consulta sobre los actores y la pelicula fue recibida correctamente
            </p>

        <?php else: ?>

            <p>
                Tu consulta fue recibida, gracias por comunicarte con nosotros
            </p>

        <?php endif; ?>

        <p>
            Mensaje: <?php echo $mensaje; ?>
        </p>

        <div class="contenedor-boton">
           <a href="/PW2-Parcial1/index.php?seccion=Formulario" class="boton">
                Volver al formulario
            </a>
        </div>

    <?php else: ?>

        <h2>Ocurrio un error</h2>

        <p>
            <?php echo $error; ?>
        </p>

        <div class="contenedor-boton">
            <a href="/PW2-Parcial1/index.php?seccion=Formulario" class="boton">
                Volver al formulario
            </a>
        </div>

    <?php endif; ?>

</main>