<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Query ke Database</title>
</head>
<body>
    <h1>Klasemen Sementara (HTML + PHP + MySQL)</h1>
    <?php
    // database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "praktikum01";

    // Create connection to database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if connection is succesful
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT rank, name, points, team
    FROM klasemen";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "rank: " . $row["rank"]. " - Name: " . $row["name"].
        " " . $row["points"]. " - Team: " . $row['team'] . "<br>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
  </body>
  </html>