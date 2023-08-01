<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db_name = "project";

$conn = new mysqli($servername, $username, $password,$db_name);


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name1 = $_REQUEST['name'];
    $pass = $_REQUEST['password'];
   
}

$sql = "INSERT INTO food_registration (Username,Password1)
VALUES ('$name1','$pass')";

if ($conn->query($sql) === TRUE) {
  header("Location: http://localhost/web_final/web_files/Admin/php_files/admin_page.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

?>