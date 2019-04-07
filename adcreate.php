<HTML>
<?php
	$db = mysqli_connect("localhost","root","","demo");
    
    if (isset($_POST['submit'])) {
    	$id = ($_POST['id']);
		$idnum = ucwords($_POST['idnum']);
		$firstname= ucwords($_POST['firstname']);
		$middlename = ucwords($_POST['middlename']);
		$lastname = ucwords($_POST['lastname']);
		$Course = ucwords($_POST['Course']);
		$Year = ucwords($_POST['Year']);
		$Sex = ucwords($_POST['Sex']);

	$sql_add = "INSERT INTO student (id,idnum,firstname,middlename,lastname,Course,Year,Sex)
	VALUES('$id','$idnum','$firstname','$middlename','$lastname','$Course','$Year','$Sex')";


	if(mysqli_query($db,$sql_add)){
		header("location: studread.php");
	}
	else {
		echo "Error: ".$sql_add."<br>".mysqli_error($db);
	}
}
	mysqli_close($db);
	?>
</HTML>