<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Habilidades</title>
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

        .skill {
            margin: 20px 0;
        }

        .skill-name {
            font-weight: bold;
            margin-bottom: 6px;
        }

        .bar {
            background: #e0e0e0;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress {
            height: 18px;
            background: #007BFF;
            text-align: right;
            padding-right: 8px;
            color: white;
            font-size: 12px;
            line-height: 18px;
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

    <h1>Mis Habilidades</h1>

    <div class="skill">
        <div class="skill-name">HTML</div>
        <div class="bar">
            <div class="progress" style="width: 85%;">85%</div>
        </div>
    </div>

    <div class="skill">
        <div class="skill-name">CSS</div>
        <div class="bar">
            <div class="progress" style="width: 80%;">80%</div>
        </div>
    </div>

    <div class="skill">
        <div class="skill-name">JavaScript</div>
        <div class="bar">
            <div class="progress" style="width: 70%;">70%</div>
        </div>
    </div>

    <div class="skill">
        <div class="skill-name">PHP</div>
        <div class="bar">
            <div class="progress" style="width: 75%;">75%</div>
        </div>
    </div>

    <div class="skill">
        <div class="skill-name">Laravel</div>
        <div class="bar">
            <div class="progress" style="width: 70%;">70%</div>
        </div>
    </div>

    <div class="skill">
        <div class="skill-name">SQL</div>
        <div class="bar">
            <div class="progress" style="width: 65%;">65%</div>
        </div>
    </div>

    <div class="skill">
        <div class="skill-name">Git & GitHub</div>
        <div class="bar">
            <div class="progress" style="width: 75%;">75%</div>
        </div>
    </div>

    <a href="/perfil" class="back">← Volver al perfil</a>

</div>

</body>
</html>
