<?php 
        
function newCart($name, $value = ""){
        
        $conn = new mysqli(HOST,USERNAME,PASSWORD,DB);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $conn -> set_charset("utf8");

        $sql = "INSERT INTO cart (cart_name, cart_value)
        VALUES ('$name', '$value')";

        if ($conn->query($sql) === TRUE) {
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
}

function updateCart($name, $value){

        $conn = new mysqli(HOST,USERNAME,PASSWORD,DB);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $conn -> set_charset("utf8");         
        
        $sql = "UPDATE cart SET cart_value = '$value' WHERE cart_name = '$name'";
        if ($conn->query($sql) === TRUE) {

        } else {
        echo "Error updating record: " . $conn->error;
        }

        $conn->close();
}

function getValueCart($name){
        $conn = new mysqli(HOST,USERNAME,PASSWORD,DB);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $conn -> set_charset("utf8"); 

        $sql = "SELECT cart_value FROM cart WHERE cart_name = '$name'";
        $result = $conn->query($sql);
        $data = [];
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                $data[] = $row;
        }              
        return $data;
        } else {
        echo "0 results";
        }
        $conn->close();
}