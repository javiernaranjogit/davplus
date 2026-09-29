# davplus.click

Web de noticias de **Davante Móstoles**.

Sitio estático servido con Apache. El contenido se publica desde este repositorio.

## Estado

En desarrollo. Ahora mismo hay una página de inicio provisional.

## Equipos

El trabajo se reparte en dos equipos:

### Equipo 1 — Front-end

Maquetación, estilos e interfaz del sitio.

| # | Integrante |
|---|------------|
| 1 | Pedro |
| 2 | Asier |
| 3 | Diego |
| 4 | Marcos |
| 5 | Edison |

### Equipo 2 — Back-end

Lógica de servidor, datos y gestión de las noticias.

| # | Integrante |
|---|------------|
| 1 | Ruben |
| 2 | Achraf |
| 3 | Gabriel |
| 4 | Mario |
| 5 | Paul |

## Estructura

```
.
├── index.html      # Página de inicio
├── .gitignore
└── README.md
```

## Desarrollo en local

No hace falta ninguna dependencia ni proceso de build: es HTML estático. Basta con abrir `index.html` en el navegador.

Si prefieres servirlo por HTTP para que las rutas absolutas funcionen igual que en producción:

```bash
python3 -m http.server 8000
# http://localhost:8000
```

## Despliegue

El directorio del sitio en el servidor es a la vez el working tree de este repositorio, así que desplegar consiste en traer los cambios:

```bash
cd /var/www/davplus
git pull
```

Los cambios quedan publicados al instante en <https://davplus.click>; Apache sirve los ficheros directamente y no hay que reiniciar nada.

## Notas de infraestructura

- **Servidor:** Apache en el VPS, con el sitio en `/var/www/davplus`.
- **VirtualHosts:** `davplus.conf` (puerto 80, redirige todo a HTTPS) y `davplus-le-ssl.conf` (puerto 443), en `/etc/apache2/sites-available/`.
- **TLS:** certificado Let's Encrypt para `davplus.click` y `www.davplus.click`, con renovación automática por certbot.
- **Seguridad:** el acceso web a `.git/` y a los ficheros `.git*` está bloqueado en la configuración de Apache (devuelven 403). Es importante mantenerlo, porque el repositorio vive dentro del directorio que se sirve públicamente.
- `.well-known/` está en `.gitignore`: lo genera certbot durante las validaciones y no debe versionarse.
