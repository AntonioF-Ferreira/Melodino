document.addEventListener("DOMContentLoaded", () => {
    const textarea = document.getElementById("notas");
    const bpmInput = document.getElementById("bpm");
    const tipoNota = document.getElementById("tipo-nota");
    const dottedCheck = document.getElementById("dotted");

    // --- Posicionar sustenidos dinamicamente ---
    const naturais = document.querySelectorAll('.nota-btn:not(.sustenido)');
    const sustenidos = document.querySelectorAll('.nota-btn.sustenido');
    
    const gap = 5; // Gap entre teclas brancas
    const larguraNatural = 60; // largura de cada tecla branca
    const larguraSustenido = 40; // largura de cada tecla preta

    const mapaSustenidos = {
        "C#": 0,
        "D#": 1,
        "F#": 3,
        "G#": 4,
        "A#": 5
    };

    sustenidos.forEach(btn => {
        const nota = btn.dataset.nota;
        const pos = mapaSustenidos[nota];
        const left = (larguraNatural + gap) * pos + (larguraNatural - larguraSustenido/2);
        btn.style.left = `${left}px`;
    });

    function calcularDuracao() {
        const bpm = parseInt(bpmInput.value) || 120;
        let fator = parseFloat(tipoNota.value);

        if (dottedCheck.checked) {
            fator *= 1.5;
        }

        return Math.round((60000 / bpm) * fator);
    }

    document.querySelectorAll(".nota-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            const nota = btn.dataset.nota;
            const duracao = calcularDuracao();
            textarea.value += `${nota} ${duracao}\n`;
        });
    });
});
