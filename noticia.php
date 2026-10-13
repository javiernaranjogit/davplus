
<?php
require_once __DIR__ . '/datos_noticias.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$noticia = ($id !== false && $id !== null)
    ? ($noticias[$id] ?? null)
    : null;

function escapar($texto) {
    return htmlspecialchars(
        (string) $texto,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= $noticia ? escapar($noticia['titulo']) : 'Noticia no encontrada' ?>
        | MEDAC AL DÍA
    </title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

<header class="cabecera">
    <div class="marca">
        <div class="nombre-periodico">MEDAC AL DÍA</div>
        <p>El periódico de nuestro centro</p>
    </div>

    <nav class="navegacion">
        <ul>
            <li><a href="index.php#inicio">Inicio</a></li>
            <li><a href="index.php#noticias">Noticias</a></li>
            <li><a href="apartado.php?seccion=recuerdos">Recuerdos</a></li>
            <li><a href="apartado.php?seccion=eventos">Eventos</a></li>
            <li><a href="opiniones.php">Opiniones</a></li>
        </ul>
    </nav>
</header>

<main class="pagina-noticia">

    <?php if ($noticia): ?>

        <article class="articulo-completo">

            <a class="boton" href="index.php#noticias">
                ← Volver a las noticias
            </a>

            <p class="categoria-noticia">
                <?= escapar($noticia['categoria']) ?>
            </p>

            <h1>
                <?= escapar($noticia['titulo']) ?>
            </h1>

            <p class="fecha-noticia">
                Publicado el <?= escapar($noticia['fecha']) ?>
            </p>

            <p class="resumen-noticia">
                <?= escapar($noticia['resumen']) ?>
            </p>

            <img
                class="imagen-principal-noticia"
                src="<?= escapar($noticia['imagen']) ?>"
                alt="<?= escapar($noticia['titulo']) ?>"
            >

            <div class="texto-noticia">

                <?php foreach ($noticia['contenido'] as $bloque): ?>

                    <?php if ($bloque['tipo'] === 'subtitulo'): ?>

                        <h2><?= escapar($bloque['texto']) ?></h2>

                    <?php elseif ($bloque['tipo'] === 'fuente'): ?>

                        <p class="fuente-noticia">
                            <?= escapar($bloque['texto']) ?>
                        </p>

                    <?php else: ?>

                        <p><?= escapar($bloque['texto']) ?></p>

                    <?php endif; ?>

                <?php endforeach; ?>

            </div>

        </article>

    <?php else: ?>

        <section class="articulo-completo">
            <h1>Noticia no encontrada</h1>

            <p>La noticia que buscas no existe.</p>

            <a class="volver" href="index.php#noticias">
                Volver al inicio
            </a>
        </section>

    <?php endif; ?>

</main>

<footer class="pie">
    <p>© 2026 MEDAC AL DÍA · El periódico de nuestro centro</p>
</footer>

</body>
</html>
