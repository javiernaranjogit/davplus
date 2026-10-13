<?php

$id = $_GET["id"];
if ($id == 2) {
    $titulo = "Cuando enseñar va más allá de las aulas";
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

            <p>Cada 5 de octubre se celebra el Día Mundial de los Docentes, una fecha que busca reconocer la importancia de los profesores y su papel en la educación. Sin embargo, la labor de un docente va mucho más allá de explicar una asignatura o corregir exámenes. La relación que establece con sus alumnos puede influir en su motivación, su confianza y, en algunos casos, incluso en su futuro.</p>

            <h2>La importancia de sentirse escuchado</h2>

            <p>La confianza es uno de los elementos fundamentales en la relación entre profesores y alumnos. Cuando un estudiante siente que puede expresar sus dudas, equivocarse sin miedo y pedir ayuda, es más fácil que participe y se implique en su aprendizaje. Cada alumno tiene unas capacidades, dificultades y circunstancias diferentes. Por eso, escuchar y comprender sus necesidades puede ser tan importante como enseñar los contenidos de una asignatura. </p>

            <h2>Profesores que dejan huella</h2>

            <p>A lo largo de nuestra etapa educativa podemos tener muchos profesores, pero algunos terminan siendo especialmente importantes. Puede ser por una conversación, un consejo o simplemente porque fueron capaces de confiar en nosotros cuando nosotros mismos no lo hacíamos. Un profesor puede ayudar a un estudiante a descubrir una vocación, superar una dificultad o recuperar la motivación para continuar estudiando. Aunque los conocimientos aprendidos puedan olvidarse con el paso del tiempo, esas experiencias pueden permanecer durante muchos años. </p>

            <h2>Una relación de aprendizaje mutuo</h2>

            <p>La relación entre profesores y alumnos no consiste únicamente en que uno enseña y otro aprende. Los docentes también aprenden de sus estudiantes y deben adaptarse constantemente a nuevas generaciones, tecnologías y formas de comunicarse. Actualmente, las aulas han cambiado considerablemente. Internet, las redes sociales y la inteligencia artificial forman parte de la vida cotidiana de los jóvenes y también plantean nuevos retos para la educación. En este contexto, la capacidad de los docentes para comprender y acompañar a sus alumnos adquiere todavía más importancia. </p>

            <h2>Mucho más que una asignatura</h2>

            <p>El Día Mundial de los Docentes sirve para recordar que enseñar no consiste solamente en transmitir conocimientos. Un profesor también puede ayudar a desarrollar valores como el esfuerzo, la responsabilidad, el respeto y la confianza. Por eso, reconocer la labor de los docentes significa valorar no solo las clases que imparten, sino también el impacto que pueden tener en las personas que pasan por sus aulas. Porque, al final, puede que no recordemos todas las lecciones que nos enseñaron, pero sí recordaremos a aquellos profesores que hicieron que creyéramos un poco más en nosotros mismos. </p>

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