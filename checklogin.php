<?php
	//Start Session
	session_start();

	//Inisiasi Variable
	$nim = $_POST['nim'];
	$nama = $_POST['password'];

	//Validasi NIM
	if (strlen($nim) <> 10 || !is_numeric($nim)) {
		$_SESSION['nim_err'] = "NIM harus 10 karakter numerik";
		header("Location: formlogin.php");
	}

	//Mengambil data dari DB
	$db = new mysqli("localhost", "root", "", "jurnal6webdas");
	$nim = $_POST['nim'];
	$password = $_POST['password'];
	$sql = mysqli_query($db, "SELECT * from registrasi WHERE nim='$nim' && password='$password'");
	$no = mysqli_num_rows($sql);
	
	//Validasi Output dari DB
	if ($no == 1) {
		session_start();
		$_SESSION['nim'] = $nim;
		$_SESSION['password'] = $password;
		header("Location: halamanawal.php");
	}else{
		header("Location: registrasi.php");
	}

?>