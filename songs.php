<?php
// Por enquanto as músicas ficam em memória
$musicas = [
    ["id" => 1, "titulo" => "Musica 1", "arquivo" => "musica1.mp3"],
    ["id" => 2, "titulo" => "Musica 2", "arquivo" => "musica2.mp3"],
    ["id" => 3, "titulo" => "Musica 3", "arquivo" => "musica3.mp3"],
];

$favoritos = [];

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melodino - Songs</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="hamburger" onclick="toggleNavbar()">&#9776;</div>

    <div id="navbar" class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="songs.php">Songs</a></li>
        </ul>
    </div>

    <div class="content">
        <h1>Músicas:</h1>

        <!-- Dropdown list com músicas -->
        <select id="lista-musicas">
            <?php foreach($musicas as $musica): ?>
                <option value="<?= $musica['arquivo'] ?>"><?= $musica['titulo'] ?></option>
            <?php endforeach; ?>
        </select>

        <!-- Player de áudio -->
        <audio id="player" controls>
            <source id="player-source" src="<?= $musicas[0]['arquivo'] ?>" type="audio/mpeg">
            O teu navegador não suporta o elemento de áudio.
        </audio>

        <!-- Botão de favoritos -->
        <button id="favorito-btn" class="heart-btn">&#10084;</button>

        <div id="favoritos-lista">
            <h3>Favoritos:</h3>
            <ul id="favoritos-ul"></ul>
        </div>
    </div>

    <script src="../js/script.js"></script>
    <script>
        const listaMusicas = document.getElementById('lista-musicas');
        const player = document.getElementById('player');
        const playerSource = document.getElementById('player-source');
        const favoritoBtn = document.getElementById('favorito-btn');
        const favoritosUl = document.getElementById('favoritos-ul');

        // Mudar música ao selecionar no dropdown
        listaMusicas.addEventListener('change', () => {
            playerSource.src = listaMusicas.value;
            player.load();
            player.play();
        });

        // Clicar para Favoritos
        favoritoBtn.addEventListener('click', () => {
            const titulo = listaMusicas.options[listaMusicas.selectedIndex].text;
            const li = document.createElement('li');
            li.textContent = titulo;
            favoritosUl.appendChild(li);
        });
    </script>
</body>
</html>
