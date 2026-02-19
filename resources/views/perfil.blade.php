<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="nav-inner">
        <a class="brand" href="/perfil">
            <span class="brand-badge">M</span>
            <span>Mi Perfil</span>
        </a>

        <div class="nav-links">
            <a href="/perfil">Perfil</a>
            <a href="/perfil/intereses">Intereses</a>
            <a href="/perfil/habilidades">Habilidades</a>
            <a href="/perfil/metas">Metas</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">

        <h1 class="page-title">Mi Perfil</h1>

        <!-- Foto -->
        <div style="display:flex; justify-content:center; margin: 10px 0 18px;">
            <img
                src="{{ asset('img/perfil.jpeg') }}"
                alt="Foto de perfil"
                style="width:170px; height:170px; object-fit:cover; border-radius:50%;
                       border: 4px solid #fff; box-shadow: 0 10px 25px rgba(0,0,0,0.18);"
            >
        </div>

        <!-- Info personal  -->
        <div style="text-align:center; margin-bottom: 12px;">
            <p style="margin:6px 0;"><strong>Nombre:</strong> Santiago Jácome</p>
            <p style="margin:6px 0;"><strong>Carrera:</strong> Ingeniería de Sistemas</p>
            <p style="margin:6px 0;"><strong>Ciudad:</strong> Colombia</p>
            <p class="muted" style="margin:8px 0 0;">Estudiante • Desarrollo web • Proyectos</p>
        </div>

        <h2 class="section-title">Información personal</h2>
        <p>
            Soy estudiante de ingeniería apasionado por la tecnología,
            el desarrollo web y la creación de soluciones digitales.
        </p>

        <h2 class="section-title">Pasatiempos y gustos</h2>
        <ul>
            <li>Entrenar y deportes</li>
            <li>Tecnología y gadgets</li>
            <li>Perfumería y emprendimiento</li>
            <li>Videojuegos</li>
        </ul>

        <h2 class="section-title">Skills técnicas</h2>
        <div class="badges">
            <span class="badge">HTML</span>
            <span class="badge">CSS</span>
            <span class="badge">JavaScript</span>
            <span class="badge">PHP</span>
            <span class="badge">Laravel</span>
            <span class="badge">SQL</span>
            <span class="badge">Git & GitHub</span>
        </div>

        <h2 class="section-title">Objetivos profesionales</h2>
        <ul>
            <li>Convertirme en desarrollador full stack</li>
            <li>Crear proyectos tecnológicos propios</li>
            <li>Trabajar en una empresa de tecnología</li>
            <li>Seguir aprendiendo nuevas herramientas</li>
        </ul>

    </div>
</div>

</body>
</html>
