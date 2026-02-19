<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Habilidades</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

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

<h1 class="page-title">Mis Habilidades</h1>

<div class="skill">
    <div class="skill-name">HTML</div>
    <div class="bar"><div class="progress" style="width:85%">85%</div></div>
</div>

<div class="skill">
    <div class="skill-name">CSS</div>
    <div class="bar"><div class="progress" style="width:80%">80%</div></div>
</div>

<div class="skill">
    <div class="skill-name">Laravel</div>
    <div class="bar"><div class="progress" style="width:70%">70%</div></div>
</div>

<div class="skill">
    <div class="skill-name">Git & GitHub</div>
    <div class="bar"><div class="progress" style="width:75%">75%</div></div>
</div>

</div>
</div>

</body>
</html>
