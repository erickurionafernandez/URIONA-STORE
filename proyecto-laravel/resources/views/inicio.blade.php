<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uriona Store</title>
  <!-- Laravel busca el CSS en la carpeta public -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

  <header>
    <h1>Uriona Store</h1>
    <p>Venta de celulares y accesorios en Oruro</p>
    <button id="btn-tema">🌙 / ☀️</button>
  </header>

  <nav>
    <button id="btn-menu">☰</button>
    <ul>
      <li><a href="#productos">Productos</a></li>
      <li><a href="#como-comprar">Cómo comprar</a></li>
      <li><a href="#contacto">Contacto</a></li>
      <li><a href="#sobre-mi">Sobre mí</a></li>
    </ul>
  </nav>

  <main>
    <section id="productos">
      <h2>¿Qué ofrezco?</h2>
      <ul>
        <li>Celulares Samsung, Motorola y Honor</li>
        <li>Accesorios: cargadores, carplay, fundas</li>
        <li>Electrónica: radios, monitores, pantallas</li>
      </ul>
    </section>

    <section id="como-comprar">
      <h2>¿Cómo comprar?</h2>
      <p>Si ves algo que te interesa, escríbeme por mensaje.</p>
    </section>

    <section id="contacto">
      <h2>Contacto</h2>
      <p>Facebook: Uriona Store</p>
      <p>Ciudad: Oruro, Bolivia</p>

      <!-- Formulario adaptado para Laravel -->
      <form id="form-contacto" action="/procesar" method="POST" novalidate>
        @csrf <!-- ¡ESTA LÍNEA ES OBLIGATORIA EN LARAVEL! -->
        
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="3"></textarea>

        <button type="submit">Enviar</button>
      </form>

      <p id="aviso-contacto"></p>
    </section>

    <section id="sobre-mi">
      <h2>Sobre mí</h2>
      <p>Soy emprendedor en Oruro. Comencé este negocio con pocos productos. Mi objetivo es ofrecer productos de calidad a buen precio.</p>
    </section>
  </main>

  <footer>
    © 2026 Uriona Store - Proyecto de Grado
  </footer>


 <script src="{{ asset('script.js') }}"></script>
</body>
</html>