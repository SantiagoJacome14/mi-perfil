<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Intereses</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.1);
        }

        .emoji {
            font-size: 40px;
        }

        .card h3 {
            margin-top: 10px;
            color: #444;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 30px;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        .back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Mis Intereses</h1>

    <div class="grid">

        <div class="card">
            <div class="emoji">💻</div>
            <h3>Tecnología</h3>
            <p>Me apasiona el desarrollo web y las nuevas herramientas digitales.</p>
        </div>

        <div class="card">
            <div class="emoji">🧴</div>
            <h3>Perfumería</h3>
            <p>Interés en fragancias, notas aromáticas y emprendimiento.</p>
        </div>

        <div class="card">
            <div class="emoji">🎮</div>
            <h3>Videojuegos</h3>
            <p>Disfruto jugar y explorar nuevas experiencias gaming.</p>
        </div>

        <div class="card">
            <div class="emoji">🏋️‍♂️</div>
            <h3>Entrenamiento</h3>
            <p>Me gusta mantenerme activo y mejorar mi condición física.</p>
        </div>

        <div class="card">
            <div class="emoji">📈</div>
            <h3>Emprendimiento</h3>
            <p>Interés en crear negocios digitales y proyectos propios.</p>
        </div>

        <div class="card">
            <div class="emoji">🌎</div>
            <h3>Aprendizaje</h3>
            <p>Me gusta aprender constantemente nuevas habilidades.</p>
        </div>

    </div>

    <a href="/perfil" class="back">← Volver al perfil</a>

</div>

</body>
</html>
