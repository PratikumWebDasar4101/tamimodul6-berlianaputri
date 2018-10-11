<?php

	session_start();

	//Validasi ID
	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
		$db = new mysqli("localhost", "root", "", "jurnal6webdas");
		
		$sql = "SELECT * from registrasi where id='$id'";
		$result = mysqli_query($db, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$nim = $row['nim'];
				$nama = $row['nama'];
				$password = $row['password'];
				$kelas = $row['kelas'];
				$jk = $row['jenis_kelamin'];
				$hobi = $row['hobi'];
				$fakultas = $row['fakultas'];
				$alamat = $row['alamat'];
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Update</title>
</head>
<body>
	<table>
		<form action="update.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<tr>
				<td></td>
				<td></td>
				<td><h3>UPDATE PROFILE USER</h3></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim" value="<?php echo $nim; ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td> : </td>
				<td><input type="password" name="password" value="<?php echo $password; ?>"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td> : </td>
				<td>
					<input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01<br>
					<input type="radio" name="kelas" value="D3KA-41-01">D3KA-41-01<br>
					<input type="radio" name="kelas" value="D3IF-41-01">D3IF-41-01<br>
					<input type="radio" name="kelas" value="D3TK-41-01">D3TK-41-01<br>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
					<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td> : </td>
				<td>
					<input type="checkbox" name="hobi" value="Membaca">Membaca<br>
					<input type="checkbox" name="hobi" value="Menulis">Menulis<br>
					<input type="checkbox" name="hobi" value="Menyanyi">Menyanyi<br>
					<input type="checkbox" name="hobi" value="Melukis">Melukis<br>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td> : </td>
				<td>
					<select name="fakultas">
						<option>Fakultas Ilmu Terapan</option>
						<option>Fakultas Rekayasa Industri</option>
						<option>Fakultas Industri Kreatif</option>
						<option>Fakultas Teknik Elektro</option>
						<option>Fakultas Informatika</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><textarea name="alamat"><?php echo $alamat; ?></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Update"></td>
			</tr>
		</form>
	</table>

	<h4>Menu : 
		<a href="halamanawal.php">Home</a> | 
		<a href="editprofile.php?id=<?php echo $_SESSION['id']; ?>">Edit Profile</a> | 
		<a href="posting.php?id=<?php echo $_SESSION['id']; ?>">Posting Cerita</a> | 
		<a href="daftarposting.php?id=<?php echo $_SESSION['id']; ?>">Daftar Cerita</a> | 
		<a href="semuaposting.php">Semua Cerita</a>
	</h4>

</body>
</html>