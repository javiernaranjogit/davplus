<?php

$id = $_GET["id"];

if ($id == 1) {
    $titulo = "MEDAC prepara nuevas actividades para el alumnado";
    $texto = "El centro prepara nuevas actividades y propuestas para los estudiantes durante este curso.";
}

elseif ($id == 2) {
    $titulo = "Los estudiantes de MEDAC comienzan un nuevo curso";
    $texto = "El alumnado comienza una nueva etapa con nuevos proyectos, actividades y experiencias.";
}

elseif ($id == 3) {
    $titulo = "Nuevos proyectos para los estudiantes";
    $texto = "Los alumnos comienzan nuevos proyectos relacionados con sus estudios.";
}

elseif ($id == 4) {
    $titulo = "El centro organiza nuevas actividades";
    $texto = "MEDAC prepara diferentes actividades para el alumnado.";
}

elseif ($id == 5) {
    $titulo = "Así son las clases de este curso";
    $texto = "Los estudiantes continúan avanzando en sus diferentes ciclos formativos.";
}

elseif ($id == 6) {
    $titulo = "Próximos eventos del centro";
    $texto = "Consulta las actividades y eventos programados para las próximas semanas.";
}

elseif ($id == 7) {
    $titulo = "Los alumnos de informática presentan sus proyectos";
    $texto = "Los estudiantes muestran algunos de los trabajos realizados durante el curso.";
}

elseif ($id == 8) {
    $titulo = "Nuevas experiencias para el alumnado";
    $texto = "Los alumnos podrán participar en nuevas experiencias durante el curso.";
}

else {
    $titulo = "Noticia no encontrada";
    $texto = "La noticia que buscas no existe.";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $titulo; ?></title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header id="cabecera">

        <h1>MEDAC AL DÍA</h1>

        <img src="/codigoshtmljs/davplus/imagenes/logoMedac1.jpeg"
             alt="Logo de Medac"
             width="200">

        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Recuerdos</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Opiniones</a></li>
            </ul>
        </nav>

    </header>


    <main>

        <article class="principal">

            <h2><?php echo $titulo; ?></h2>

            <p><?php echo $texto; ?></p>

        </article>

    </main>


    <footer id="pie">

        <p>MEDAC AL DÍA</p>
        <p>Inicio | Noticias | Recuerdos | Eventos | Opiniones</p>
        <p>Instagram | X | YouTube</p>
        <p>Aviso legal | Política de privacidad</p>
        <p>© 2026 MEDAC AL DÍA - Todos los derechos reservados</p>

    </footer>

</body>

</html>