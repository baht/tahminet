<?php require('db.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<?php require('db.php'); ?>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Kullanıcı Girişi</title>
</head>
<body background="arkaplan.jpg">
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<form action="kontrol.php" method="post">
<table align="center">
<tbody>
<tr>
<td>Kullanıcı Adınız : </td>
<td><input name="kullanici_adi" placeholder="Kullanıcı Adı"
type="text" /><br />
</td>
</tr>
<tr>
<td>Şifreniz : </td>
<td><input name="sifre" placeholder="Şifre" type="password" /><br />
</td>
</tr>
<tr style="color: black;">
<td><br />
</td>
<td align="right"><input name="submit" value="Giriş Yap"
type="submit" /></td>
</tr>
<tr>
<td style="vertical-align: top;"><br />
</td>
<td style="vertical-align: top; text-align: right;"><a
style="color: rgb(153, 153, 153);" href="index.php">Üye değil misiniz?</a><br />
</td>
</tr>
</tbody>
</table>
</form>
</body>
</html>


