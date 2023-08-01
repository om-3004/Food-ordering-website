<?php 
$name = filter_input(INPUT_POST , 'name');
$no = filter_input(INPUT_POST, 'no');
$order_name = filter_input(INPUT_POST, 'order_name');
$additionals = filter_input(INPUT_POST, 'additionals');
$quantity = filter_input(INPUT_POST, 'quantity');

if (!empty($name)) {
    if (!empty($no)) {
        if(!empty($order_name)){
            if(!empty($quantity)){
                $servername = "localhost:3307";
                $username = "root";
                $password = "";
                $dbname = "project";
                // Create connection  
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                // Check connection  
                if(mysqli_connect_error()){
                    die('Connection error ('.mysqli_connect_errno().')' .mysqli_connect_error() );
                }
                else{
                    $sql = "INSERT INTO project (Name1 , Mobile, Order_name, Additionals, Quantity) VALUES ('$name','$no','$order_name', '$additionals', '$quantity')";
                    if($conn->query($sql)){
                         $name1 =($_SESSION['Name1']) ;
                        header("Location: ./afterSubmit.html");
                        // echo "New record is inserted";
                    }
                    else{
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }

            } else {
                echo "Please fill out the quantity";
                die();
            }
        } else {
            echo "Please fill out the order of the dish";
        }
    } else {
        echo "Mobile No. is empty";
        die();
    }
} else {
    echo "Name is empty";
    die();
}
?>