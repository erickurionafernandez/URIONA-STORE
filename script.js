const formulario = document.querySelector("#form-contacto");
const aviso = document.querySelector("#aviso-contacto");

formulario.addEventListener("submit", (event) => {
  event.preventDefault();
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre === "") {
    aviso.textContent = "Falta tu nombre.";
    aviso.classList.remove("exito");
    aviso.classList.add("error");
  } else if (correo.includes("@") === false) {
    aviso.textContent = "Ese correo no parece correo.";
    aviso.classList.remove("exito");
    aviso.classList.add("error");
  } else {
    aviso.textContent = "Mensaje recibido, te contactamos pronto.";
    aviso.classList.remove("error");
    aviso.classList.add("exito");
  }
});
