//////////////////////////////////////////////
<?php
var_dump($_POST);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Récupération des informations passées en POST, nécessaires à la modification
$nom_station=$_POST['nom'];
$altitude_station=$_POST['altitude'];


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
  $stmt = $conn->prepare("INSERT INTO station (sta_nom, sta_altitude) 
  VALUES (:sta_nom, :sta_altitude)");
  $stmt->bindParam(':sta_nom', $nom_station);
  $stmt->bindParam(':sta_altitude', $altitude_station);
  $stmt->execute();

  
  echo "ajout bien réaliser!!!";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>

