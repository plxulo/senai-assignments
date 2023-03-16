var selecao = false;
const radioInput = getElementByName("data");

function checkButton() {
    const form = document.getElementById("formulario");
    const button = document.getElementById("enviar");
    form.classList.add("aparecer");
    button.classList.add("aparecer");   
    setTimeout(() => {
        form.classList.add("ativo");
        button.classList.add("ativo")
    }, 100);
};

form.addEventListener("submit", (event) => {
    event.preventDefault();
    
    for (let i = 0; i < radioInput.length; i++) {
        if (radioInput[i].checked) {
          genderSelected = true;
          break;
        }
      }
    
    if (!selecao) {
        alert("selecione algo");
        return;
    }
});