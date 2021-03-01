<?php
require_once("DBConn.php");
//$db_handle = new DBController();

$username = $_POST["username"];
$password = $_POST["password"];


					
if(!empty($_POST["username"])) {
  $sql = "SELECT * FROM permohonan_syarikat WHERE username='$username' AND password=md5('$password')";
  //$user_count = $db_handle->numRows($query);
  
  $result = $conn->query($sql);
  session_start();
  if($result->num_rows > 0) {
	  
	  while($row = $result->fetch_assoc()) {
	  $_SESSION["id"] = $row['id'];
	  $_SESSION["name"] = $row['nama_pemohon'];
	  $_SESSION["role"] = $row['role'];
	  }
	  header('Location: ../dashboard.php');
      
  }else{
	  $_SESSION["errorMessage"] = "Invalid Credentials";
      header('Location: ../index.php');
  }
 
}
else{
	echo "empty";
}
?>