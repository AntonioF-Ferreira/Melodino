function toggleNavbar() {
    var navbar = document.getElementById("navbar");
    navbar.classList.toggle("active");
}

// ----- FAVORITOS E PLAYER -----

document.addEventListener("DOMContentLoaded", () => {
    const listaMusicas = document.getElementById('lista-musicas');
    const player = document.getElementById('player');
    const playerSource = document.getElementById('player-source');
    const favoritoBtn = document.getElementById('favorito-btn');
    const favoritosUl = document.getElementById('favoritos-ul'); //lista de favoritos

    let favoritos = [];

    // Mudar música
    listaMusicas.addEventListener('change', () => {
        const option = listaMusicas.selectedOptions[0];
        const arquivo = option.dataset.arquivo;

        playerSource.src = arquivo;
        player.load();
        player.play();

        atualizarCoracao();
    });

    // Clique no coração
    favoritoBtn.addEventListener('click', () => {
        const musicaId = listaMusicas.value;
        const titulo = listaMusicas.selectedOptions[0].text;

        const index = favoritos.indexOf(musicaId);

        if (index === -1) {
            // Adicionar aos favoritos
            favoritos.push(musicaId);

            const li = document.createElement('li');
            li.textContent = titulo;
            li.setAttribute('data-id', musicaId);
            favoritosUl.appendChild(li);
        } else {
            // Remover dos favoritos
            favoritos.splice(index, 1);

            const li = favoritosUl.querySelector(`li[data-id="${musicaId}"]`);
            if (li) li.remove();
        }

        atualizarCoracao();
    });

    function atualizarCoracao() {
        const musicaId = listaMusicas.value;

        if (favoritos.includes(musicaId)) {
            favoritoBtn.classList.add('favorito');
        } else {
            favoritoBtn.classList.remove('favorito');
        }
    }
});
