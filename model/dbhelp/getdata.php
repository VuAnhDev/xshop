<?php



/**
 * Su dung cho lenh: insert/update/delete
 */
function execute($sql) {
	// Them du lieu vao database
	//B1. Mo ket noi toi database
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB);
	mysqli_set_charset($conn, 'utf8');

	//B2. Thuc hien truy van insert
	mysqli_query($conn, $sql);

	//B3. Dong ket noi database
	mysqli_close($conn);
}
/**
 * Su dung cho lenh: select
 */

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
 