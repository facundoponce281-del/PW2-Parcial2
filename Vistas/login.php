<?php

require_once __DIR__ . "/../Componentes/conexion.php";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ingresar"])) {

    $usuario = trim($_POST["usuario"]);
    $password = $_POST["password"];

    $consulta = $conexion->prepare(
        "SELECT id_usuario, nombre, apellido, usuario, correo, password
         FROM usuarios
         WHERE usuario = ?"
    );

    $consulta->bind_param("s", $usuario);
    $consulta->execute();

    $resultado = $consulta->get_result();

    if ($resultado->num_rows === 1) {

        $datos = $resultado->fetch_assoc();

        if (password_verify($password, $datos["password"])) {
            session_regenerate_id(true);

            $_SESSION["id_usuario"] = $datos["id_usuario"];
            $_SESSION["nombre"] = $datos["nombre"];
            $_SESSION["usuario"] = $datos["usuario"];
            $_SESSION["apellido"] = $datos["apellido"];
            $_SESSION["correo"] = $datos["correo"];
            $_SESSION["mensaje_flash"] = "¡Bienvenido! Iniciaste sesión correctamente";

            header("Location: index.php?seccion=inicio");
           exit;

        } else {
            $mensaje = "Contraseña incorrecta.";
        }

    } else {
        $mensaje = "El usuario no existe.";
    }

    $consulta->close();
}

?>

<main>
    <h2>Iniciar sesión</h2>

    <?php if ($mensaje !== ""): ?>
        <p class="mensaje-registro">
            <?php echo htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8"); ?>
        </p>
    <?php endif; ?>

    <form action="index.php?seccion=Login" method="POST">

        <label for="usuario">Nombre de usuario</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>

        <button class="boton" type="submit" name="ingresar">
            Iniciar sesión
        </button>

    </form>
</main>