<!DOCTYPE HTML PUBLIC "-//W3C//DTD html 4.0 Transitional//EN".
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Penanganan Seleksi dengan Preselecting</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Warna Kesukaan:
		<select name="color">
			<option value="merah">Merah
			<option value="kuning">Kuning
			<option value="biru"selected="
			<?php
			if ($_post['clr']=="merah"){
			echo 'selected="selected"';}
			?>Biru
			<option value="hijau">Hijau
			<option value="ungu">Ungu
			<option value="hitam">Hitam
			<option value="putih">Putih
			<option value="abu-abu">Abu-Abu
			<option value="coklat">Coklat
			
		</select> <br />
		
		<input type="submit" value="ok" />
	</form>
	
<?php
if (isset($_POST['color'])) {
	echo $_POST['color'];
}
?>

</body>
</html>