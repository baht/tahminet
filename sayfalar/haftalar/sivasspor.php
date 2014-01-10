<?php

include "db1.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Sivasspor</title>
</head>
<body background="arkaplan.jpg"><font color="white">
<br><br><br>
<table border="1" bordercolor="black">
	<tr>
	<td><font color="red">Takım Adı</td><td><font color="red">Kuruluş</td><td><font color="red">Başkan</td><td><font color="red">Antrenör</td><td><font color="red">Renk</td><td><font color="red">Toplam Değer</td><td><font color="red">Stadyum</td><td><font color="red">Kapasite</td><td><font color="red">Web Sitesi</td><td><font color="red">Telefon</td><td><font color="red">Adres</td>
	</tr>
	<?php
		$takimlar	= mysql_query("select * from takimlar where takim_id='6'");

		while($row = mysql_fetch_array($takimlar)){
			$takim_adi 	= $row['takim_adi'];
			$kurulus	= $row['kurulus'];
			$baskan		= $row['baskan'];
			$antrenor	= $row['antrenor'];
			$renk		= $row['renk'];
			$deger		= $row['deger'];
			$stadyum	= $row['stadyum'];
			$kapasite	= $row['kapasite'];
			$websitesi	= $row['websitesi'];
			$telefon	= $row['telefon'];
			$adres		= $row['adres'];
			echo"<tr>
			<td>$takim_adi</td>
			<td>$kurulus</td>
			<td>$baskan</td>
			<td>$antrenor</td>
			<td>$renk</td>
			<td>$deger</td>
			<td>$stadyum</td>
			<td>$kapasite</td>
			<td>$websitesi</td>
			<td>$telefon</td>
			<td>$adres</td>
		</tr>";
		}
	?>
</table><br><br>
<table border="1" bordercolor="black">
	<tr>
	<td><font color="red">FormaNo</td><td><font color="red">Oyuncu Adı</td><td><font color="red">Uyruk</td><td><font color="red">Pozisyon</td><td><font color="red">Değer</td><td><font color="red">Yaş</td><td><font color="red">Boy</td><td><font color="red">Kilo</td>
	</tr>
	<?php
		$kadro	= mysql_query("select * from kadro where takim_id='6'");

		while($row = mysql_fetch_array($kadro)){
			$oyuncu_adi 	= $row['oyuncu_adi'];
			$yas		= $row['yas'];
			$uyruk		= $row['uyruk'];
			$deger		= $row['deger'];
			$pozisyon	= $row['pozisyon'];
			$formanumarasi	= $row['formanumarasi'];
			$boy		= $row['boy'];
			$kilo		= $row['kilo'];
			echo"<tr>
			<td>$formanumarasi</td>
			<td>$oyuncu_adi</td>
			<td>$uyruk</td>
			<td>$pozisyon</td>
			<td>$deger</td>
			<td>$yas</td>
			<td>$boy</td>
			<td>$kilo</td>
		</tr>";
		}
	?>
</table>
</body>
</html>
