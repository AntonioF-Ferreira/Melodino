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
            <li><a href="index.php">Home</a></li>  
            <li><a href="songs.php">Songs</a></li>
        </ul>
    </div>

    <!-- Conteúdo -->
    <div class="content">
        <h1>Bem-vindo ao melodino!</h1>
        <p>Um projeto que mistura melodias com arduíno!</p>
    </div>

    <script src="Js/script.js"></script>
</body>
</html>


<!-- php -S localhost:8000 -->