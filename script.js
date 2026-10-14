body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  background: #f5f5f5;
  color: #222;
  max-width: 800px;
  margin: 40px auto;
  padding: 0 20px;
}

body.oscuro {
  background: #121212;
  color: #eee;
}

header {
  border-bottom: 2px solid #222;
  padding-bottom: 10px;
  margin-bottom: 20px;
}

body.oscuro header { border-bottom-color: #eee; }

nav ul {
  list-style: none;
  padding: 0;
  display: flex;
  gap: 20px;
}

nav a {
  color: #222;
  text-decoration: none;
  font-weight: bold;
}

body.oscuro nav a { color: #eee; }

section {
  background: #fff;
  border: 2px solid #222;
  border-radius: 10px;
  padding: 15px 20px;
  margin-bottom: 20px;
}

body.oscuro section {
  background: #1e1e1e;
  border-color: #eee;
}

form {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

input, textarea {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 6px;
}

button {
  background: #222;
  color: #fff;
  border: none;
  padding: 8px 15px;
  border-radius: 6px;
  cursor: pointer;
}

#btn-menu { display: none; }

footer {
  margin-top: 40px;
  border-top: 1px solid #ccc;
  padding-top: 10px;
  font-size: 0.85em;
  text-align: center;
}

@media (max-width: 600px) {
  #btn-menu { display: block; }
  nav ul { display: none; flex-direction: column; }
  nav ul.abierto { display: flex; }
}
