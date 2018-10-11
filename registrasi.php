<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<?php
		session_start();
	?>
	<table>
		<form action="simpan.php" method="post">
			<tr>
				<td></td>
				<td></td>
				<td><h2>REGISTRASI USER</h2></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input type="text" name="nama"> <?php if(isset($_SESSION['nama_err'])) echo $_SESSION['nama_err']; ?></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim"> <?php if(isset($_SESSION['nim_err'])) echo $_SESSION['nim_err']; ?> </td>
			</tr>
			<tr>
				<td>Password</td>
				<td> : </td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td> : </td>
				<td>
					<input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01
					<input type="radio" name="kelas" value="D3KA-41-01">D3KA-41-01
					<input type="radio" name="kelas" value="D3IF-41-01">D3IF-41-01
					<input type="radio" name="kelas" value="D3TK-41-01">D3TK-41-01
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
					<input type="checkbox" name="hobi" value="Membaca">Membaca
					<input type="checkbox" name="hobi" value="Menulis">Menulis
					<input type="checkbox" name="hobi" value="Menyanyi">Menyanyi
					<input type="checkbox" name="hobi" value="Melukis">Melukis
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
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
			<tr>
				<td>Sudah registrasi?</td>
				<td></td>
				<td><a href="formlogin.php">Login</a></td>
			</tr>
		</form>
	</table>
	<?php
		session_destroy();
	?>
</body>
</html>