<h2>Halaman Awal</h2>
<table border="1">
	<thead>
		<th>NIM</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Jenis Kelamin</th>
		<th>Hobi</th>
		<th>Fakultas</th>
		<th>Alamat</th>
	</thead>
	<tbody>

<?php

//Start Session
session_start();

//Inisiasi Variable
$nim = $_SESSION['nim'];
$password = $_SESSION['password'];

//Validasi DB
$db = new mysqli("localhost", "root", "", "jurnal6webdas");
$sql = "SELECT * from registrasi WHERE nim='$nim' && password='$password'";
$result = mysqli_query($db, $sql);

//Validasi output DB
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$_SESSION['id'] = $id;
		echo "<tr>";
		echo "<td>" . $row['nim'] . "</td>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $row['kelas'] . "</td>";
		echo "<td>" . $row['jenis_kelamin'] . "</td>";
		echo "<td>" . $row['hobi'] . "</td>";
		echo "<td>" . $row['fakultas'] . "</td>";
		echo "<td>" . $row['alamat'] . "</td>";
		echo "</tr>";
	}
}else{
	echo "0 result";
}

//Close DB connection
mysqli_close($db);
?>

	</tbody>
</table>

<h4>Menu : 
	<a href="halamanawal.php">Home</a> | 
	<a href="editprofile.php?id=<?php echo $_SESSION['id']; ?>">Edit Profile</a> | 
	<a href="posting.php?id=<?php echo $_SESSION['id']; ?>">Posting Cerita</a> | 
	<a href="daftarposting.php?id=<?php echo $_SESSION['id']; ?>">Daftar Cerita</a> | 
	<a href="semuaposting.php">Semua Cerita</a>
</h4>