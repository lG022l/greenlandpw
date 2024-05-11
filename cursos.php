<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <nav class="navegacion">
        <div class="logo">
            <a href="index.html">
            <img class="header__logo" src="img/logo.png">
            </a>
             </div>
            <a href="index.html"> Inicio</a>
            <a href="cursos.html"> Cursos</a>
            <a href="noticias.html"> Noticias</a>
            <a href="login.html">Ingresar</a>
            <form class = "barra-busqueda" action="#" method="get">
                <input type = "text" placeholder="Buscar">
                <button type = "submit"><img src="img/Search_Icon.png" width="27px"></button>
            </form>
    </nav>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = null;
    $dbname = "greenland";
  
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
  
    echo "<br>";
  
  
  
    $sql1 = "SELECT id, nombre, descripcion, profesor FROM cursos";
    $result = $conn->query($sql1);
  
  
  
    if ($result->num_rows > 0) {
      // output data of each row
  
      echo "
        <table>
        <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Profesor</th>
        </tr>
        
        ";
  
      while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["nombre"] . "</td>
        <td>" . $row["descripcion"] . "</td>
        <td>" . $row["profesor"] . "</td>
        </tr>
        ";
      }
  
  
  
      echo "</table>";
    } else {
      echo "0 results";
    }
  
    $conn->close();
    ?>


</body>
</html>