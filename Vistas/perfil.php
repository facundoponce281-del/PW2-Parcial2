
<main>
    <?php if (!isset($_SESSION["id_usuario"])): ?>
        <p>Debés iniciar sesión para ver tu perfil.</p>
    <?php else: ?>

    <h2>Mi perfil</h2>

    <p>Nombre: <?php echo htmlspecialchars($_SESSION["nombre"]); ?></p>

    <p>Apellido: <?php echo htmlspecialchars($_SESSION["apellido"]); ?></p>

    <p>Usuario: <?php echo htmlspecialchars($_SESSION["usuario"]); ?></p>

    <p>Correo: <?php echo htmlspecialchars($_SESSION["correo"]); ?></p>
    
    <?php endif; ?>
</main>