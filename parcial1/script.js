function confirmarPedido() {
  const mensaje = document.querySelector("#mensaje");
  mensaje.textContent = "Pedido confirmado - te atiende Erick Weimar Uriona Fernandez";
  mensaje.classList.remove("oculto");
}

document.querySelector("#btn-confirmar").addEventListener("click", confirmarPedido);
