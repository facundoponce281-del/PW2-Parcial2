<?php

$Reparto = [
    [
        "actor"=> "adam sandler",
        "personaje" => "Lenny Fader",
        "descripcion" => "Es el protagonista, interpreta a un agente de hollywood exitoso que vuelve a su pueblo natal",
        "imagen" => "/Img/adam-sandler.png"
    ],

    [
        "actor" => "kevin james",
        "personaje" => "Eric Lamonsoff",
        "descripcion" => "Un padre de familia inseguro, su papel aporta mucho humor fisico y su personaje demuestra que todavia puede ser divertido",
        "imagen" => "/Img/Kevin James.png"
    ],

    [
        "actor" => "Chris Rock",
        "personaje" => "Kurt Mckenzie",
        "descripcion" => "Interpreta a un hombre trabajador con muchos hijos y muestra el lado mas realista de la vida familiar",
        "imagen" => "/Img/Chrisrock.png"
    ],

    [
        "actor" => "Rob Schneider",
        "personaje" => "Rob Hilliard",
        "descripcion" => "Es un hombre que vive con su esposa mayor y su estilo de vida es muy diferente a la del grupo",
        "imagen" => "/Img/Rob-Schneider11.png"
    ],

    [
        "actor" => "David Spade",
        "personaje" => "Marcus Hilliard",
        "descripcion" => "El soltero del grupo y inmaduro, su personaje genera muchas situaciones incomodas y comicas",
        "imagen" => "/Img/David Spade.png"
    ],

    [
        "actor" => "Salma Hayek",
        "personaje" => "Esposa de Lenny",
        "descripcion" => "Es la esposa de lenny y representa el contraste entre la vida sostificada de la ciudad y la sencillez del pueblo",
        "imagen" => "/Img/Salma-Hayek-2008.png"
    ],

    [
        "actor" => "Maria Bello",
        "personaje" => "Sally Lamonsoff (Esposa de Eric)",
        "descripcion" => "Es la esposa de Eric, es una madre protectora y algo controladora con sus hijos",
        "imagen" => "/Img/Maria-Bello-.png"
    ],

    [
        "actor" => "Maya Rudolph",
        "personaje" => "Esposa de Kurt",
        "descripcion" => "Es la esposa de kurt, tiene un caracter fuerte, directa y muy expresiva",
        "imagen" => "/Img/Maya-Rudolph-.png"
    ]
];

?>

<main>

    <section>

        <ul class="lista-reparto">

            <?php foreach ($Reparto as $actor): ?>

                <li>
                    <?php if ($actor["actor"] == "adam sandler"): ?>
                        <strong>Personaje Principal</strong>
                    <?php endif; ?>
                </li>

                <li>
                    <p class="texto-reparto">
                        <?php echo $actor["actor"]; ?>
                    </p>

                    <p class="texto-reparto">
                        <?php echo $actor["personaje"]; ?>
                    </p>
                </li>

                <li>
                    <p class="texto-reparto">
                        <?php echo $actor["descripcion"]; ?>
                    </p>
                </li>

                <div class="Alinear_imagen">
                    <img src="<?php echo $actor["imagen"]; ?>"
                         width="200"
                         alt="<?php echo $actor["actor"]; ?>">
                </div>

            <?php endforeach; ?>

        </ul>

    </section>

</main>
