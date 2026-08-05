function confirmarturno() {
    var parrafo = document.getElementById("mensaje").value;
    parrafo.textcontent = "turno recibido-te atiende :Ronald Montaño";
    parrafo.classList.add("oculto");
}
var botton = document.querySelector("#btn-confirmar");
botton.addEventListener("click", confirmarturno);
