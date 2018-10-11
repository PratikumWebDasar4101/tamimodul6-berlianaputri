<?php
	//Start Session
	session_start();

	//Inisiasi variable
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$password = $_POST['password'];
	$fakultas = $_POST['fakultas'];
	$jk = $_POST['jk'];
	$kelas = $_POST['kelas'];
	$hobi = $_POST['hobi'];
	$alamat = $_POST['alamat'];

	//Counter error
	$ctr = 0;

	//Validasi Error
	if (strlen($nama) > 35 || strlen($nama) == 0) {
		$_SESSION['nama_err'] = "Nama harus diisi maksimal 35 karakter";
		$ctr++;
	}

	if (strlen($nim) <> 10 || !is_numeric($nim)) {
		$_SESSION['nim_err'] = "NIM harus 10 karakter numerik";
		$ctr++;
	}

	if ($ctr >= 1) {
		$ctr = 0;
		header("Location: registrasi.php");
	}

	//Insert ke DB
	$db = new mysqli("localhost", "root", "", "jurnal6webdas");	
	$sql = "INSERT INTO registrasi(nim, nama, kelas, jenis_kelamin, hobi, fakultas, alamat, password)
			VALUES ('$nim', '$nama', '$kelas', '$jk', '$hobi', '$fakultas', '$alamat', '$password')";

	if (mysqli_query($db, $sql)) {
		echo "New record created successfully";
	}else{
		echo "Error : " . $sql . "<br>" . mysqli_error($db);
	}

	//Close DB Connection
	mysqli_close($db);
	echo "<br><br>";
	echo "<a href = formlogin.php>LOGIN";

?>
