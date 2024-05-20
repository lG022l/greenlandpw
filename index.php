<!DOCTYPE html>
<html>
<body>


  <?php
  $servername = "localhost";
  $username = "root";
  $password = null;
  $dbname = "greenland_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  $sql1 = "SELECT nombre FROM usuarios WHERE id=1";
  $result = $conn->query($sql1);



  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['nombre'];
  } else {
    echo "No se encontraron resultados.";
  }

  $conn->close();
  ?>


</body>

</html>