<?php 
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $db_name = "project";
            
            $conn = new mysqli($servername, $username, $password,$db_name);
            
            $query = "SELECT * FROM products";
            $result = mysqli_query($conn, $query);
            ?>
            <div class="box-container">
            <?php
            while ($row = mysqli_fetch_assoc($result)){ 
            ?>
            <div class="box">
                <div class="image">
                    <img src="../../images/<?php echo $row['image1'] ?>" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3><?php echo $row['name1'] ?></h3>
                    <p><?php echo $row['description1'] ?></p>
                    <a href="" class="btn">Add to cart</a>
                    <span class="price">₹<?php echo $row['price'] ?></span>
                </div>
            </div>
            <?php } ?>
            </div>