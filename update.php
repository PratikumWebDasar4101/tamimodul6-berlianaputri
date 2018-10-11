<?php 
	//Inisiasi Variable
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$password = $_POST['password'];
	$fakultas = $_POST['fakultas'];
	$jk = $_POST['jk'];
	$kelas = $_POST['kelas'];
	$hobi = $_POST['hobi'];
	$alamat = $_POST['alamat'];
	$id = $_POST['id'];

	//Update DB
	$db = new mysqli("localhost", "root", "", "jurnal6webdas");	
	$sql =	"UPDATE registrasi SET nim='$nim', nama='$nama', password='$password', kelas='$kelas', jenis_kelamin='$jk', hobi='$hobi', fakultas='$fakultas', alamat='$alamat' WHERE id='$id'";

	//Validasi DB - Check Error
	if (mysqli_query($db, $sql)) {
		echo "Update successfully";
	}else{
		echo "Error : " . $sql . "<br>" . mysqli_error($db);
	}

	//Close DB connection
	mysqli_close($db);
	echo "<br>";
	echo "<a href = halamanawal.php>Lihat List Data";
?>