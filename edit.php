<?php

$db = mysqli_connect("localhost","root","","demo");

if (isset($_POST['submit'])) {
   $idnum = ucwords($_POST['idnum']);
        $firstname= ucwords($_POST['firstname']);
        $middlename = ucwords($_POST['middlename']);
        $lastname = ucwords($_POST['lastname']);
        $Course = ucwords($_POST['Course']);
        $Year = ucwords($_POST['Year']);
        $Sex = ucwords($_POST['Sex']);

    $sql = "UPDATE student SET idnum = '$idnum', firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', Course = '$Course', Year = '$Year' WHERE idnum = {$idnum}";

   if(mysqli_query($db,$sql)){
        echo "Student Profile was updated.\n";
    }
        
    } else {
        echo "Erorr while updating record : ";
    }

   mysqli_close($db);


?>
