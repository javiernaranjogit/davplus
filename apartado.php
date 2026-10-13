
<?php
$secciones = [
    'recuerdos' => [
        'titulo' => 'Recuerdos de MEDAC',
        'descripcion' => 'Un espacio para compartir fotografías, experiencias y momentos especiales de nuestra comunidad.',
        'icono' => '✦'
    ],
    'eventos' => [
        'titulo' => 'Eventos de MEDAC',
        'descripcion' => 'Aquí encontrarás información sobre actividades, encuentros y próximos eventos del centro.',
        'icono' => '▦'
    ],
    'noticias' => [
        'titulo' => 'Noticias',
        'descripcion' => 'Estamos preparando este apartado para ofrecerte todas las noticias completas de MEDAC.',
        'icono' => '▤'
    ]
];

$seccion = $_GET['seccion'] ?? '';
$seccion = is_string($seccion) ? $seccion : '';

if (!array_key_exists($seccion, $secciones)) {
    http_response_code(404);

    $pagina = [
        'titulo' => 'Página no encontrada',
        'descripcion' => 'No hemos encontrado el apartado que buscas.',
        'icono' => '!'
    ];
} else {
    $pagina = $secciones[$seccion];
}

function escapar($texto) {
    return htmlspecialchars(
        $texto,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= escapar($pagina['titulo']) ?> | MEDAC AL DÍA</title>

    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header class="cabecera" id="inicio">
    <a href="index.php#inicio" class="marca">
        <img
            src="/codigoshtmljs/davplus/imagenes/logoMedac1.jpeg"
            alt="Logo de MEDAC"
            class="logo"
        >
        <span class="nombre-periodico">MEDAC AL DÍA</span>
        <span class="lema">La actualidad de nuestra comunidad</span>
    </a>

    <nav class="navegacion" aria-label="Navegación principal">
        <ul>
            <li><a href="index.php#inicio">Inicio</a></li>
            <li><a href="index.php#noticias">Noticias</a></li>
            <li><a href="apartado.php?seccion=recuerdos">Recuerdos</a></li>
            <li><a href="apartado.php?seccion=eventos">Eventos</a></li>
            <li><a href="opiniones.php">Opiniones</a></li>
        </ul>
    </nav>
</header>

<main class="pagina-interior">
    <section class="tarjeta-interior">

        <div class="icono-disponible" aria-hidden="true">
            <?= escapar($pagina['icono']) ?>
        </div>

        <p class="etiqueta">MEDAC AL DÍA</p>

        <h1><?= escapar($pagina['titulo']) ?></h1>

        <p class="texto-suave">
            <?= escapar($pagina['descripcion']) ?>
        </p>

        <?php if (array_key_exists($seccion, $secciones)): ?>
            <div class="mensaje">
                <strong>Estamos trabajando en este apartado.</strong>
                <p>
                    Todavía no hay contenido disponible.
                    Volveremos a actualizarlo cuando tengamos novedades.
                </p>
            </div>
        <?php endif; ?>

        <a class="boton" href="index.php#inicio">
            Volver al inicio
        </a>

    </section>
</main>

<footer class="pie">
    <a href="index.php#inicio" class="marca-pie">MEDAC AL DÍA</a>
    <p>La actualidad de nuestra comunidad educativa.</p>
    <p class="copyright">© 2026 MEDAC AL DÍA</p>
</footer>

</body>
</html>
