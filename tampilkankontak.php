<h2> Nama Kontak</h2> <!-- judul pada halaman web -->
<table border="1"> 
	<tr><th>NO</th><th>ID</th><th>NAMA</th><th>JENIS KELAMIN</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
	<?php  
	include 'koneksi.php'; //koneksi ke database
	$kontak = mysqli_query($koneksi, "SELECT *from user");
	$no=1;
	foreach ($kontak as $row) { //perulangan 
		echo "<tr> 
			<td>$no</td>
			<td>".$row['nama']."</td>
			<td>".$row['jekel']." </td>
			<td>".$row['email']."</td>
			<td>".$row['alamat']."</td>
			<td>".$row['kota']."</td>
			<td>".$row['pesan']."</td>
		</tr>"; // create isi yang ada dalam tabel
		$no++;
	}
	?>
</table>