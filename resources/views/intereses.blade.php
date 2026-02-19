<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Intereses</title>
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

        <h1 class="page-title">Mis Intereses</h1>
        <p class="muted">Cosas que me gustan y en las que me interesa seguir aprendiendo.</p>

        <!-- Misma interfaz actual (grid + mini-card) PERO con los textos del código viejo -->
        <div class="grid">

            <div class="mini-card">
                <div class="emoji">💻</div>
                <h3>Tecnología</h3>
                <p class="muted">Me apasiona el desarrollo web y las nuevas herramientas digitales.</p>
            </div>

            <div class="mini-card">
                <div class="emoji">🧴</div>
                <h3>Perfumería</h3>
                <p class="muted">Interés en fragancias, notas aromáticas y emprendimiento.</p>
            </div>

            <div class="mini-card">
                <div class="emoji">🎮</div>
                <h3>Videojuegos</h3>
                <p class="muted">Disfruto jugar y explorar nuevas experiencias gaming.</p>
            </div>

            <div class="mini-card">
                <div class="emoji">🏋️‍♂️</div>
                <h3>Entrenamiento</h3>
                <p class="muted">Me gusta mantenerme activo y mejorar mi condición física.</p>
            </div>

            <div class="mini-card">
                <div class="emoji">📈</div>
                <h3>Emprendimiento</h3>
                <p class="muted">Interés en crear negocios digitales y proyectos propios.</p>
            </div>

            <div class="mini-card">
                <div class="emoji">🌎</div>
                <h3>Aprendizaje</h3>
                <p class="muted">Me gusta aprender constantemente nuevas habilidades.</p>
            </div>

        </div>

        <a class="back" href="/perfil">← Volver al perfil</a>

    </div>
</div>

</body>
</html>
