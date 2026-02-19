<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Metas</title>
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

        <h1 class="page-title">Mis Metas</h1>
        <p class="muted">Objetivos personales y profesionales que me motivan.</p>

        <!-- Misma interfaz actual (goal) con el texto del código viejo -->
        <div class="goal">
            <h3>🎓 Finalizar mi carrera profesional</h3>
            <p>Completar mis estudios en Ingeniería de Sistemas con excelencia académica.</p>
        </div>

        <div class="goal">
            <h3>💻 Convertirme en desarrollador Full Stack</h3>
            <p>Dominar tecnologías frontend y backend para crear aplicaciones completas.</p>
        </div>

        <div class="goal">
            <h3>🚀 Crear proyectos tecnológicos propios</h3>
            <p>Desarrollar aplicaciones y soluciones digitales con impacto real.</p>
        </div>

        <div class="goal">
            <h3>🌎 Trabajar en una empresa tecnológica</h3>
            <p>Formar parte de un equipo innovador donde pueda crecer profesionalmente.</p>
        </div>

        <div class="goal">
            <h3>📚 Aprender constantemente</h3>
            <p>Mantenerme actualizado en nuevas tecnologías y tendencias del desarrollo.</p>
        </div>

        <div class="goal">
            <h3>💼 Desarrollar emprendimientos digitales</h3>
            <p>Crear negocios en línea relacionados con tecnología y comercio digital.</p>
        </div>

        <a class="back" href="/perfil">← Volver al perfil</a>

    </div>
</div>

</body>
</html>
