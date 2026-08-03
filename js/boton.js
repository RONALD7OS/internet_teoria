const botonModoOscuro = document.querySelector("#modo-oscuro-btn");
 
// Escucha el clic y cambia la pagina
botonModoOscuro.addEventListener("click", () => {
    document.body.classList.toggle("modo-oscuro");
 
    // Cambia el texto del boton segun el modo activo
    if (document.body.classList.contains("modo-oscuro")) {
        botonModoOscuro.textContent = "☀️ Modo claro";
    } else {
        botonModoOscuro.textContent = "🌙 Modo oscuro";
    }
});