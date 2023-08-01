<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
    <style>
        .dishes{
            margin-top: 7%;

        }
        @media only screen and (max-width: 900px){
        .dishes{
            top: 50px;
            margin-top: 15%;
        }
    }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    
    <section class="dishes" id="dishes">

        <h3 class="sub-heading"> Our dishes </h3>
        <h1 class="heading"> Popular dishes</h1>
    
        <div class="box-container">
            <?php 
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $db_name = "project";
            
            $conn = new mysqli($servername, $username, $password,$db_name);
            
            $query = "SELECT * FROM products";
            $result = mysqli_query($conn, $query);
            ?>
            <?php
            while ($row = mysqli_fetch_assoc($result)){ 
            ?>
            <div class="box">
                <!-- <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a> -->
                <form action="" method="post">
                    <img src="../../images/<?php echo $row['image1'] ?> " height="100px" width="200px">
                    <h3><td class="col"><?php echo $row['name1']; ?></td></h3>
                    <p style="font-size: 1.5rem"><?php echo $row['description1']; ?></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>₹<?php echo $row['price']; ?></span>
                    <input type="hidden" name="product_name" name="product_name" value="<?php echo $row['name1'] ?>"></input>
                    <input type="submit" class="btn" value="Add to cart"></input>
                </form>
            </div>

            <?php } ?>

    </section>
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Locations</h3>
                <a href="#">India</a>
                <a href="#">Japan</a>
                <a href="#">Russia</a>
                <a href="#">USA</a>
                <a href="#">France</a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href="pro.html">Home</a>
                <a href="dishes.html">Dishes</a>
                <a href="pro.html">About</a>
                <a href="menu.html">Menu</a>
                <a href="pro.html">Review</a>
                <a href="order.html">Order</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#">+91 1234567890</a>
            </div>
        </div>

        <div class="credit">
            copyright @ 2023 by <span>LD college students
            </span></div>
    </section>
    <script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function(){
            navbar = document.querySelector(".nav-bar");
            home = document.querySelector(".home");
        
            navbar.classList.toggle("active");
        }
    </script>
</body>
</html>