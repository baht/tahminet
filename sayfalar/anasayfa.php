<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<?php require('db1.php');

if( !isset( $_SESSION['login'] ) ){
header('Location:/uyelik/uye_girisi.php');
}

?>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Anasayfa</title>
</head>
<body background="arkaplan.jpg">
<div style="text-align: right;"><a href="/uyelik/cikis.php"
style="color: rgb(153, 153, 153);">Çıkış
Yap</a><br />
</div>
<big><big><span style="color: red; font-weight: bold;" /></big></big><big><big><span
style="color: red; font-weight: bold;" /></big></big><big><big><span
style="color: red; font-weight: bold;">&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; SPOR TOTO SÜPER
LİG PUAN TABLOSU</span></big></big><br />
<table
style="text-align: left; height: 573px; width: 597px; margin-left: auto; margin-right: auto;"
border="1" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red; font-weight: bold;">Sıra<br />
</td>
<td
style="vertical-align: top; width: 250px; color: red; font-weight: bold;">Takım
Adı<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red; font-weight: bold;">O<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red; font-weight: bold;">G<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red; font-weight: bold;">B<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red; font-weight: bold;">M<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red; font-weight: bold;">A<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red; font-weight: bold;">Y<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red; font-weight: bold;">AV<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red; font-weight: bold;">P<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 204, 0);">1<br />
</td>
<td
style="vertical-align: top; width: 250px; color: rgb(255, 204, 0);"><a
style="color: rgb(255, 204, 0);" href="haftalar/fenerbahce.php">Fenerbahçe</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 204, 0);">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 204, 0);">13<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 204, 0);">2<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 204, 0);">2<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 204, 0);">43<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 204, 0);">19<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 204, 0);">24<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 204, 0);">41<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(51, 204, 0);">2<br />
</td>
<td
style="vertical-align: top; width: 250px; color: rgb(51, 204, 0);"><a
style="color: rgb(51, 204, 0);" href="haftalar/galatasaray.php">Galatasaray</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(51, 204, 0);">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(51, 204, 0);">9<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(51, 204, 0);">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(51, 204, 0);">2<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(51, 204, 0);">28<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(51, 204, 0);">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(51, 204, 0);">11<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(51, 204, 0);">33<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">3<br />
</td>
<td
style="vertical-align: top; width: 250px; color: rgb(255, 102, 0);"><a
style="color: rgb(255, 102, 0);" href="haftalar/kasimpasa.php">Kasımpaşa</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">9<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">4<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">4<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">32<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">21<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">11<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">31<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">4<br />
</td>
<td
style="vertical-align: top; width: 250px; color: rgb(255, 102, 0);"><a
style="color: rgb(255, 102, 0);" href="haftalar/besiktas.php">Beşiktaş</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">8<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">5<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">4<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">30<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">19<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">11<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: rgb(255, 102, 0);">29<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">5<br />
</td>
<td style="vertical-align: top; width: 250px; color: white;"><a
style="color: white;" href="haftalar/sivasspor.php">Sivasspor</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">9<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">2<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">31<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">23<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">8<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">29<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">6<br />
</td>
<td style="vertical-align: top; width: 250px; color: white;"><a
style="color: white;" href="haftalar/eskisehirspor.php">Eskişehirspor</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">8<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">3<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">22<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">15<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">7<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">27<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">7<br />
</td>
<td style="vertical-align: top; width: 250px; color: white;"><a
style="color: white;" href="haftalar/trabzonspor.php">Trabzonspor</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">8<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">3<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">25<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">21<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">4<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">27<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">8<br />
</td>
<td style="vertical-align: top; width: 250px; color: white;"><a
style="color: white;" href="haftalar/karabukspor.php">KDÇ Karabükspor</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">7<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">5<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">5<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">0<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">26<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">9<br />
</td>
<td style="vertical-align: top; width: 250px; color: white;"><a
href="haftalar/akhisar.php"><span
style="color: white; background-color: transparent;">Akhisar Bld. Spor</span><br />
</a></td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">7<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">4<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">21<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">21<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">0<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">25<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">10<br />
</td>
<td style="vertical-align: top; width: 250px; color: white;"><a
href="haftalar/bursaspor.php"><span style="color: white;">Bursaspor</span><br />
</a></td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">5<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">19<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">19<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">0<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">24<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">11<br />
</td>
<td style="vertical-align: top; width: 250px; color: white;"><a
style="color: white;" href="haftalar/genclerbirligi.php">Gençlerbirliği</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">3<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">8<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">18<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">20<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">-2<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">21<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">12<br />
</td>
<td style="vertical-align: top; width: 250px; color: white;"><a
style="color: white;" href="haftalar/gaziantepspor.php">Gaziantepspor</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">3<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">8<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">22<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">31<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">-9<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">21<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">13<br />
</td>
<td style="vertical-align: top; width: 250px; color: white;"><a
style="color: white;" href="haftalar/torkukonya.php">Torku Konyaspor</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">2<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">9<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">22<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">26<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">-4<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">20<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">14<br />
</td>
<td style="vertical-align: top; width: 250px; color: white;"><a
style="color: white;" href="haftalar/antalyaspor.php">M.P. Antalyaspor</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">4<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">7<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">20<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">23<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">-3<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">18<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">15<br />
</td>
<td style="vertical-align: top; width: 250px; color: white;"><a
style="color: white;" href="haftalar/rizespor.php">Çaykur Rizespor</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">4<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">4<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">9<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">18<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">25<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">-7<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: white;">16<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">16<br />
</td>
<td style="vertical-align: top; width: 250px; color: red;"><a
style="color: red;" href="haftalar/erciyesspor.php">S.B. Elazığspor</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">4<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">1<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">12<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">19<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">39<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">-20<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">13<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">17<br />
</td>
<td style="vertical-align: top; width: 250px; color: red;"><a
style="color: red;" href="haftalar/kayserispor.php">Kayserispor</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">2<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">6<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">9<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">13<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">28<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">-15<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">12<br />
</td>
</tr>
<tr>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">18<br />
</td>
<td style="vertical-align: top; width: 250px; color: red;"><a
style="color: red;" href="haftalar/erciyesspor.php">Kayseri Erciyesspor</a><br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">17<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">3<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">3<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">11<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">12<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">28<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">-16<br />
</td>
<td
style="vertical-align: top; width: 30px; text-align: center; color: red;">12<br />
</td>
</tr>
</tbody>
</table>
<div style="text-align: center;">
<div style="text-align: left;"><small><small><span
style="color: rgb(255, 204, 0);">*Şampiyonlar
Ligi</span></small></small><br />
<small><small><span style="color: rgb(51, 204, 0);">*Şampiyonlar
Ligi Ön Eleme</span></small></small><br />
<small><small><span style="color: rgb(255, 102, 0);">*</span></small></small><span><small><small><span
style="color: rgb(255, 102, 0);">UEFA Avrupa Ligi Ön Eleme</span></small></small></span><br />
<span><small><small><span style="color: red;">*Alt Lig</span></small></small></span><br />
</div>
<span /></div>
<span><br />
<big style="color: red;"><span style="font-weight: bold;">Fikstür
Seçimi :</span></big><br />
<form action="fikstur.php" method="post">
<select name="fikstur">
<option value="1.hafta">1.hafta</option>
<option value="2.hafta">2.hafta</option>
<option value="3.hafta">3.hafta</option>
<option value="4.hafta">4.hafta</option>
<option value="5.hafta">5.hafta</option>
<option value="6.hafta">6.hafta</option>
<option value="7.hafta">7.hafta</option>
<option value="8.hafta">8.hafta</option>
<option value="9.hafta">9.hafta</option>
<option value="10.hafta">10.hafta</option>
<option value="11.hafta">11.hafta</option>
<option value="12.hafta">12.hafta</option>
<option value="13.hafta">13.hafta</option>
<option value="14.hafta">14.hafta</option>
<option value="15.hafta">15.hafta</option>
<option value="16.hafta">16.hafta</option>
<option value="17.hafta">17.hafta</option>
<option value="18.hafta">18.hafta</option>
<option value="19.hafta">19.hafta</option>
<option value="20.hafta">20.hafta</option>
<option value="21.hafta">21.hafta</option>
<option value="22.hafta">22.hafta</option>
<option value="23.hafta">23.hafta</option>
<option value="24.hafta">24.hafta</option>
<option value="25.hafta">25.hafta</option>
<option value="26.hafta">26.hafta</option>
<option value="27.hafta">27.hafta</option>
<option value="28.hafta">28.hafta</option>
<option value="29.hafta">29.hafta</option>
<option value="30.hafta">30.hafta</option>
<option value="31.hafta">31.hafta</option>
<option value="32.hafta">32.hafta</option>
<option value="33.hafta">33.hafta</option>
<option value="34.hafta">34.hafta</option>
</select>
<input name="submit" value="Seç" type="submit" /> <br />
<a href="/uyelik/cikis.php" style="color: rgb(153, 153, 153);" /></form>
</span>
</body>
</html>

