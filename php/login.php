<?php
include("connection.php");


if ($db->connect_error) {
  die('connection fail');
} else{
  echo "connection worke";
}

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users_tbl WHERE user='$user' AND pass='$pass'";
echo "<br>entro a la tabla";
$result = $db->query($sql);
echo "<br>recibio los datos";
if ($result->num_rows>0) {
  while ($row=$result->fetch_assoc()) {
    header("Location: ../portal/index.php");
    exit;
    echo "<br>Admin name is: " . $row['user'];
  }
}else {
  header("Location: ../index.html");
  exit;
}


?>
