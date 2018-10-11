<?php

	$cerita = $_POST['cerita'];
	$judul = $_POST['judul'];
	$id = $_POST['id'];
	
	$db = new mysqli("localhost", "root", "", "jurnal6webdas");	
	$sql =	"UPDATE cerita SET cerita='$cerita', judul='$judul' WHERE id='$id'";

	//Validasi DB - Check Error
	if (mysqli_query($db, $sql)) {
		echo "Update successfully";
	}else{
		echo "Error : " . $sql . "<br>" . mysqli_error($db);
	}

	//Close DB connection
	mysqli_close($db);
	echo "<br>";
	
	header("Location: halamanawal.php");

?>