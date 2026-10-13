
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MEDAC AL DÍA | Periódico del alumnado</title>
    <meta name="description" content="Noticias, actividades y actualidad de MEDAC.">

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <!-- CABECERA -->
    <header id="inicio" class="cabecera">

        <a href="index.php#inicio" class="marca">
            <img
                src="/codigoshtmljs/davplus/imagenes/logoMedac1.jpeg"
                alt="Logo de MEDAC"
                class="logo"
            >
            <span class="nombre-periodico">MEDAC AL DÍA</span>
        </a>

        <nav class="navegacion" aria-label="Navegación principal">
            <ul>
                <li><a class="activo" href="index.php#inicio">Inicio</a></li>
                <li><a href="index.php#noticias">Noticias</a></li>
                <li><a href="apartado.php?seccion=recuerdos">Recuerdos</a></li>
                <li><a href="apartado.php?seccion=eventos">Eventos</a></li>
                <li><a href="opiniones.php">Opiniones</a></li>
            </ul>
        </nav>

    </header>

    <main>

        <!-- PRESENTACIÓN -->
        <section class="introduccion">
            <p class="etiqueta">EL PERIÓDICO DE MEDAC</p>
            <h1>Lo que pasa en nuestro centro</h1>
            <p>
                Noticias, experiencias y actividades de nuestra comunidad educativa.
            </p>
        </section>

        <!-- NOTICIAS DESTACADAS -->
        <section class="destacadas" aria-label="Noticias destacadas">

            <article class="noticia-destacada">
                <a href="apartado.php?seccion=noticias" class="imagen-enlace">
                    <img
                        src="https://placehold.co/1000x560/003590/ffffff?text=MEDAC+AL+DIA"
                        alt="Estudiantes de MEDAC durante una actividad"
                    >
                </a>

                <div class="contenido-destacado">
                    <span class="categoria">ACTUALIDAD</span>
                    <h2>
                        <a href="apartado.php?seccion=noticias">
                            MEDAC prepara nuevas actividades para el alumnado
                        </a>
                    </h2>
                    <p>
                        El centro prepara nuevas actividades y propuestas
                        para los estudiantes durante este curso.
                    </p>
                    <a class="leer-mas" href="apartado.php?seccion=noticias">
                        Leer noticia →
                    </a>
                </div>
            </article>

            <article class="noticia-destacada secundaria-destacada">
                <a href="apartado.php?seccion=noticias" class="imagen-enlace">
                    <img
                        src="https://placehold.co/800x450/e8edf5/003590?text=Nuevo+curso"
                        alt="Estudiantes comenzando el nuevo curso"
                    >
                </a>

                <div class="contenido-destacado">
                    <span class="categoria">VIDA ACADÉMICA</span>
                    <h2>
                        <a href="apartado.php?seccion=noticias">
                            Los estudiantes comienzan un nuevo curso
                        </a>
                    </h2>
                    <p>
                        Nuevos proyectos, aprendizajes y experiencias
                        para el alumnado.
                    </p>
                </div>
            </article>

        </section>

        <!-- PORTADA Y BARRA LATERAL -->
        <div class="portada">

            <section class="secundarias" id="noticias">

                <div class="titulo-seccion">
                    <div>
                        <p class="etiqueta">AL DÍA</p>
                        <h2>Últimas noticias</h2>
                    </div>
                    <span class="linea-decorativa"></span>
                </div>


        <!-- NOTICIA 1 DEL PERIODICO -->

                <article class="tarjeta-noticia">
                    <a href="noticia.php?id=1" class="imagen-enlace">
                        <img
                            src="/pruebasMedac/sasa/imagenes/PsicologíaDinero.png"
                            alt="Psicología del dinero"
                            loading="lazy"
                        >
                    </a>
                    <div class="contenido-tarjeta">
                        <span class="categoria">ECONOMÍA</span>
                        <h3>
                            <a href="noticia.php?id=1">
                                Psicología del dinero, 
                                aprender a gastar el dinero 
                            </a>
                        </h3>
                        <p>
                            Aprender a gestionar el dinero también depende de nuestros hábitos y emociones
                        </p>
                        <a class="leer-mas" href="noticia.php?id=1">
                            Leer más →
                        </a>
                    </div>
                </article>

        <!-- NOTICIA 2 DEL PERIODICO -->
                <article class="tarjeta-noticia">
                    <a href="noticia.php?id=2" class="imagen-enlace">
                        <img
                            src="/pruebasMedac/sasa/imagenes/TalleresSaludMental.jpg"
                            alt="Docentes de MEDAC"
                            loading="lazy"
                        >
                    </a>
                    <div class="contenido-tarjeta">
                        <span class="categoria">EDUCACIÓN</span>
                        <h3>
                            <a href="noticia.php?id=2">
                                Cuando enseñar va más allá de las aulas
                            </a>
                        </h3>
                        <p>
                            Los docentes también escuchan, acompañan y dejan huella en sus alumnos.
                        </p>
                        <a class="leer-mas" href="noticia.php?id=2">
                            Leer más →
                        </a>
                    </div>
                </article>

        <!-- NOTICIA 3 DEL PERIODICO -->
                <article class="tarjeta-noticia">
                    <a href="noticia.php?id=3" class="imagen-enlace">
                        <img
                            src="/pruebasMedac/sasa/imagenes/Día-Hispanidad.jpeg"
                            alt="12 DE OCTUBRE"
                            loading="lazy"
                        >
                    </a>
                    <div class="contenido-tarjeta">
                        <span class="categoria">HISTORIA Y CULTURA</span>
                        <h3>
                            <a href="noticia.php?id=3">
                                12 de octubre: historia y celebración de 
una fecha con muchos significados 
                            </a>
                        </h3>
                        <p>
                            Una fecha que se interpreta de diferentes maneras en España y América Latina.
                        </p>
                        <a class="leer-mas" href="noticia.php?id=3">
                            Leer más →
                        </a>
                    </div>
                </article>

        <!-- NOTICIA 4 DEL PERIODICO -->
                <article class="tarjeta-noticia">
                    <a href="noticia.php?id=4" class="imagen-enlace">
                        <img
                            src="/pruebasMedac/sasa/imagenes/laVivienda.png"
                            alt="la vivienda"
                            loading="lazy"
                        >
                    </a>
                    <div class="contenido-tarjeta">
                        <span class="categoria">ACTUALIDAD</span>
                        <h3>
                            <a href="noticia.php?id=4">
                                Tienes trabajo, tienes ganas... y no tienes dónde vivir
                            </a>
                        </h3>
                        <p>
                           El acceso a la vivienda sigue siendo un reto para muchos jóvenes.
                        </p>
                        <a class="leer-mas" href="noticia.php?id=4">
                            Consultar apartado →
                        </a>
                    </div>
                </article>

                <article class="tarjeta-noticia">
                    <a href="apartado.php?seccion=eventos" class="imagen-enlace">
                        <img
                            src="https://placehold.co/600x340/e8edf5/003590?text=Informatica"
                            alt="Estudiantes de informática trabajando"
                            loading="lazy"
                        >
                    </a>
                    <div class="contenido-tarjeta">
                        <span class="categoria">INFORMÁTICA</span>
                        <h3>
                            <a href="apartado.php?seccion=eventos">
                                Los alumnos presentan sus proyectos
                            </a>
                        </h3>
                        <p>
                            Los estudiantes muestran algunos de los trabajos
                            realizados durante el curso.
                        </p>
                        <a class="leer-mas" href="apartado.php?seccion=eventos">
                            Consultar apartado →
                        </a>
                    </div>
                </article>

                <article class="tarjeta-noticia">
                    <a href="apartado.php?seccion=recuerdos" class="imagen-enlace">
                        <img
                            src="https://placehold.co/600x340/f1faee/003590?text=Experiencias"
                            alt="Alumnos participando en una actividad"
                            loading="lazy"
                        >
                    </a>
                    <div class="contenido-tarjeta">
                        <span class="categoria">COMUNIDAD</span>
                        <h3>
                            <a href="apartado.php?seccion=recuerdos">
                                Nuevas experiencias para el alumnado
                            </a>
                        </h3>
                        <p>
                            Las experiencias compartidas forman parte
                            de la vida en el centro.
                        </p>
                        <a class="leer-mas" href="apartado.php?seccion=recuerdos">
                            Ver recuerdos →
                        </a>
                    </div>
                </article>

            </section>

            <!-- LATERAL -->
            <aside class="lateral">

                <section class="mas-leido">
                    <p class="etiqueta">PARA NO PERDERSE</p>
                    <h2>Lo más leído</h2>
                    <ol>
                        <li>
                            <a href="apartado.php?seccion=noticias">
                                Las novedades de este curso
                            </a>
                        </li>
                        <li>
                            <a href="apartado.php?seccion=eventos">
                                Próximos eventos de MEDAC
                            </a>
                        </li>
                        <li>
                            <a href="apartado.php?seccion=noticias">
                                Los proyectos de los estudiantes
                            </a>
                        </li>
                        <li>
                            <a href="apartado.php?seccion=noticias">
                                Actividades para el alumnado
                            </a>
                        </li>
                        <li>
                            <a href="apartado.php?seccion=noticias">
                                Noticias de nuestro centro
                            </a>
                        </li>
                    </ol>
                </section>

                <section class="bloque-lateral">
                    <span class="icono-lateral">✦</span>
                    <h3>¿Tienes algo que contar?</h3>
                    <p>
                        Comparte tu opinión y ayúdanos a mejorar
                        nuestro periódico.
                    </p>
                    <a class="boton" href="opiniones.php">Dejar una reseña</a>
                </section>

                <section class="publicidad">
                    <span>ESPACIO RESERVADO</span>
                    <p>Publicidad y colaboraciones</p>
                </section>

            </aside>

        </div>

    </main>

    <!-- PIE DE PÁGINA -->
    <footer id="pie" class="pie">

        <a href="index.php#inicio" class="marca-pie">MEDAC AL DÍA</a>
        <p>La actualidad de nuestra comunidad educativa.</p>

        <nav class="enlaces-pie" aria-label="Navegación del pie de página">
            <a href="index.php#inicio">Inicio</a>
            <a href="index.php#noticias">Noticias</a>
            <a href="apartado.php?seccion=recuerdos">Recuerdos</a>
            <a href="apartado.php?seccion=eventos">Eventos</a>
            <a href="opiniones.php">Opiniones</a>
        </nav>

        <p class="copyright">
            © 2026 MEDAC AL DÍA · Proyecto informativo
        </p>

    </footer>

</body>
</html>
