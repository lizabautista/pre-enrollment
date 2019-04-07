<HTML>
<?php
	$db = mysqli_connect("localhost","root","","demo");

	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$un = $_POST['un'];
	$pw = $_POST['pw'];
	$sql_add = "INSERT INTO studentsign (firstname,lastname,username,password)
	VALUES('$fn','$ln','$un','$pw')";

	if(mysqli_query($db,$sql_add)){
		header("location: signup.php");
	}
	else {
		echo "Error: ".$sql_add."<br>".mysqli_error($db);
	}

	mysqli_close($db);
	?>
</HTML>

