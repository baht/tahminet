<?php require('db.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Üyelik Formu</title>
</head>
<body background="arkaplan.jpg">
<br><br><br>
	<form action="uye_ol.php" method="POST">
		<table align="center">
			<tr>
				<td>İsminiz : </td>
				<td><input type="text" name="isim" placeholder="İsminiz" />*</td>
			</tr>
			<tr>
				<td>Soyadınız : </td> 
				<td><input type="text" name="soyad" placeholder="Soyadınız" />*</td>
			</tr>
			<tr>
				<td>Kullanıcı Adınız : </td> 
				<td><input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" />*</td>
			</tr>
			<tr>
				<td>Şifreniz : </td> 
				<td><input type="password" name="sifre" placeholder="Şifre" />*</td>
			</tr>
			<tr><td><font size="1" color="red">Şifrenizin uzunluğu 6-10 karakter aralığında olabilir.</font></td></tr>
			<tr>
				<td>Şifre Tekrar : </td> 
				<td><input type="password" name="sifre_tekrar" placeholder="Şifre" />*</td>
			</tr>
			<tr>
				<td>Email Adresiniz : </td> 
				<td><input type="text" name="email" placeholder="email" />*</td>
			</tr>
			<tr>
				<td>Doğum Tarihiniz : </td>
				<td><select name="dogumtarihi">
         				<option value="2014">2014</option>
         				<option value="2013">2013</option>
         				<option value="2012">2012</option>
         				<option value="2011">2011</option>
         				<option value="2010">2010</option>
         				<option value="2009">2009</option>
         				<option value="2008">2008</option>
         				<option value="2007">2007</option>
         				<option value="2006">2006</option>
         				<option value="2005">2005</option>
         				<option value="2004">2004</option>
         				<option value="2003">2003</option>
         				<option value="2002">2002</option>
         				<option value="2001">2001</option>
         				<option value="2000">2000</option>
         				<option value="1999">1999</option>
         				<option value="1998">1998</option>
         				<option value="1997">1997</option>
         				<option value="1996">1996</option>
         				<option value="1995">1995</option>
         				<option value="1994">1994</option>
         				<option value="1993">1993</option>
         				<option value="1992">1992</option>
         				<option value="1991">1991</option>
         				<option value="1990">1990</option>
         				<option value="1989">1989</option>
         				<option value="1988">1988</option>
         				<option value="1987">1987</option>
         				<option value="1986">1986</option>
         				<option value="1985">1985</option>
         				<option value="1984">1984</option>
         				<option value="1983">1983</option>
         				<option value="1982">1982</option>
         				<option value="1981">1981</option>
         				<option value="1980">1980</option>
         				<option value="1979">1979</option>
         				<option value="1978">1978</option>
         				<option value="1977">1977</option>
         				<option value="1976">1976</option>
         				<option value="1975">1975</option>
         				<option value="1974">1974</option>
         				<option value="1973">1973</option>
         				<option value="1972">1972</option>
         				<option value="1971">1971</option>
         				<option value="1970">1970</option>
         				<option value="1969">1969</option>
         				<option value="1968">1968</option>
         				<option value="1967">1967</option>
         				<option value="1966">1966</option>
         				<option value="1965">1965</option>
         				<option value="1964">1964</option>
         				<option value="1963">1963</option>
         				<option value="1962">1962</option>
         				<option value="1961">1961</option>
         				<option value="1960">1960</option>
      				</select>*</td>
			</tr>
			<tr>
				<td>Doğum Yeriniz : </td>
				<td><input type="text" name="dogumyeri" placeholder="Doğum Yeriniz" /></td>
			</tr>
			<tr>
				<td>Ev adresiniz : </td>
				<td><textarea name="evadresi" cols="50" rows="2" placeholder="Ev adresiniz"></textarea><br /></td>
			</tr>
			<tr>
				<td>İş adresiniz : </td>
				<td><textarea name="isadresi" cols="50" rows="2" placeholder="İş adresiniz"></textarea><br /></td>
			</tr>
			<tr>
				<td>Cep Telefonunuz : </td>
				<td><input type="text" name="telefon" placeholder="xxxxxxxxxx" />*</td>
			</tr>
			<tr><td><font size="1" color="red">Cep telefonu numaranızı lütfen 10 haneli olarak giriniz.</font></td></tr>
			<tr>
				<td>Cinsiyetiniz : </td> 
				<td><input type="radio" name="cinsiyet" value="erkek"> Erkek <br />
      				    <input type="radio" name="cinsiyet" value="kiz"> Kız <br /></td>
			</tr>
			<tr>
				<td>Tuttuğunuz Takım : </td> 
				<td><select name="takim">
         				<option value="fenerbahce">Fenerbahçe</option>
         				<option value="galatasaray">Galatasaray</option>
         				<option value="besiktas">Beşiktaş</option>
					<option value="trabzonspor">Trabzonspor</option>
					<option value="bursaspor">Bursaspor</option>
					<option value="diger">Diğer...</option>
      				</select></td>
			</tr>
			<tr>
				<td>Yaşadığınız Şehir : </td> 
				<td><input type="text" name="sehir" placeholder="Yaşadığınız Şehir" /></td>
			</tr>
			<tr>
				<td></td><td align="right"><input type="submit" value="Kaydol" /></td>
			</tr>
			<tr>
				<td style="vertical-align: top;"><br /></td>
				<td style="vertical-align: top; text-align: right;"><a
style="color: rgb(153, 153, 153);" href="uye_girisi.php">Zaten üyeyim</a><br /></td>
			</tr>
			<tr>
				<td><font size="1" color="red">* -> doldurulması zorunlu alanlar!</font><br /></td>
			</tr>
	</form>
</body>
</html>
