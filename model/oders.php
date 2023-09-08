<?php

function delOder($id){
        
        $conn = new mysqli(HOST,USERNAME,PASSWORD,DB);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $conn -> set_charset("utf8");

        $sql = "DELETE FROM oders WHERE id = '$id'";
        if ($conn->query($sql) === TRUE) {
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
     $conn->close();
}