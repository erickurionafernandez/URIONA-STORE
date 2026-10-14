
const btnTema = document.querySelector("#btn-tema");
btnTema.addEventListener("click", () => {
  document.body.classList.toggle("oscuro");
});

const btnMenu = document.querySelector("#btn-menu");
btnMenu.addEventListener("click", () => {
  document.querySelector("nav ul").classList.toggle("abierto");
});

const formulario = document.querySelector("#form-contacto");
const aviso = document.querySelector("#aviso-contacto");

formulario.addEventListener("submit", (event) => {
  event.preventDefault();
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre === "") {
    aviso.textContent = "Falta tu nombre.";
  } else if (correo.includes("@") === false) {
    aviso.textContent = "Ese correo no parece correo.";
  } else {
    aviso.textContent = "Mensaje recibido, te contactamos pronto.";
  }
});
