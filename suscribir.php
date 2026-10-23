<?php
// Recoge el correo del formulario de la newsletter y lo guarda en un CSV.
// El CSV está fuera de la carpeta pública para que no se pueda descargar desde el navegador.

$archivo = __DIR__ . '/../davplus-datos/suscriptores.csv';

date_default_timezone_set('Europe/Madrid');

// Si alguien entra directamente a esta página, lo mandamos a la portada
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}

$correo = trim($_POST['correo'] ?? '');
$correo = strtolower($correo);

if (!filter_var($correo, FILTER_VALIDATE_EMAIL) || strlen($correo) > 100) {
    $titulo = 'Correo no válido';
    $mensaje = 'Revisa que hayas escrito bien tu correo e inténtalo de nuevo.';
} else {

    // Creamos la carpeta de datos si no existe (por ejemplo, en local)
    if (!is_dir(dirname($archivo))) {
        mkdir(dirname($archivo), 0770, true);
    }

    $fichero = fopen($archivo, 'a+');

    if ($fichero === false) {
        $titulo = 'Algo ha fallado';
        $mensaje = 'No hemos podido guardar tu suscripción. Inténtalo más tarde.';
    } else {

        // Bloqueamos el fichero para que dos personas no escriban a la vez
        flock($fichero, LOCK_EX);

        // Comprobamos si el correo ya estaba apuntado
        rewind($fichero);
        $repetido = false;
        while (($fila = fgetcsv($fichero, 0, ',', '"', '')) !== false) {
            if (isset($fila[1]) && $fila[1] === $correo) {
                $repetido = true;
                break;
            }
        }

        if ($repetido) {
            $titulo = 'Ya estabas suscrito';
            $mensaje = 'Este correo ya está en nuestra lista. Seguirás recibiendo el davplus cada lunes.';
        } else {
            fputcsv($fichero, [date('Y-m-d H:i:s'), $correo], ',', '"', '');
            $titulo = '¡Gracias por suscribirte!';
            $mensaje = 'A partir del próximo lunes recibirás el davplus en tu correo.';
        }

        flock($fichero, LOCK_UN);
        fclose($fichero);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MRT5NM4X61"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-MRT5NM4X61');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo) ?> | davplus</title>

    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Source+Serif+4:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <!-- CABECERA -->
    <header class="cabecera">
        <div class="contenedor">
            <a href="index.html" class="logo"><img src="imagenes/logo-dav.png" alt="dav+"></a>
            <div class="lema">
                <p>El periódico de Davante Móstoles</p>
                <small>Hecho por alumnos y profesores del campus · Nº 1</small>
            </div>
        </div>
    </header>

    <main>
        <div class="articulo">
            <span class="categoria">Newsletter</span>
            <h1><?= htmlspecialchars($titulo) ?></h1>
            <p class="entradilla"><?= htmlspecialchars($mensaje) ?></p>
            <a href="index.html" class="volver">← Volver a la portada</a>
        </div>
    </main>

</body>
</html>
