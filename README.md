# davplus.click

Web de noticias de Davante Móstoles. Proyecto de clase de 2º DAW.

## Equipos

### Equipo 1: Front-end

Maquetación, estilos e interfaz.

- Pedro
- Asier
- Diego
- Achraf
- Edison

### Equipo 2: Back-end

Servidor, base de datos y gestión de noticias.

- Ruben
- Marcos
- Gabriel
- Mario
- Paul

## Estructura

```
index.html          -> portada
estilos.css         -> todos los estilos de la web
noticias/           -> una página HTML por noticia
imagenes/           -> fotos de las noticias
```

## Normas

- Nada de estilos en línea (`style="..."`) ni etiquetas `<style>` en el HTML. Todo va en `estilos.css`, dentro de su apartado y con su comentario.
- Las imágenes van en `imagenes/` con nombres en minúscula, sin tildes ni espacios (`salud-mental.jpg`). Antes de subirlas, reducidlas: ninguna debería pasar de 300 KB.
- Cada noticia nueva es un HTML en `noticias/`. Lo más fácil es copiar una que ya exista y cambiar el contenido. Después hay que enlazarla desde la portada.

## Trabajar en local

Es HTML estático, no hay que instalar nada. Podéis abrir `index.html` directamente en el navegador o levantar un servidor:

```bash
python3 -m http.server 8000
```

y entrar en http://localhost:8000

## Despliegue

La carpeta del servidor (`/var/www/davplus`) es un clon de este repositorio. Para publicar los cambios:

```bash
cd /var/www/davplus
git pull
```

Apache sirve los ficheros directamente, no hay que reiniciar nada.

## Notas

- La web tiene HTTPS con Let's Encrypt (certbot lo renueva solo).
- `.well-known/` la genera certbot, por eso está en el `.gitignore`.
- El acceso a `.git` desde el navegador está bloqueado en Apache. No quitéis ese bloqueo: el repositorio está dentro de la carpeta pública.
