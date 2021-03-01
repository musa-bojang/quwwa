<?php
require_once("DBController.php");
$db_handle = new DBController();

							$username=$_POST['username'];
							$password=$_POST['password'];
							$email=$_POST['email'];
							$fullname=$_POST['fullname'];
							$nama_syarikat=$_POST['nama_syarikat'];
							$address=$_POST['address'];
							$city=$_POST['city'];
							$poskod=$_POST['poskod'];
							$negeri=$_POST['negeri'];
							//$country=$_POST['country'];
							$no_pendaftaran=$_POST['no_pendaftaran'];
							$phone=$_POST['phone'];
							$web=$_POST['web'];
							$sektor=$_POST['sektor'];
							$subsektor=$_POST['subsektor'];
							$bilangan_pelatih=$_POST['bilangan_pelatih'];
							$spesifikasi_bangsa=$_POST['spesifikasi_bangsa'];
							$spesifikasi_agama=$_POST['spesifikasi_agama'];
							$spesifikasi_umur=$_POST['spesifikasi_umur'];
							$spesifikasi_jantina=$_POST['spesifikasi_jantina'];
							$spesifikasi_kemahiran=$_POST['spesifikasi_kemahiran'];


  $query = "INSERT INTO permohonan_syarikat(nama_pemohon, nama_syarikat, alamat,bandar, poskod,negeri, no_pendaftaran, no_telefon, email, web, username, password, sektor, sub_sektor, bilangan_pelatih, spesifikasi_bangsa, spesifikasi_agama, spesifikasi_umur, spesifikasi_jantina, spesifikasi_kemahiran, status) VALUES ('$fullname','$nama_syarikat','$address','$city','$poskod','$negeri','$no_pendaftaran','$phone','$email','$web','$username',md5('$password'),'$sektor','$subsektor','$bilangan_pelatih','$spesifikasi_bangsa','$spesifikasi_agama','$spesifikasi_umur','$spesifikasi_jantina','$spesifikasi_kemahiran','pending')";
  $insert_result = $db_handle->insert_data($query);
  if(insert_result) {
      echo " New record created successfully";
  }else{
      echo "Error";
  }

?>