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

    $sql_add = "UPDATE student SET id='$id',idnum='$idnum',firstname='$firstname',middlename='$middlename',lastname='$lastname',Course='$Course',Year='$Year',Sex='$Sex' WHERE id={$id}";


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

