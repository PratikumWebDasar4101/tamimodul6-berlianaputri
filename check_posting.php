<?php
	session_start();

	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$cerita = $_POST['cerita'];
	$nim = $_SESSION['nim'];
	$gambar = $_FILES['foto']['name'];

	//echo $gambar;

	if (strlen($cerita) < 30) {
		$_SESSION['cerita_error'] = "Cerita minimal 30 kata";
		header("Location: posting.php");
	}

	$db = new mysqli("localhost", "root", "", "jurnal6webdas");	
	$sql = "INSERT INTO cerita(cerita, publisher, judul, foto) VALUES ('$cerita', '$id', '$judul', '$gambar')";

	if (mysqli_query($db, $sql)) {
		echo "New record created successfully";
	}else{
		echo "Error : " . $sql . "<br>" . mysqli_error($db);
	}

	move_uploaded_file($_FILES['foto']['tmp_name'], "Foto/".$_FILES['foto']['name']);

	//Close DB Connection
	mysqli_close($db);
	echo "<br><br>";
	echo "<a href = formlogin.php>LOGIN";
	
?>

<h4>Menu : 
	<a href="halamanawal.php">Home</a> | 
	<a href="editprofile.php?id=<?php echo $_SESSION['id']; ?>">Edit Profile</a> | 
	<a href="posting.php?id=<?php echo $_SESSION['id']; ?>">Posting Cerita</a> | 
	<a href="daftarposting.php?id=<?php echo $_SESSION['id']; ?>">Daftar Cerita</a> | 
	<a href="semuaposting.php">Semua Cerita</a>
</h4>