<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\..\css\style.css">
    <style>
        h2{
            margin-top: 10% !important;
        }
        .tab{
            border: 2px solid #27ae60;
            margin-top: 4% !important;
            margin-left: 30% !important;
            width: 40%;
            font-size: 2rem;
        }
        .row{
            border: 2px solid #27ae60 !important;
        }
        thead{
            border: 2px solid #27ae60 !important;
        }
        th{
            padding : 2%;
            margin: 2%;
        }
        img{
            height: 200px;
            width: 200px;
        }
        td{
            margin: 5%;
            padding: 5%;
        }
        .col{
            margin: 5%;
            padding: 5%
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <h2 class="heading">Item details</h2>
    <?php 
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $db_name = "project";
    
    $conn = new mysqli($servername, $username, $password,$db_name);
    
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
    ?>
    <table class="tab">
        <thead>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            
            <th style="padding-right: 2%">Price</th>
            <th></th>
            <th></th>
        </thead>
    <?php
    while ($row = mysqli_fetch_assoc($result)){ 
    ?>
                <div class="detail_parent">
                    <div class="details">
                        
                        <tr class="row">
                            <td class="col"><?php echo $row['ID']; ?></td>
                            <td class="col"><img src="../../images/<?php echo $row['image1'] ?> "></td>
                            <td class="col"><?php echo $row['name1']; ?></td>
                            <td class="col"><?php echo $row['price']; ?></td>

                        </tr>
            <?php } ?>
    </table>
    
</body>
</html>