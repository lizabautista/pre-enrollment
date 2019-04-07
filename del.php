<?php

$db = mysqli_connect("localhost","root","","demo") or die("Cannot connect");
//echo "wala lang";
if (isset($_GET['idnum'])) {
    $idnum = $_GET['idnum'];

    //$sql = "SELECT * FROM student WHERE idnum = {$idnum}";
  $sql = mysqli_query($db,"DELETE  from student WHERE idnum = {$idnum}");
}
if(mysqli_query($db,$sql)){
		echo "Student Profile was removed.\n";
	}
	else {
		header("location: studread.php");
	}

   mysqli_close($db);
?>