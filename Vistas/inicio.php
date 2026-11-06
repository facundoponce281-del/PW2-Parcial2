
<main>

    <section>
        <div class="Alinear_imagen">
            <img src="Img/son-como-niños.png" width="250" alt="" />
        </div>

        <p class="Texto">
        La pelicula Son como niños es una comedia estrenada en 2010, la
        historia sigue a un grupo de amigos que, tras la muerte de su
        entrenador se reencuentran despues de mucho tiempo sin verse. La trama
        principal se debe a este reencuentro, donde los protagonistas pasan un
        finde semana juntos con sus familias al frente del lago y reflexionan
        como sus vidas cambiaron con el paso del tiempo
        </p>

       <?php if (isset($ultima_visita) && $ultima_visita !== ""): ?>

            <p>
                Tu última visita fue:
                <?php echo htmlspecialchars($ultima_visita, ENT_QUOTES, "UTF-8"); ?>
            </p>

        <?php else: ?>

            <p>¡Bienvenido a Son como niños!</p>

        <?php endif; ?>

    </section>

</main>
