<?php
	session_start();

	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
	}

	$db = new mysqli("localhost", "root", "", "jurnal6webdas");
	$sql = "SELECT * from cerita where id='$id'";
	$result = mysqli_query($db, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$cerita = $row['cerita'];
				$judul = $row['judul'];
			}
		}
?>

<h2>Edit Cerita</h2>

<form action="updateposting.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="text" name="judul" placeholder="Judul Cerita" value="<?php echo $judul; ?>"><br><br>
	<textarea name="cerita" rows="20" cols="80"><?php echo $cerita; ?></textarea>
	<br>
	<?php if(isset($_SESSION['cerita_error'])) echo "*".$_SESSION['cerita_error']."<br>"; ?>
	<br>
	<input type="Submit" value="Edit">
</form>

<?php
	unset($_SESSION['cerita_error']);
?>

<h4>Menu : 
	<a href="halamanawal.php">Home</a> | 
	<a href="editprofile.php?id=<?php echo $_SESSION['id']; ?>">Edit Profile</a> | 
	<a href="posting.php?id=<?php echo $_SESSION['id']; ?>">Posting Cerita</a> | 
	<a href="daftarposting.php?id=<?php echo $_SESSION['id']; ?>">Daftar Cerita</a> | 
	<a href="semuaposting.php">Semua Cerita</a>
</h4>