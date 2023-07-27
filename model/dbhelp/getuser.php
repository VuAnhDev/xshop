 <?php
 
 function getUser($id = ""){
            $conn = new mysqli(HOST,USERNAME,PASSWORD,DB);
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $conn -> set_charset("utf8"); 
            if($id === ""){

                $sql = "SELECT username FROM user ";
            }else {
                $sql = "SELECT username FROM user WHERE id = '$id'";
            }
            $result = $conn->query($sql);
            $data = [];
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                    $data[] = $row['username'];
            }
                
            return $data;
            } else {
            echo "0 results";
            }
            $conn->close();
    }