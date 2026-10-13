
<?php
$mensaje = '';
$error = '';

function escapar($texto) {
    return htmlspecialchars(
        $texto,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = trim($_POST['nombre'] ?? '');
    $valoracion = $_POST['valoracion'] ?? '';
    $comentario = trim($_POST['comentario'] ?? '');

    if (
        !is_string($nombre) ||
        !is_string($valoracion) ||
        !is_string($comentario)
    ) {
        $error = 'Los datos enviados no son válidos.';
    } elseif (
        $nombre === '' ||
        mb_strlen($nombre) > 60 ||
        !in_array($valoracion, ['1', '2', '3', '4', '5'], true) ||
        mb_strlen($comentario) < 10 ||
        mb_strlen($comentario) > 2000
    ) {
        $error = 'Revisa los campos. El comentario debe tener entre 10 y 2000 caracteres.';
    } else {

        $archivo = __DIR__ . '/resenas.csv';
        $gestor = @fopen($archivo, 'ab');

        if ($gestor === false) {
            $error = 'No se ha podido guardar la reseña. Inténtalo más tarde.';
        } else {

            if (flock($gestor, LOCK_EX)) {

                // Si el archivo está vacío, escribimos la cabecera.
                if (filesize($archivo) === 0) {
                    fputcsv(
                        $gestor,
                        ['Fecha', 'Nombre', 'Valoracion', 'Comentario'],
                        ',',
                        '"',
                        ''
                    );
                }

                $guardado = fputcsv(
                    $gestor,
                    [
                        date('Y-m-d H:i:s'),
                        $nombre,
                        $valoracion,
                        $comentario
                    ],
                    ',',
                    '"',
                    ''
                );

                fflush($gestor);
                flock($gestor, LOCK_UN);

                if ($guardado !== false) {
                    $mensaje = '¡Gracias! Tu reseña se ha guardado correctamente.';
                    $_POST = [];
                } else {
                    $error = 'No se ha podido guardar la reseña.';
                }

            } else {
                $error = 'No se ha podido acceder al archivo de reseñas.';
            }

            fclose($gestor);
        }
    }
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Opiniones | MEDAC AL DÍA</title>
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
            <li><a class="activo" href="opiniones.php">Opiniones</a></li>
        </ul>
    </nav>
</header>

<main class="pagina-interior">

    <section class="tarjeta-interior">

        <p class="etiqueta">TU OPINIÓN CUENTA</p>
        <h1>Déjanos tu reseña</h1>

        <p class="texto-suave">
            Queremos conocer tu experiencia y saber qué podemos mejorar
            en MEDAC AL DÍA.
        </p>

        <?php if ($mensaje !== ''): ?>
            <div class="mensaje" role="status">
                <?= escapar($mensaje) ?>
            </div>
        <?php endif; ?>

        <?php if ($error !== ''): ?>
            <div class="mensaje mensaje-error" role="alert">
                <?= escapar($error) ?>
            </div>
        <?php endif; ?>

        <form class="formulario-resena" method="post" action="opiniones.php">

            <div class="campo">
                <label for="nombre">Nombre o apodo</label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    maxlength="60"
                    required
                    autocomplete="nickname"
                    value="<?= escapar($_POST['nombre'] ?? '') ?>"
                    placeholder="¿Cómo te llamamos?"
                >
            </div>

            <div class="campo">
                <label for="valoracion">¿Qué valoración le das?</label>
                <select id="valoracion" name="valoracion" required>
                    <option value="">Selecciona una valoración</option>
                    <option value="5" <?= ($_POST['valoracion'] ?? '') === '5' ? 'selected' : '' ?>>5 - Excelente</option>
                    <option value="4" <?= ($_POST['valoracion'] ?? '') === '4' ? 'selected' : '' ?>>4 - Muy buena</option>
                    <option value="3" <?= ($_POST['valoracion'] ?? '') === '3' ? 'selected' : '' ?>>3 - Buena</option>
                    <option value="2" <?= ($_POST['valoracion'] ?? '') === '2' ? 'selected' : '' ?>>2 - Mejorable</option>
                    <option value="1" <?= ($_POST['valoracion'] ?? '') === '1' ? 'selected' : '' ?>>1 - Mala</option>
                </select>
            </div>

            <div class="campo">
                <label for="comentario">Tu comentario</label>
                <textarea
                    id="comentario"
                    name="comentario"
                    minlength="10"
                    maxlength="2000"
                    required
                    placeholder="Cuéntanos qué te parece el periódico..."
                ><?= escapar($_POST['comentario'] ?? '') ?></textarea>

                <span class="ayuda-formulario">
                    Entre 10 y 2000 caracteres.
                </span>
            </div>

            <p class="ayuda-formulario">
                Las reseñas se guardan para su revisión y no se publican
                automáticamente. No incluyas información personal sensible.
            </p>

            <button class="boton" type="submit">
                Enviar reseña
            </button>

        </form>

    </section>

</main>

<footer class="pie">
    <a href="index.php#inicio" class="marca-pie">MEDAC AL DÍA</a>
    <p>La actualidad de nuestra comunidad educativa.</p>
    <p class="copyright">© 2026 MEDAC AL DÍA</p>
</footer>

</body>
</html>
