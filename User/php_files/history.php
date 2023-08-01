<?php 

$servername = "localhost:3307";
$username = "root";
$password = "";
$db_name = "project";

$conn = new mysqli($servername, $username, $password,$db_name);

$query = "SELECT * FROM `project_connect_db` WHERE Name1 = 'zeel' ";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Read Data From Database Using PHP - Demo Preview</title>
    <meta content="noindex, nofollow" name="robots">
    <link rel="stylesheet" href="../../css/style1.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/order.css">
    <script src="https://kit.fontawesome.com/f41f01c9fa.js" crossorigin="anonymous"></script>
    <style>
        .detail_parent{
            margin-top: 15%
            
        }
    </style>
</head>

<body>
<?php include "header.php"; ?>
    <div class="maindiv">
        <div class="form">
            <!-- Displaying Data Read From Database -->
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="detail_parent">
                    <div class="details">
                        <h2>Order details</h2>
                        <?php
                        echo "Customer name: ";
                        echo $row['Name1'];
                        echo "<br>";
                        echo " mobile no : ";
                        echo $row['Mobile'];
                        echo "<br>";
                        echo "order name: ";
                        echo $row['Order_name'];
                        echo "<br>";
                        echo "Additionals: ";
                        echo $row['Additionals'];
                        echo "<br>";
                            echo "Quantity";
                            echo $row['Quantity'];
                            echo "<br>";
                        ?>
                    </div>
                </div>
                <br>
                <?php
            }
            ?>
        </div>
    </div>


    <script src="cleanx.js"></script>
</body>

</html>