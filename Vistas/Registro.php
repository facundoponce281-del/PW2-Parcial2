
<?php

require_once __DIR__ . "/../Componentes/conexion.php";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["registrar"])) {

    $nombre = trim($_POST["nombre"]);
    $apellido = trim($_POST["apellido"]);
    $usuario = trim($_POST["usuario"]);
    $correo = trim($_POST["correo"]);
    $password = $_POST["password"];

    if ($nombre === "" || $apellido === "" || $usuario === "" || $correo === "" || $password === "") {

        $mensaje = "Todos los campos son obligatorios.";

    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {

        $mensaje = "Ingresá un correo electrónico válido.";

    } elseif (strlen($password) < 8) {

        $mensaje = "La contraseña debe tener al menos 8 caracteres.";

    } else {

        $consulta = $conexion->prepare(
            "SELECT id_usuario FROM usuarios WHERE usuario = ? OR correo = ?"
        );

        $consulta->bind_param("ss", $usuario, $correo);
        $consulta->execute();
        $resultado = $consulta->get_result();

        if ($resultado->num_rows > 0) {

            $mensaje = "Ese usuario o correo ya está registrado.";

        } else {

            $password_segura = password_hash($password, PASSWORD_DEFAULT);

            $insertar = $conexion->prepare(
                "INSERT INTO usuarios (nombre, apellido, usuario, correo, password, fecha_registro)
                 VALUES (?, ?, ?, ?, ?, NOW())"
            );

            $insertar->bind_param(
                "sssss",
                $nombre,
                $apellido,
                $usuario,
                $correo,
                $password_segura
            );

           if ($insertar->execute()) {

    session_regenerate_id(true);

    $_SESSION["id_usuario"] = $conexion->insert_id;
    $_SESSION["nombre"] = $nombre;
    $_SESSION["apellido"] = $apellido;
    $_SESSION["usuario"] = $usuario;
    $_SESSION["correo"] = $correo;

    $mensaje = "¡Cuenta creada correctamente!";

} else {
    $mensaje = "No se pudo crear la cuenta.";
}

            $insertar->close();
        }

        $consulta->close();
    }
}

?>

<main>
    <h2>Crear cuenta</h2>
<?php if ($mensaje !== ""): ?>
    <p class="mensaje-registro">
        <?php echo htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8"); ?>
    </p>
<?php endif; ?>

    <form action="index.php?seccion=Registro" method="POST">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="usuario">Nombre de usuario</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo" required>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>

        <button class="boton" type="submit" name="registrar">Registrarse</button>

    </form>
</main>
