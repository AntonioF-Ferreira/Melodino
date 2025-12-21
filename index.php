<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melodino - Home</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    <!-- Hamburger Menu -->
    <div class="hamburger" onclick="toggleNavbar()">
        &#9776; <!-- Símbolo do menu hamburger -->
    </div>

    <!-- Navbar -->
    <div id="navbar" class="navbar">
        <ul>
            <li><a href="index.php">Página Principal</a></li>
            <li><a href="song.php">Músicas</a></li>
            <li><a href="create_song.php">Criar Músicas</a></li>
        </ul>
    </div>

    <!-- Conteúdo -->
    <div class="content">
        <h1>Bem-vindo ao melodino!</h1>
        <p>Um projeto que mistura melodias com arduíno!</p>
    </div>

    <script src="Js/navbar.js"></script>
</body>
</html>


<!-- php -S localhost:8000 -->