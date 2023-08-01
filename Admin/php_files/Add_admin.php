<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">

    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .btn{
            background-color: #27ae60 !important;
        }
        input{
            font-size: 2 rem !important;
            height: 100% !important;
            width: 100%;
        }
        label{
            font-size: 2rem !important;
            margin-right: 2% !important;
        }
        .container{
            margin-top: 12.5% !important;
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>
    <div class = "container">
        <div class = "login-container">
        <div class = "kbox">
            <h1 class = "intro">Add admin</h1>
            <br/>
            <div class="admin-product-form-container">
            <form action="signup.php" method="post" enctype="multipart/form-data">
            
            <input type="text" placeholder="Enter admin name" name="item_name" class="box start">
            <input type="number" placeholder="Enter password" name="item_price" class="box">
            <input type="submit" value="Add a item" class="btn" name="add_item">
            </form>
        </div>
            <!-- <form action="signup.php" method="post">
                <div class = "mb-3 row ">
                    <label class = " col-sm-3 col-form-label"> Username:</label>
                    <div class = "col-sm-9 ">
                        <input 
                            type="text"
                            name = "name"
                            required
                        />
                    </div>
                </div>
      <br/>


                <div class = "mb-3 row ">
                    <label class = "form-label col-sm-3 col-form-label"> Password: </label>
                    <div class = "col-sm-9 ">
                        <input 
                            type="password"
                            name = "password"
                            required
                        />
                    </div>
                </div>
<br>
            
                    <div class="center">
                        <button class = "btn btn-success ms-8 mt-4" type="submit" name="submit">Add admin</button>
                    </div>     
            </form> -->
            </div>
        </div>
    </div>
</body>
</html>
