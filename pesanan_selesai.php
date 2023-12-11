<title> Pemesanan Berhasil</title>

<?php
	$nama = $_GET['nama'];
	$jenispesanan=$_GET['jenis_pesanan'];
	$nomormeja=$_GET['nomor_meja'];
	$alamat=$_GET['alamat'];
	$nomortelepon=$_GET['nomor_telepon'];
	$menuyangdipesan=$_GET['menu_yang_dipesan'];




echo "<br><h2><center>TERIMA KASIH ATAS PESANAN ANDA</center></h2>";

	echo "<center>Selamat pesanan atas nama ".$nama; echo " telah berhasil dibuat."; echo "<br>";
	echo "Anda memilih untuk : ".$jenispesanan; echo "<br>";
	echo "(Khusus untuk yang memilih makan disini) Nomor meja anda adalah :".$nomormeja; echo"<br>";
	echo "(Khusus yang memilih pesan antar) Pesanan akan dikirim ke : ".$alamat; echo "<br>";
	echo "(Khusus yang memilih pesan antar) Nomor telepon anda adalah : ".$nomortelepon; echo "<br>";
	echo "Pesanan Anda adalah : ".$menuyangdipesan;
	
?>
<body background="gambar1.jpg">