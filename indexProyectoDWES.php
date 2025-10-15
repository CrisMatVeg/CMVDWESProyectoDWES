<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cristian Mateos Vega</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <style>

            @font-face {
                font-family: 'MiFuente';
                src: url('./webroot/fonts/Audiowide-Regular.ttf') format('woff2'),
                    url('./webroot/fonts/Audiowide-Regular.ttf') format('woff');
                font-weight: normal;
                font-style: normal;
            }

            * {
                font-family: "MiFuente";
                font-weight: 200;
            }

            body {
                margin: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            #videofondo {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                z-index: -1;
            }

            span {
                color: rgb(255, 255, 255);
                display: block;
                padding-top: 15px;
            }

            a {
                text-decoration: underline;
                color: #fff;
            }

            #iconos {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            #iconos * {
                margin: 10px;
            }

            header {
                position: fixed;
                display: flex;
                justify-content: space-around;
                align-items: center;
                top: 0;
                left: 0;
                right: 0;
                background: #52213d60;
                color: #fff;
                text-align: center;
                padding: 15px;
                z-index: 1000;
                backdrop-filter: blur(7px);
                box-shadow: 0px 0px 30px rgba(227,228,237,0.37);
            }

            footer {
                position: fixed;
                display: flex;
                justify-content: space-between;
                align-items: center;
                bottom: 0;
                left: 0;
                right: 0;
                background: #52213d60;
                color: #fff;
                text-align: center;
                padding: 15px;
                z-index: 1000;
                backdrop-filter: blur(7px);
                box-shadow: 0px 0px 20px rgba(227,228,237,0.37);
            }

            main {
                flex: 1;
                margin-top: 70px;
                margin-bottom: 70px;
                display: grid;
                grid-template-columns: 1fr 1fr;
                column-gap: 10px;
                row-gap: 10px;
                max-height: 100vh;
                height: 100vh;
                justify-items: center;
                align-content: center;
                overflow: hidden;
                padding: 10px;
            }

            .card {
                position: relative;
                overflow: hidden;
                border-radius: 7px;
                cursor: pointer;
                transition: transform 0.3s ease;
                transform-origin: center;
                background-size: cover;
                background-position: center;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                font-weight: bold;
                font-size: 1.2rem;
                text-align: center;
                z-index: 0;
                padding: 15px;
                margin: 10px;
                width: 80%;
                background: #111111a9;
            }

            .overlay {
                position: absolute;
                inset: 0;
                opacity: 0;
                transition: opacity 0.3s ease;
                border-radius: 7px;
                z-index: 1;
                background: #111111a9;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
            }

            .card span {
                position: relative;
                z-index: 2;
            }

            a span:hover {
                transform: scale(1.05);
            }

            .card:hover {
                box-shadow: 0 0 20px rgba(183, 0, 255, 0.5);
            }


            .card:hover .overlay {
                opacity: 1;
            }

            .card::before {
                content: '';
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                transform: rotate(-45deg);
                transition: all 0.5s ease;
                opacity: 0;
            }

            .card::before {
                background: linear-gradient(0deg,
                    transparent,
                    transparent 30%,
                    rgba(204, 0, 255, 0.3));
            }

            .card:hover::before {
                opacity: 1;
                transform: rotate(-45deg) translateY(100%);
            }
        </style>
    </head>

    <body>
        <video autoplay muted loop id="videofondo">
            <source src="./webroot/images/videofondo.mp4" type="video/mp4">
        </video>
        <header>
            <h2>DAW2</h2>
            <h1>Desarrollo Web Entorno Servidor</h1>
            <h2>25/26</h2>
        </header>

        <main>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT1: DESARROLLO WEB EN ENTORNO SERVIDOR</span>
                    <a href="./doc/EstudioTema1.pdf" target="_blank">
                        <span>EstudioTema1.pdf</span>
                    </a>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT2: INSTALACIÓN, CONFIGURACIÓN Y DOCUMENTACIÓN DEL ENTORNO DE DESARROLLO Y DEL ENTORNO DE EXPLOTACIÓN</span>
                    <a href="./doc/EstudioTema2.html" target="_blank">
                        <span>EstudioTema2.html</span>
                    </a>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <a href="../CMVDWESProyectoTema3/indexProyectoTema3.php">
                        <span>UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</span>
                    </a>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT4: TÉCNICAS DE ACCESO A DATOS EN PHP</span>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT5: DESARROLLO DE APLICACIONES WEB</span>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT6: APLICACIONES WEB MULTICAPA</span>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT7: PROGRAMACIÓN DE SERVICIOS WEB</span>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT8: DESARROLLO DE APLICACIONES WEB HÍBRIDAS</span>
                </span>
            </div>
        </main>

        <footer>
            <p>© 2025-26 IES Los Sauces. Todos los derechos reservados.</p>
            <div id="iconos">
                <a href="https://github.com/CrisMatVeg" target="_blank" title="Github"><i
                        class="fa-brands fa-github fa-2xl"></i></a>
                <a href="../index.html" title="Inicio"><i class="fa-solid fa-house fa-xl"></i></a>
            </div>
        </footer>
    </body>

</html>