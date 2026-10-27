// Modo oscuro
const btnTema = document.querySelector("#btn-tema");
btnTema.addEventListener("click", () => {
  document.body.classList.toggle("oscuro");
});

// Menú hamburguesa
const btnMenu = document.querySelector("#btn-menu");
btnMenu.addEventListener("click", () => {
  document.querySelector("nav ul").classList.toggle("abierto");
});

// Validación del formulario
const formulario = document.querySelector("#form-contacto");
const aviso = document.querySelector("#aviso-contacto");

formulario.addEventListener("submit", (event) => {
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre === "") {
    event.preventDefault(); 
    aviso.textContent = "Falta tu nombre.";
    aviso.classList.remove("exito");
    aviso.classList.add("error");
  } else if (correo.includes("@") === false) {
    event.preventDefault(); 
    aviso.textContent = "Ese correo no parece correo.";
    aviso.classList.remove("exito");
    aviso.classList.add("error");
  } else {
   
    aviso.textContent = "Mensaje recibido, enviando...";
    aviso.classList.remove("error");
    aviso.classList.add("exito");
  }
});