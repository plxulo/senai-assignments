function Mostrar() {
    texto=email.value;
    window.alert(texto);
}

function MostrarJanela() {
    texto = email.value;
    txt.innerHTML = texto;
    janela.style.display = "block";
}

function Fechar() {
    janela.style.display = "none";
}

s = 0;
function Somar() {
    s = s + 1;
    soma.innerHTML = s;
    email.value = s;
}

function Imprimir() {
    window.print();
}

function TocarSom() {
    var som = new Audio('among-us-grito.mp3');
    som.play();
}