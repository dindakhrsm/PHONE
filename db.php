
<?php
	$host	 = "localhost";
	$user	 = "root";
	$pass	 = "";
	$dabname = "data_absen";
	
	$foldername="absenRPL";
	$conn = mysql_connect( $host, $user, $pass) or die('Could not connect to mysql server.' );
	mysql_select_db($dabname, $conn) or die('Could not select database.');
	$baseurl="http://localhost/".$foldername."/";
	
	$nama_usaha="UNIVERSITAS NEGERI JAKARTA";
	$nama_aplikasi="APLIKASI ABSENSI BERBASIS WEB";
	$path_web=$_SERVER['DOCUMENT_ROOT']."/".$foldername."/";
	$label_footer="Copyright &copy; Bonsai Teknologi Informasi ".date("Y");
?>