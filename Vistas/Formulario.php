<main>

    <form action="/PW2-Parcial1/index.php?seccion=Confirmacion" method="POST">

        <label class="hidden" for="Nombre">Nombre</label>
        <input type="text" id="Nombre" name="nombre" placeholder="Nombre" required>

        <label class="hidden" for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>

        <label class="hidden" for="Correo">Correo electronico</label>
        <input type="email" id="Correo" name="correo" placeholder="Correo electronico" required>

        <label class="hidden" for="motivo">Motivo</label>

        <select name="motivo" id="motivo" required>
            <option value="">Selecciona un motivo</option>
            <option value="Consulta sobre la pelicula">Consulta sobre la pelicula</option>
            <option value="Consulta sobre los actores">Consulta sobre los actores</option>
            <option value="Otro">Otro</option>
        </select>

        <label class="hidden" for="Mensaje">Mensaje</label>

        <textarea class="Mensaje"
            id="Mensaje"
            name="mensaje"
            placeholder="Mensaje"
            required></textarea>

        <div>
            <button type="submit" class="boton">Enviar</button>
        </div>

    </form>

</main>