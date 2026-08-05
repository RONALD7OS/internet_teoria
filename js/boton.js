const botonModoOscuro = document.querySelector("#modo-oscuro-btn");
 

botonModoOscuro.addEventListener("click", () => {
    document.body.classList.toggle("modo-oscuro");
 
    
    if (document.body.classList.contains("modo-oscuro")) {
        botonModoOscuro.textContent = "☀️ Modo claro";
    } else {
        botonModoOscuro.textContent = "🌙 Modo oscuro";
    }
});


const avisoContacto = document.querySelector("#aviso-contacto");
 

function revisarContacto(event) {

    event.preventDefault();
 
   
    const nombre = document.querySelector("#nombre-cliente").value;
    const correo = document.querySelector("#correo-cliente").value;
 
    if (nombre === "") {
    
        avisoContacto.textContent = "Falta tu nombre, caserito.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (correo.includes("@") === false) {
      
        avisoContacto.textContent = "Ese correo no parece correo: le falta el @.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else {
        
        avisoContacto.textContent = "Mensaje recibido, caserito. Te contactamos pronto.";
        avisoContacto.classList.add("exito");
        avisoContacto.classList.remove("error");
    }
}
 

document.querySelector("#formulario-contacto").addEventListener("submit", revisarContacto);