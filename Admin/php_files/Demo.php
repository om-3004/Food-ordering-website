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

if(empty($name1)){
  echo "<script>alert('Username can't be empty');</script>";
}
else if(empty($pass)){
  echo "<script>alert('Password can't be empty');</script>";
}
// $sql = "INSERT INTO food_reg(user_lname,password)
// VALUES ('$name1','$pass')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
else{
$sql = "SELECT * FROM food_registration WHERE Username='$name1' AND Password1='$pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['Username'] === $name1 && $row['Password1'] === $pass) {

        echo "Logged in!";

        $_SESSION['user_name'] = $row['user_name'];

        $_SESSION['name'] = $row['name'];

        $_SESSION['id'] = $row['id'];

        header("Location: http://localhost/web_final/web_files/Admin/php_files/admin_page.php");

        exit();
      }
      } 
else{
  echo "<script>alert('Incorrect username or password');</script>";
  header("Location: http://localhost/web_final/web_files/Admin/php_files/admin_page.php");
}}

$conn->close();
?>