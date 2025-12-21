document.addEventListener("DOMContentLoaded", () => {
    const textarea = document.getElementById("notas");
    const bpmInput = document.getElementById("bpm");
    const tipoNota = document.getElementById("tipo-nota");
    const dottedCheck = document.getElementById("dotted");

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
