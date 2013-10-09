<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 436px;
	top: 86px;
	width: 450px;
	height: 341px;
	z-index: 1;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 36px;
	background-color: #FF0;
	border-color: #FFF;
	border-style: solid;
}
#apDiv2 {
	position: absolute;
	left: 54px;
	top: 79px;
	width: 340px;
	height: 214px;
	z-index: 2;
	font-size: 24px;
	background-color: #C03;
	border-color: #000;
	border-style: groove;
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
  alert("Username atau Password Tidak Boleh Kosong!");
  myForm.nama.focus();
  return false;
  }
if (!cek(x) || !cek(y)){ 
	return false;
}}
</script>
</head>

<body bgcolor="#33FF99">
<div id="apDiv1"><strong>LOGIN</strong>
  <hr />
  
<div id="apDiv2">
<label>Username: <input type="text" name="nama" id="user" /></label>
<form name="form" method="post" action="validasi.php" onSubmit="return val()">
<br /> <br />
<label> Password  : 
  <input name="" type="password" value="anys" /></label>

<br /> <br />
<form id="form1" name="form1" method="post" action="">
    <input type="submit" name="ok" id="ok" value="Login" />
    <input type="submit" name="c" id="c" value="Cancel" />
</form>
</div>

</div>


</body>
</html>