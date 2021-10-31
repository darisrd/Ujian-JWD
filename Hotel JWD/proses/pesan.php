<?php
include'conn.php';
$nama_pemesan=$_POST['nama_pemesan'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$nomor_id=$_POST['nomor_id'];
$tipe_kamar=$_POST['tipe_kamar'];
$harga=$_POST['harga'];
$tanggal_pesan=$_POST['tanggal_pesan'];
$durasi=$_POST['durasi'];
$breakfast = isset($_POST['breakfast']) ? $_POST['breakfast'] : 'Tidak';
$total=$_POST['total'];
	
if(isset($_POST['submit'])){

	$sql = 
	"INSERT INTO pesanan
	VALUES('','$nama_pemesan','$jenis_kelamin','$nomor_id','$tipe_kamar','$harga','$tanggal_pesan','$durasi','$breakfast','$total')";
	$query = mysqli_query($db, $sql);

	header("location:../my%20booking.php");
}



?>