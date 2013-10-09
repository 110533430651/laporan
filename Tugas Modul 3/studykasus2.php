<!DOCTYPE HTML PUBLIC "-//W3C//DTD html 4.0 Transitional//EN".
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Data Checkbox</title>
</head>

<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Jumlah Saudara Kandung:  
		<input type="checkbox" name="jum[]" value="1" 
		/>1 orang
		
		<input type="checkbox" name="jum[]" value="2"checked=" 
		<?php
		if ($_post['jum']=="2"){
		echo 'selected="selected"';}
		?>2 orang <br />
			
		<input type="checkbox" name="jum[]" value="3"
		/>3 orang <br />
		
		<input type="checkbox" name="jum[]" value="4"
		/>4 orang <br />
		
		<input type="checkbox" name="jum[]" value="5"
		/>5 orang <br />
		
		<input type="checkbox" name="jum[]" value="banyak"
		/>Lebih dari 5 <br />
		
		<input type="submit" value="ok" />
	</form>

<?php
//Ekstraksi nilai
if (isset($_POST['jum'])) {
	foreach ($_POST['jum'] as $key => $val) {
	echo $key . ' -> ' .$val . '<br />';
	}
}
?>
</body>
</html>