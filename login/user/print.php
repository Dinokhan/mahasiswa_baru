<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body>
<?php
include "db.php";
include('akses.php');
?>
<h1 class="page-header">Cetak Data Mahasiswa</h1>
<table class="table table-striped table-hover">
				<?php
				$sql = mysqli_query($db, "SELECT * FROM mahasiswa where id_siswa='$_SESSION[id]'");
				$row = mysqli_fetch_array($sql);
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					
						echo '
						<tr>
							<th align="left"> Nama </th>
							<td> : </td>
							<td>'.$row['nama'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Tempat Lahir </th>
							<td> : </td>
							<td>'.$row['tempat_lahir'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Tanggal Lahir </th>
							<td> : </td>
							<td>'.$row['tanggal_lahir'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Jenis Kelamin </th>
							<td> : </td>
							<td>'.$row['jenis_kelamin'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Pilihan Prodi 1 </th>
							<td> : </td>
							<td>'.$row['pil_prodi'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Pilihan Prodi 2 </th>
							<td> : </td>
							<td>'.$row['pil_prodi2'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Pilihan Prodi 3 </th>
							<td> : </td>
							<td>'.$row['pil_prodi3'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Alamat </th>
							<td> : </td>
							<td>'.$row['alamat'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Desa </th>
							<td> : </td>
							<td>'.$row['desa'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Kecamatan </th>
							<td> : </td>
							<td>'.$row['kecamatan'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Kabupaten </th>
							<td> : </td>
							<td>'.$row['kabupaten'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Propinsi </th>
							<td> : </td>
							<td>'.$row['propinsi'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Kodepos </th>
							<td> : </td>
							<td>'.$row['kodepos'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> No Telp </th>
							<td> : </td>
							<td>'.$row['no_telp'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> No HP </th>
							<td> : </td>
							<td>'.$row['no_hp'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Email </th>
							<td> : </td>
							<td>'.$row['email'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Pendidikan Pesantren </th>
							<td> : </td>
							<td>'.$row['pendidikan_pesantren'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Nama Pesantren </th>
							<td> : </td>
							<td>'.$row['nama_pesantren'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Tahun Lulus </th>
							<td> : </td>
							<td>'.$row['lulus'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Lama Pendidikan </th>
							<td> : </td>
							<td>'.$row['lama_pendidikan'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> SD </th>
							<td> : </td>
							<td>'.$row['sd'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> SMP </th>
							<td> : </td>
							<td>'.$row['smp'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> SMA </th>
							<td> : </td>
							<td>'.$row['sma'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Nama Ayah </th>
							<td> : </td>
							<td>'.$row['ayah'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Pendidikan Terakhir </th>
							<td> : </td>
							<td>'.$row['pendidikan_terakhir'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Penghasilan </th>
							<td> : </td>
							<td>'.$row['penghasilan'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Pelatihan </th>
							<td> : </td>
							<td>'.$row['pelatihan'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Skill </th>
							<td> : </td>
							<td>'.$row['skill'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Username </th>
							<td> : </td>
							<td>'.$row['username'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Password </th>
							<td> : </td>
							<td>'.$row['password'].'</td>
						</tr>
						';
				}
				?>
			</table>

<script>
	window.load = print_d();
	function print_d(){
		window.print();
	}
</script>
</body>
</html>