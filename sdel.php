<?php

$db = mysqli_connect("localhost","root","","demo") or die("Cannot connect");
//echo "wala lang";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

   $sql_del = "DELETE FROM subject WHERE id = {$id}";
}
if(mysqli_query($db,$sql_del)){
		header("location: subjectread.php");
		
	}
	else {
				//echo "Student Profile was removed.\n";
		echo "Student Profile was removed.\n";
	}

   mysqli_close($db);
?>