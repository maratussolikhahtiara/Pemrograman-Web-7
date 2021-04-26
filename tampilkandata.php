<h2> List Mahasiswa</h2>
<table border="1"> 
	<tr><th>NO</th><th>NIM</th><th>NAMA</th><th>JENIS KELAMIN</th><th>JURUSAN</th></tr>
	<?php
	include 'koneksi.php'; //memasukan file koneksi.php
	$mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa"); //membuat variabel kontak yang menyimpan variable koneksi dan query select
	$no = 1; //membuat variabel no yang menyimpan nilai 1
	foreach ($mahasiswa as $row) { //untuk membuat perulangan 
			$jenis_kelamin = $row['jenis_kelamin'] == 'P'?'Perempuan':'Laki-Laki';
		echo //menampilkan data-data dari database yang sudah tersambung
		"<tr>
		<td> $no </td>
		<td>".$row['nim']." </td>
		<td>".$row['nama']." </td>
		<td>".$jenis_kelamin." </td>
		<td>".$row['jurusan']." </td>
			</tr>";
		$no++;
	}
	?>
</table>