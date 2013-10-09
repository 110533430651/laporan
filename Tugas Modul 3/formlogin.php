<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#faiz {
	font-family: "Times New Roman", Times, serif;
	font-size: 16px;
	font-style: oblique;
	text-decoration: blink;
	background-color: #93C;
	list-style-type: square;
}
#faiz {
	font-style: italic;
	text-decoration: blink;
	background-color: #F06;
	margin: auto;
	height: 6px;
	width: 4px;
}
#faiz {
	background-color: #93C;
	font-style: oblique;
	font-family: "Comic Sans MS", cursive;
	color: #000;
	border: thin solid #C66;
	position: relative;
	height: 6px;
	width: 5px;
}
#sa {
	font-family: "Comic Sans MS", cursive;
	font-size: 18px;
	font-style: oblique;
	color: #09F;
	background-color: #C4FFFF;
	height: 10px;
	width: 10px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #09F;
	border-right-color: #09F;
	border-bottom-color: #09F;
	border-left-color: #09F;
	list-style-type: square;
	position: fixed;
}
#apDiv1 {
	position: absolute;
	left: 478px;
	top: 86px;
	width: 334px;
	z-index: 1;
	background-color: #D2FFFF;
	border: 7px solid #88C4FF;
	visibility: visible;
	right: auto;
	bottom: auto;
	margin: 2px;
	padding: 20px;
	font-size: 36px;
	font-style: oblique;
	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
	color: #06F;
	text-align: left;
	height: 288px;
}
#as {
	font-family: "Comic Sans MS", cursive;
	background-color: #0CF;
	height: 15px;
	width: 15px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #0FF;
	border-right-color: #0FF;
	border-bottom-color: #0FF;
	border-left-color: #0FF;
	position: fixed;
}
#apDiv2 {
	position: absolute;
	left: 552px;
	top: 204px;
	width: 233px;
	height: 184px;
	z-index: 2;
	color: #09F;
	background-color: #D2FFFF;
	font-size: 18px;
}
</style>
<script>
function cek(a) {
al = /^[A-Za-z]{1,}$/; 
return al.test(a);
}
function val(){
var x=document.forms["myForm"]["nama"].value;
var y=document.forms["myForm"]["pass"].value;
if (x==null || x=="" && y==null || y=="") 

  {
  alert("Username atau Password Tidak Boleh Kosong");
  myForm.nama.focus();
  return false;
  }
if (!cek(x) || !cek(y)){ 
	alert ('Gunakan huruf untuk Username dan Password!');
	return false;
}}
</script>
</head>

<body bgcolor="#FFFF66">

<?php
?>
<div id="apDiv1" align="left">
    <label>Login</label>
  <hr align="center" width="300" size="5" color="#FF0000">
  </div>
<div id="apDiv2" align="left">
   <form name="myForm" method="POST" action="vali.php" onSubmit="return val()">
    <label>Username :</label>
    <br>
    <input type="text" name="nama" id="nama" width="200" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>">
    <br><br>
    <label>Password :</label>
    <br>
    <input type="password" name="pass" id="pass" width="200">
    <br><br>
    <input type="submit" name="Login" value="Login">
    <input type="reset" name="Reset" value="Reset">
  </form>
</div>
</body>
</html>