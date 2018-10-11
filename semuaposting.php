<?php
	session_start();
	$db = new mysqli("localhost", "root", "", "jurnal6webdas");
	$sql = "SELECT a.id as kode, a.cerita, b.nama, a.foto, a.judul from cerita a JOIN registrasi b on (a.publisher=b.id)";
	$result = mysqli_query($db, $sql);

	echo "<h2>SEMUA POST</h2>";

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			
			echo "Diposting oleh : " . $row['nama'] . "<br>";
			echo "Judul : " . $row['judul']. "<br>";
			echo "<img src='Foto/".$row['foto']."' width=200 hwight=200> <br>";
			echo $row['cerita'] . "<br> <br>";
			echo "==============================================================================================<br>";

		}
	}else{
		echo "0 result";
	}
?>

<h4>Menu : 
	<a href="halamanawal.php">Home</a> | 
	<a href="editprofile.php?id=<?php echo $_SESSION['id']; ?>">Edit Profile</a> | 
	<a href="posting.php?id=<?php echo $_SESSION['id']; ?>">Posting Cerita</a> | 
	<a href="daftarposting.php?id=<?php echo $_SESSION['id']; ?>">Daftar Cerita</a> | 
	<a href="semuaposting.php">Semua Cerita</a>
</h4>