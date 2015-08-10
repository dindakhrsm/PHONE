<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Absen Berbasis Web</title>
<link href="aboutPageStyle.css" rel="stylesheet" type="text/css">

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
<!-- Header content -->
<header>
  <div class="profileLogo"> 
  <!-- Profile logo. Add a img tag in place of <span>. --></div>
  <!-- Identity details -->
  <div class="profileHeader">
    <h1><span class="logoPlaceholder"><center><img src="logo unj.jpg" width="200" height="200" alt=""/><p></p></center></span><center> Universitas Negeri Jakarta
    </center></h1>
    <h3><center>Easier, Faster and User Friendly!</center></h3>
  </div>
</header>
<!-- content -->
<div class="mainContent"> 
  <!-- Contact details -->
<body bgcolor="#A0EFA1">
    
<?php
include "fungsi.php";
?>

<script type="text/javascript">
// 1 detik = 1000
window.setTimeout("waktu()",1000);  
function waktu() {   
	var tanggal = new Date();  
	setTimeout("waktu()",1000);  
	document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>
<body onload="waktu()">
<center><h3>:: Sistem Absensi Berbasis Web by Anantassa-Dimas-Rahmi ::</h3></center>
<hr>
<?php

$hariIni = date('Y-m-d');
$bulanIni = date('m');

echo "<center><h3> Hari, Tanggal : ".indonesian_date()."<span id='output'></span> WIB </h3>"

?>
<table width="800" border="0" align = "center">
	<tr>
    	<td colspan="3" bgcolor = "yellow"><?php include('header.php'); ?></td>
     </tr>
     <tr>
     	<td width="200"><?php include('sidebar_kiri.php'); ?></td>
        <td><?php
		
		$server = 'localhost';
		$user = 'root';
		$password = '';
		$database = 'data_absen';
		
		$koneksi= mysql_connect($server, $user, $password);
		mysql_select_db($database, $koneksi);
		
		$noreg=$_POST['noreg'];
		$nama=$_POST['nama'];
		$prodi=$_POST['prodi'];
		$keterangan=$_POST['keterangan'];
		$tgl= isset($_POST['tgl']) ? $_POST['tgl'] : "";

		
		if (!empty($noreg))
		{
			echo "<center> Noreg : $noreg <br />";
		}
		else
		{
			die("<center><h4>Maaf, anda harus mengisi Noreg </h4><br /></center>");
		}

		if (!empty($nama))
		{
			echo "<br /><center>Selamat Datang $nama <br />";
		}
		else
		{
		   die("<center><br><h4> Maaf, anda harus mengisi Nama</h4></center>");
		}
				
		
		$cekdata="select * from absen_rpl where noreg='$noreg' or nama='$nama'"; 
		$ada=mysql_query($cekdata) or die(mysql_error()); 
			if(mysql_num_rows($ada)>0) { 
				echo "<h3>Noreg atau Nama telah Terdaftar! Silahkan diulangi.</h3>"; 
			} 
			else { 
				$sql= "INSERT INTO absen_rpl(noreg, nama, prodi, keterangan)
				VALUES('$noreg', '$nama', '$prodi', '$keterangan')";
		
			mysql_query($sql);
			}
		?>
        </td>
        <td width="150"><?php include('sidebar_kanan.php'); ?></td>
      </tr>
      <tr>
      	<td colspan="3"><?php include('footer.php'); ?></td>
       </tr>
 </table>

<div class="externalResourcesNav">
    <div class="externalResources"> <a href="http://www.unj.ac.id" title="Website UNJ">Website UNJ</a> </div>
    <span class="stretch"></span>
    <div class="externalResources"><a href="https://twitter.com/matematikaunj" title="BEM MTK UNJ">BEM MTK UNJ</a> </div>
    <span class="stretch"></span>
    <div class="externalResources"><a href="https://twitter.com/siskom2013" title="Sistem Komputer 2013">Sistem Komputer 2013</a> </div>
  </div>
</div>
<footer>
  <hr>
  <p class="footerDisclaimer">2015  Copyrights - Siskom13 <span>All Rights Reserved</span></p>
  <p class="footerNote">Siskom13 - <span>Email me</span></p>
</footer>
</body>
</html>
