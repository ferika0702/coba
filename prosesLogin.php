<?php
include "koneksi.php";

$id=$_POST['id'];
$password=md5($_POST['password']);

$query="SELECT*FROM user WHERE id='$id' and password='$password'";
$result=mysqli_query($connect, $query);
$cek=mysqli_num_rows($result);

if($cek){
?>
	<!DOCTYPE html>
<html>
<head>
	<title>~Ferika Putra~</title>
	<link rel="shortcut icon" href="img/liv.png">
	<link rel="stylesheet" type="text/css" href="tugas.css">
</head>
<body>
	<div>
		<a href="TugasWeb.html"><img src="img/lgk.jpg" style="width: 80px; margin-left: 50px;"><b style="color: red; float: right; font-size:30px; margin-right: 1050px; margin-top: 45px;">~Nayzer~</b></a>
	</div>
	<div class="heading1">
		<ul>
			<li><a class="active" href="TugasWeb.html" title="Halaman Awal">Home</a></li>
			<li><a href="news.html" title="berita lfc">News</a></li>
			<li><a href="Toko.html" title="Marchandise Club">Marchandise</a></li>
			<li><a href="admin.html" title="Khusus Admin">Admin</a></li>
			<li><a href="tentang.html" title="Tentang Pembuat web">Owner</a></li>
			<li><a href="halamanLogin.html" title="Logout">Logout</a></li>
			<br><br>
			<marquee><h3 style="color: red;">"~Jangan Lupa Tetap Melangit~"</h3></marquee>
		</ul>
	</div>
	<div class="wall">
		<h1>~~~Selamat Datang~~~</h1>
		<h2 class="a">~The Wall Champions~</h2>
		<img src="img/wall.jpg" alt="wall">
		<h2>~Champion League Winner~</h2>
		<img src="img/cmp.jpg" alt="Champion">
		<h2>~UEFA Super Cup Winner~</h2>
		<img src="img/uefa.jpg" alt="UEFA">
		<h2>~Club World Cup Winner~</h2>
		<img src="img/wc.jpg" alt="Club">
	</div>
	<div class="footer">
		<p id="kopirek">Copyright 2020 &copy;</p>
		<div class="akun">
			<p><img src="img/ig.png" alt="Instagram"><a href="https://www.instagram.com/ferika.vx/?hl=id" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;@ferika.vx</a></p>
			<p><img src="img/wa.png" alt="WA">&nbsp;&nbsp;&nbsp;081907684932</p>
		</div>
	</div>
</body>
</html>
	<?php
}else{
?>
	<a href="halamanLogin.html">Login kembali</a>
	<?php
	echo mysqli_error($connect);
}
?>