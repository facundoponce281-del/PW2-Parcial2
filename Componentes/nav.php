
<nav>
    <h1>Son como niños</h1>

    <ul class="Navegacion">
        <li class="Enlace">
            <a href="/PW2-Parcial2/index.php?seccion=inicio">Inicio</a>
        </li>

        <li class="Enlace">
            <a href="/PW2-Parcial2/index.php?seccion=pelicula">Películas</a>
        </li>

        <li class="Enlace">
            <a href="/PW2-Parcial2/index.php?seccion=Reparto">Reparto</a>
        </li>

        <li class="Enlace">
            <a href="/PW2-Parcial2/index.php?seccion=Produccion-y-Curiosidades">Producción</a>
        </li>

        <li class="Enlace">
            <a href="/PW2-Parcial2/index.php?seccion=Error-404">Error</a>
        </li>

        <li class="Enlace">
            <a href="/PW2-Parcial2/index.php?seccion=Formulario">Formulario</a>
        </li>

        <?php if (!isset($_SESSION["id_usuario"])): ?>

            <li class="Enlace">
                <a href="/PW2-Parcial2/index.php?seccion=Registro">Registrarse</a>
            </li>

            <li class="Enlace">
                <a href="/PW2-Parcial2/index.php?seccion=Login">Iniciar sesión</a>
            </li>

        <?php else: ?>

            <li class="Enlace">
                <a href="/PW2-Parcial2/index.php?seccion=Perfil">Perfil</a>
            </li>

            <li class="Enlace">
                <a href="/PW2-Parcial2/index.php?seccion=Logout">Cerrar sesión</a>
            </li>

        <?php endif; ?>

        <li class="Enlace">
            <a href="/PW2-Parcial2/index.php?seccion=Confirmacion">Confirmación</a>
        </li>

        <li class="Enlace">
            <a href="/PW2-Parcial2/index.php?seccion=Sobre">Sobre</a>
        </li>
    </ul>
</nav>
