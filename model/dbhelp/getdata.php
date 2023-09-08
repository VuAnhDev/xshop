<?php




 function getDataSQL($sql, $single=false)
 {
	include('model/config/config.php');
	include('model/config/conection.php');
   $data = [];

   $result = $conn->query($sql);
 
   if ($result->num_rows > 0) {
	 // output data of each row
	 if($single == false){

		 while ($row = $result->fetch_assoc()) {
			 
			 $data[] = $row;
			}
			return $data;
		}
		else{
			$row = $result->fetch_assoc();
			$data[] = $row;
			return $data;
		}
   } else {
	 echo "0 results";
   }
   $conn->close();
 }
 