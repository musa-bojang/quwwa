<?php
require_once("DBConn.php");
//$db_handle = new DBController();


$company_id = $_SESSION["id"]; 

if(isset($_SESSION["id"])) {
						
 $sql = "SELECT * FROM permohonan_syarikat WHERE id='$company_id'";
 $result = $conn->query($sql);
 
 if($result->num_rows > 0) {
	  
	  while($row = $result->fetch_assoc()) {
	   
	   $username = $row['username'];
	   $name = $row['nama_pemohon'];
	   $nama_syarikat = $row['nama_syarikat'];
	   $alamat = $row['alamat'];
	   $bandar = $row['bandar'];
	   $poskod = $row['poskod'];
	   $negeri = $row['negeri'];
	   $no_pendaftaran = $row['no_pendaftaran'];
	   $no_telefon = $row['no_telefon'];
	   $email = $row['email'];
	   $web = $row['web'];
	   
	   
	  }
	  
      
  }
					
}


?>