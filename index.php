<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servidor Web OK</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&display=swap');

    body, html {
      height: 100%;
      margin: 0;
      background-color: #2f4538;
      color: antiquewhite;
      text-align: center;
      font-family: 'Nunito Sans', sans-serif;
    }

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
    text-align: center;
}

    a {
    text-decoration: none;
    color: #fbff00; 
    transition: font-size 0.3s ease;
}

a:hover {
    font-size: 1.2em;
    color: #fbff00; 
}
  </style>
</head>

<body>
  <?php
  echo "<main class='container'>";
  echo "<h1><p>Servidor Web PHP Rodando na porta 80</p></h1>";
  echo "<h2>Acessar o phpMyAdmin <a href='http://localhost:8080' target='_blank' rel='noopener noreferrer'>aqui...</a></h2>";
  echo "</main>";
  ?>
</body>

</html>