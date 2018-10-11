<?php
	session_start();

	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
	}
?>

<h2>Posting Cerita</h2>

<form action="check_posting.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="text" name="judul" placeholder="Judul Cerita"><br><br>
	<textarea name="cerita" rows="20" cols="80"></textarea>
	<br>
	<?php if(isset($_SESSION['cerita_error'])) echo "*".$_SESSION['cerita_error']."<br>"; ?>
	<input type="file" name="foto">
	<br> <br>
	<input type="Submit" value="Posting">
</form>

<?php
	unset($_SESSION['cerita_error']);
	unset($_SESSION['post_error']);
?>

<h4>Menu : 
	<a href="halamanawal.php">Home</a> | 
	<a href="editprofile.php?id=<?php echo $_SESSION['id']; ?>">Edit Profile</a> | 
	<a href="posting.php?id=<?php echo $_SESSION['id']; ?>">Posting Cerita</a> | 
	<a href="daftarposting.php?id=<?php echo $_SESSION['id']; ?>">Daftar Cerita</a> | 
	<a href="semuaposting.php">Semua Cerita</a>
</h4>