<HTML>
<?php
	$db = mysqli_connect("localhost","root","","demo");

 if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$subcode = $_POST['subcode'];
	$subdec = $_POST['subdec'];
	$subsection = $_POST['subsection'];
	$subunit= $_POST['subunit'];
	$sql_add = "INSERT INTO subject (id,subcode,subdec,subsection,subunit)
	VALUES('$id','$subcode','$subdec','$subsection','$subunit')";

	if(mysqli_query($db,$sql_add)){
		header("location: subjectread.php");
	}
	else {
		echo "Error: ".$sql_add."<br>".mysqli_error($db);
	}
}
	mysqli_close($db);
	?>
</HTML>