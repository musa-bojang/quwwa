<?php
require_once("DBConn.php");
//$db_handle = new DBController();


$company_id = $_SESSION["id"]; 

if(isset($_SESSION["id"])) {
						
 $sql = "SELECT * FROM permohonan_syarikat";
 $result = $conn->query($sql);
 
 if($result->num_rows > 0) {
	  
	  while($row = $result->fetch_assoc()) {
	   
	   
		//echo '<tr class="odd gradeX">';
		//echo '<td><input type="checkbox" class="checkboxes" value="1" /></td>';
		echo '<td>'.$row["nama_pemohon"].'</td>';
		echo '<td class="hidden-480">'.$row["nama_syarikat"].'</td>';
		echo '<td class="hidden-480">'.$row["no_pendaftaran"].'</td>';
		echo '<td class="center hidden-480">'.$row["no_telefon"].'</td>';
		echo '<td class="center hidden-480"><a href="mailto:'.$row["email"].'">'.$row["email"].'</a></td>';
		echo '<td class="center hidden-480"><a href="'.$row["web"].'">'.$row["web"].'</a></td>';
		echo '<td class="center hidden-480">'.$row["alamat"].', '.$row["poskod"].', '.$row["bandar"].'</td>';
		echo '<td class="center hidden-480">'.$row["poskod"].'</td>';
		echo '<td class="center hidden-480">'.$row["bandar"].'</td>';
		echo '<td class="center hidden-480">'.$row["negeri"].'</td>';
		echo '<td class="center hidden-480">'.$row["sektor"].'</td>';
		echo '<td ><span class="label label-success">Approved</span></td>';
		echo '</tr>';
		
		
	   /*$username = $row['username'];
	   $name = $row['nama_pemohon'];
	   $nama_syarikat = $row['nama_syarikat'];
	   $alamat = $row['alamat'];
	   $bandar = $row['bandar'];
	   $poskod = $row['poskod'];
	   $negeri = $row['negeri'];
	   $no_pendaftaran = $row['no_pendaftaran'];
	   $no_telefon = $row['no_telefon'];
	   $email = $row['email'];
	   $web = $row['web'];*/
	   
	   
	  }
	  
      
  }
					
}


?>