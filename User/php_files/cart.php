<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $db_name = "project";
    
    $conn = new mysqli($servername, $username, $password,$db_name);

    $query = "SELECT `name1`,`image`,`price` FROM `ytshoppingcart` order by id ASC";
    $queryfire = mysqli_query($conn,$query);

    $num = mysqli_num_rows($queryfire);

    if($num > 0){
        while($product = mysqli_fetch_assoc($queryfire)){
            ?>
            <h2>Order details</h2>

            <div class="card">
                <h6 class="card-title"><?php echo $product['name1'] ?></h6>
                <div class="card-body">
                
                    <?php echo"<img src= '{$product['image']}'>"; ?>
                </div>
            </div>
        <?php }?>
    <?php }?>
    
</body>
</html>