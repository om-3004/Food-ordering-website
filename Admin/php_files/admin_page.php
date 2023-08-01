
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <!-- custtom css file link -->
    <link rel="stylesheet" href="..\..\css\add.css">
    <link rel="stylesheet" href="..\..\css\style1.css">
</head>
<body>

    <header>
    <div class="logo"><a href="#" class="logo"><i class="fas-fa-untensils">resto</i></a></div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="nav-bar">
            <ul>
                <li><a href="admin_page.php" class="activ">Add item</a></li>
                <li><a href="order.php" >View Order</a></li>
                <!-- <li><a href="Add_admin.php">Add admin</a></li> -->
                <li><a href="view_products.php">View Items</a></li>
                <li><a href="index1.html">logout</a></li>
                
                
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="header">
        
        </div>
        <div class="admin-product-form-container">
            <form action="config.php" method="post" enctype="multipart/form-data">
            <h3>Add a new item</h3>
            <input type="text" placeholder="Enter item name" name="item_name" class="box start">
            <input type="number" placeholder="Enter item price" name="item_price" class="box">
            
            <textarea name="description" id="" cols="50" rows="5" placeholder="Enter description" class="box desc"></textarea>
            
            <input type="file" accept=".png, .jpg, .jpeg, .avif" placeholder="Enter item image" name="image" class="box" >
            <input type="submit" value="Add a item" class="btn" name="add_item">
            </form>
        </div>
    </div>
</body>
</html>