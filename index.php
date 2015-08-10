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
    <hr>
    <p>This application was made by Siskom 2013 and used for mark presence of students in State University of Jakarta. This application marks the arrival time and manage the database of students information. The application is very simple and user friendly. We hope as the time goes by we can develop this application more. The purpose of this absence-web-based application is to fulfill our last project of Software Engineering course and to make attendance system in this university be more effiecent.</p>
  </div>
</header>
<!-- content -->
<div class="mainContent"> 
  <!-- Contact details -->
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

echo "<center><h3> Hari, Tanggal : ".indonesian_date()." <span id='output'></span> WIB </h3>"

?>

<table width="800" border="0" align = "center">
	<tr>
    	<td colspan="3" bgcolor = "yellow"><?php include('header.php'); ?></td>
     </tr>
     <tr>
     	<td width="200"><?php include('sidebar_kiri.php'); ?></td>
        <td>
		<center><form id="form1" name="form1" method="post" action="proses.php">
          <p class="animate4 bounceIn"><input type="text" id="noreg" name="noreg" placeholder="No Registrasi" /></p>
        </p>
        <p>
          <p class="animate4 bounceIn"><input type="text" id="nama" name="nama" placeholder="Nama" /></p>
        </p>
        <p>
          <p class="animate4 bounceIn">
			<select id="prodi" name="prodi">
				<option selected value = "Sistem Komputer">Sistem Komputer</option>
				<option value = "Matematika">Matematika</option>
				<option value = "Pendidikan Matematika">Pendidikan Matematika</option>
			</select>
        </p>
        <p>
          <label for="keterangan">Keterangan:</label>
          <select name="keterangan" id="keterangan">
            <option value="Hadir" selected="selected">Hadir</option>
            <option value="Sakit">Sakit</option>
            <option value="Izin">Izin</option>
            <option value="Alpha">Alpha</option>
          </select>
        </p>
        <p>
          <input name="submit" type="submit" id="submit" value="Submit">
        </p></center>
        </form>
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
