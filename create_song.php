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
<label>BPM:</label>
<input type="number" id="bpm" value="120" min="40" max="240">

<label>Tipo de nota:</label>
<select id="tipo-nota">
    <option value="2">Mínima</option>
    <option value="1">Semínima</option>
    <option value="0.5">Colcheia</option>
    <option value="0.25">Semicolcheia</option>
</select>

<label>
    <input type="checkbox" id="dotted">
    Nota pontuada (dotted)
</label>

<textarea id="notas" name="notas" rows="10" required></textarea>

<div class="notas">
    <button type="button" class="nota-btn" data-nota="C">DO</button>
    <button type="button" class="nota-btn" data-nota="D">RÉ</button>
    <button type="button" class="nota-btn" data-nota="E">MI</button>
    <button type="button" class="nota-btn" data-nota="F">FA</button>
    <button type="button" class="nota-btn" data-nota="G">SOL</button>
    <button type="button" class="nota-btn" data-nota="A">LÁ</button>
    <button type="button" class="nota-btn" data-nota="B">SI</button>
</div>
<script src="Js/create_song.js"></script>
<script src="Js/navbar.js"></script>
