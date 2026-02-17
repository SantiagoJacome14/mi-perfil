<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Estilos rápidos -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            color: #444;
            margin-top: 30px;
            border-left: 5px solid #007BFF;
            padding-left: 10px;
        }

        ul {
            line-height: 1.8;
        }

        .info {
            text-align: center;
            margin-bottom: 20px;
        }

        .info p {
            margin: 5px 0;
            color: #555;
        }

        .badge {
            display: inline-block;
            background: #007BFF;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            margin: 4px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Mi Perfil</h1>

    <div class="info">
        <p><strong>Nombre:</strong> Santiago Jácome</p>
        <p><strong>Carrera:</strong> Ingeniería de Sistemas</p>
        <p><strong>Ciudad:</strong> Colombia</p>
    </div>

    <h2>Información personal</h2>
    <p>
        Soy estudiante de ingeniería apasionado por la tecnología,
        el desarrollo web y la creación de soluciones digitales.
    </p>

    <h2>Pasatiempos y gustos</h2>
    <ul>
        <li>Entrenar y deportes</li>
        <li>Tecnología y gadgets</li>
        <li>Perfumería y emprendimiento</li>
        <li>Videojuegos</li>
    </ul>

    <h2>Skills técnicas</h2>
    <div>
        <span class="badge">HTML</span>
        <span class="badge">CSS</span>
        <span class="badge">JavaScript</span>
        <span class="badge">PHP</span>
        <span class="badge">Laravel</span>
        <span class="badge">SQL</span>
        <span class="badge">Git & GitHub</span>
    </div>

    <h2>Objetivos profesionales</h2>
    <ul>
        <li>Convertirme en desarrollador full stack</li>
        <li>Crear proyectos tecnológicos propios</li>
        <li>Trabajar en una empresa de tecnología</li>
        <li>Seguir aprendiendo nuevas herramientas</li>
    </ul>

</div>

</body>
</html>
